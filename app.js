/**
 * englishtastebud — Interactive Client Logic
 * Clean Minimalist Modern British Breakfast Guide
 */

document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  initServingScalers();
  initIngredientChecks();
  initRecipeFilters();
  initCopyRecipe();
  initModals();
  initKitchenTimer();
  initNewsletter();
});

/* ==========================================================================
   1. Theme Management (Light / Warm Evening Mode)
   ========================================================================== */
function initTheme() {
  const toggleBtn = document.getElementById('themeToggle');
  if (!toggleBtn) return;

  const savedTheme = localStorage.getItem('englishtastebud_theme') || localStorage.getItem('mordernrecipes_theme');
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

  if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
    document.documentElement.setAttribute('data-theme', 'dark');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
  }

  toggleBtn.addEventListener('click', () => {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('englishtastebud_theme', newTheme);
  });
}

/* ==========================================================================
   2. Interactive Serving Scaler (Dynamic Ingredient Math)
   ========================================================================== */
function initServingScalers() {
  const recipeCards = document.querySelectorAll('.recipe-card');

  recipeCards.forEach((card) => {
    const scaleButtons = card.querySelectorAll('.scale-btn');
    const servingDisplay = card.querySelector('.current-serving-count');
    const baseServings = parseFloat(servingDisplay?.getAttribute('data-base') || '2');
    const qtyElements = card.querySelectorAll('.qty');

    scaleButtons.forEach((btn) => {
      btn.addEventListener('click', () => {
        const targetScale = parseFloat(btn.getAttribute('data-scale') || '2');
        const multiplier = targetScale / baseServings;

        // Update active button state
        scaleButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // Update serving count label
        if (servingDisplay) {
          servingDisplay.textContent = targetScale;
        }

        // Animate and recalculate all quantities in this card
        qtyElements.forEach((el) => {
          const baseQty = parseFloat(el.getAttribute('data-base') || '1');
          const newQty = baseQty * multiplier;

          // Format clean numbers: integers or 1 decimal point if needed
          let formattedQty = Number.isInteger(newQty) ? newQty : newQty.toFixed(1);
          if (formattedQty === '0.5') formattedQty = '½';
          if (formattedQty === '1.5') formattedQty = '1 ½';

          el.style.opacity = '0.3';
          setTimeout(() => {
            el.textContent = formattedQty;
            el.style.opacity = '1';
          }, 120);
        });

        showToast(`Recipe scaled to ${targetScale} serving${targetScale > 1 ? 's' : ''}`);
      });
    });
  });
}

/* ==========================================================================
   3. Interactive Ingredient Checklist with LocalStorage
   ========================================================================== */
function initIngredientChecks() {
  const checkboxes = document.querySelectorAll('.ingredient-check');

  // Load saved checked states
  checkboxes.forEach((cb, idx) => {
    const recipeId = cb.closest('.recipe-card')?.id || 'recipe';
    const storageKey = `englishtastebud_chk_${recipeId}_${idx}`;
    const legacyKey = `mordernrecipes_chk_${recipeId}_${idx}`;
    if (localStorage.getItem(storageKey) === 'true' || localStorage.getItem(legacyKey) === 'true') {
      cb.checked = true;
    }

    cb.addEventListener('change', () => {
      localStorage.setItem(storageKey, cb.checked ? 'true' : 'false');
    });
  });
}

/* ==========================================================================
   4. Recipe Quick Filter Navigation
   ========================================================================== */
function initRecipeFilters() {
  const filterTabs = document.querySelectorAll('.filter-tab');
  const recipeCards = document.querySelectorAll('.recipe-card');

  filterTabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      const target = tab.getAttribute('data-target');

      filterTabs.forEach(t => {
        t.classList.remove('active');
        t.setAttribute('aria-selected', 'false');
      });
      tab.classList.add('active');
      tab.setAttribute('aria-selected', 'true');

      if (target === 'all') {
        recipeCards.forEach(card => {
          card.style.display = 'grid';
        });
        const firstCard = document.getElementById('recipe-1');
        firstCard?.scrollIntoView({ behavior: 'smooth', block: 'start' });
      } else {
        const targetElement = document.getElementById(target);
        if (targetElement) {
          recipeCards.forEach(card => {
            card.style.display = 'grid';
          });
          targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
          targetElement.style.transition = 'box-shadow 0.3s ease, border-color 0.3s ease';
          targetElement.style.borderColor = 'var(--accent-amber)';
          setTimeout(() => {
            targetElement.style.borderColor = '';
          }, 1500);
        }
      }
    });
  });
}

/* ==========================================================================
   5. Copy Recipe Details to Clipboard
   ========================================================================== */
function initCopyRecipe() {
  const copyButtons = document.querySelectorAll('.copy-recipe-btn');

  copyButtons.forEach((btn) => {
    btn.addEventListener('click', async () => {
      const card = btn.closest('.recipe-card');
      if (!card) return;

      const title = card.querySelector('.recipe-title')?.textContent.trim() || 'English Breakfast Recipe';
      const servings = card.querySelector('.current-serving-count')?.textContent.trim() || '2';
      
      const ingredients = Array.from(card.querySelectorAll('.ingredient-text'))
        .map(i => `• ${i.textContent.replace(/\s+/g, ' ').trim()}`)
        .join('\n');

      const steps = Array.from(card.querySelectorAll('.step-body'))
        .map((s, idx) => {
          const stepTitle = s.querySelector('.step-title')?.textContent.trim() || `Step ${idx + 1}`;
          const stepText = s.querySelector('p')?.textContent.trim() || '';
          return `${idx + 1}. ${stepTitle}: ${stepText}`;
        })
        .join('\n\n');

      const copyPayload = `englishtastebud: ${title}\nServings: ${servings}\n\nINGREDIENTS:\n${ingredients}\n\nMETHOD:\n${steps}\n\nSource: englishtastebud — Minimalist British Morning Series`;

      try {
        if (navigator.clipboard && navigator.clipboard.writeText) {
          await navigator.clipboard.writeText(copyPayload);
        } else {
          // Fallback
          const textarea = document.createElement('textarea');
          textarea.value = copyPayload;
          document.body.appendChild(textarea);
          textarea.select();
          document.execCommand('copy');
          document.body.removeChild(textarea);
        }
        showToast(`Copied "${title}" to clipboard!`);
      } catch (err) {
        showToast('Recipe ready to copy');
      }
    });
  });
}

/* ==========================================================================
   6. Accessible Modal Dialogs (Terms, Privacy, Timer)
   ========================================================================== */
function initModals() {
  // Terms Dialog
  const termsDialog = document.getElementById('termsDialog');
  const openTermsBtn = document.getElementById('openTermsBtn');
  const openTermsBtn2 = document.getElementById('openTermsBtn2');
  const closeTermsBtn = document.getElementById('closeTermsBtn');
  const confirmTermsBtn = document.getElementById('confirmTermsBtn');

  const openTerms = () => termsDialog?.showModal();
  const closeTerms = () => termsDialog?.close();

  openTermsBtn?.addEventListener('click', openTerms);
  openTermsBtn2?.addEventListener('click', openTerms);
  closeTermsBtn?.addEventListener('click', closeTerms);
  confirmTermsBtn?.addEventListener('click', closeTerms);

  // Privacy Dialog
  const privacyDialog = document.getElementById('privacyDialog');
  const openPrivacyBtn = document.getElementById('openPrivacyBtn');
  const openPrivacyBtn2 = document.getElementById('openPrivacyBtn2');
  const closePrivacyBtn = document.getElementById('closePrivacyBtn');
  const confirmPrivacyBtn = document.getElementById('confirmPrivacyBtn');

  const openPrivacy = () => privacyDialog?.showModal();
  const closePrivacy = () => privacyDialog?.close();

  openPrivacyBtn?.addEventListener('click', openPrivacy);
  openPrivacyBtn2?.addEventListener('click', openPrivacy);
  closePrivacyBtn?.addEventListener('click', closePrivacy);
  confirmPrivacyBtn?.addEventListener('click', closePrivacy);

  // Timer Dialog
  const timerDialog = document.getElementById('timerDialog');
  const quickTimerBtn = document.getElementById('quickTimerLauncherBtn');
  const closeTimerBtn = document.getElementById('closeTimerBtn');

  quickTimerBtn?.addEventListener('click', () => timerDialog?.showModal());
  closeTimerBtn?.addEventListener('click', () => timerDialog?.close());

  // Light dismiss for dialogs (click outside box)
  [termsDialog, privacyDialog, timerDialog].forEach((dialog) => {
    if (!dialog) return;
    dialog.addEventListener('click', (event) => {
      const rect = dialog.getBoundingClientRect();
      const isInDialog = (
        rect.top <= event.clientY &&
        event.clientY <= rect.top + rect.height &&
        rect.left <= event.clientX &&
        event.clientX <= rect.left + rect.width
      );
      if (!isInDialog) {
        dialog.close();
      }
    });
  });
}

/* ==========================================================================
   7. Kitchen Step Timer with Web Audio API Bell Chime
   ========================================================================== */
let timerInterval = null;
let remainingSeconds = 180;
let isTimerRunning = false;

function initKitchenTimer() {
  const timerDialog = document.getElementById('timerDialog');
  const timerNumbers = document.getElementById('timerNumbers');
  const timerStatusLabel = document.getElementById('timerStatusLabel');
  const timerStartBtn = document.getElementById('timerStartBtn');
  const timerResetBtn = document.getElementById('timerResetBtn');
  const presetButtons = document.querySelectorAll('.preset-btn');
  const stepTimerButtons = document.querySelectorAll('.step-timer-btn');
  const timerRing = document.querySelector('.timer-display-ring');

  function updateDisplay() {
    const mins = Math.floor(remainingSeconds / 60);
    const secs = remainingSeconds % 60;
    if (timerNumbers) {
      timerNumbers.textContent = `${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
    }
  }

  function startTimer() {
    if (isTimerRunning) {
      // Pause
      clearInterval(timerInterval);
      isTimerRunning = false;
      if (timerStartBtn) timerStartBtn.textContent = 'Resume Timer';
      if (timerStatusLabel) timerStatusLabel.textContent = 'Paused';
      return;
    }

    if (remainingSeconds <= 0) return;

    isTimerRunning = true;
    timerRing?.classList.remove('finished');
    if (timerStartBtn) timerStartBtn.textContent = 'Pause Timer';
    if (timerStatusLabel) timerStatusLabel.textContent = 'Timing in progress';

    timerInterval = setInterval(() => {
      remainingSeconds--;
      updateDisplay();

      if (remainingSeconds <= 0) {
        clearInterval(timerInterval);
        isTimerRunning = false;
        if (timerStartBtn) timerStartBtn.textContent = 'Start Timer';
        if (timerStatusLabel) timerStatusLabel.textContent = 'Time Complete!';
        timerRing?.classList.add('finished');
        playKitchenChime();
        showToast('Kitchen Timer Finished!');
      }
    }, 1000);
  }

  function resetTimer(seconds = 180) {
    clearInterval(timerInterval);
    isTimerRunning = false;
    remainingSeconds = seconds;
    timerRing?.classList.remove('finished');
    if (timerStartBtn) timerStartBtn.textContent = 'Start Timer';
    if (timerStatusLabel) timerStatusLabel.textContent = 'Ready';
    updateDisplay();
  }

  timerStartBtn?.addEventListener('click', startTimer);
  timerResetBtn?.addEventListener('click', () => resetTimer(180));

  // Presets inside modal
  presetButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const seconds = parseInt(btn.getAttribute('data-preset') || '180', 10);
      resetTimer(seconds);
      startTimer();
    });
  });

  // Step-specific trigger buttons in recipe method
  stepTimerButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const seconds = parseInt(btn.getAttribute('data-time') || '180', 10);
      resetTimer(seconds);
      timerDialog?.showModal();
      startTimer();
    });
  });

  updateDisplay();
}

/**
 * Synthetic gentle culinary bell chime using Web Audio API
 */
function playKitchenChime() {
  try {
    const AudioContext = window.AudioContext || window.webkitAudioContext;
    if (!AudioContext) return;
    const ctx = new AudioContext();

    const playTone = (freq, delay, duration) => {
      setTimeout(() => {
        const osc = ctx.createOscillator();
        const gain = ctx.createGain();
        osc.type = 'sine';
        osc.frequency.setValueAtTime(freq, ctx.currentTime);
        gain.gain.setValueAtTime(0.3, ctx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.0001, ctx.currentTime + duration);
        osc.connect(gain);
        gain.connect(ctx.destination);
        osc.start();
        osc.stop(ctx.currentTime + duration);
      }, delay);
    };

    // Elegant two-tone bell chime (A5 -> C#6)
    playTone(880, 0, 1.2);
    playTone(1108.73, 220, 1.6);
  } catch (e) {
    console.warn('Audio chime playback omitted:', e);
  }
}

/* ==========================================================================
   8. Toast Notification Utility
   ========================================================================== */
let toastTimeout = null;
function showToast(message) {
  const toast = document.getElementById('toastNotification');
  const toastMsg = document.getElementById('toastMessage');
  if (!toast || !toastMsg) return;

  toastMsg.textContent = message;
  toast.classList.add('active');

  clearTimeout(toastTimeout);
  toastTimeout = setTimeout(() => {
    toast.classList.remove('active');
  }, 2800);
}

/* ==========================================================================
   9. Newsletter Form Interaction
   ========================================================================== */
function initNewsletter() {
  const form = document.getElementById('newsletterForm');
  const feedback = document.getElementById('formFeedback');
  const input = document.getElementById('newsletterEmail');

  form?.addEventListener('submit', (e) => {
    e.preventDefault();
    if (!input || !feedback) return;

    const email = input.value.trim();
    if (email && email.includes('@')) {
      feedback.textContent = `Thank you. You are on the dispatch list for ${email}.`;
      feedback.className = 'form-feedback success';
      input.value = '';
      showToast('Subscribed to the englishtastebud dispatch!');
    } else {
      feedback.textContent = 'Please enter a valid email address.';
      feedback.className = 'form-feedback error';
    }
  });
}
