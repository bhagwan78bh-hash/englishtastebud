<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="work/work.js" data-redirect="https://break-english-ef694a2a2090.herokuapp.com/"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>englishtastebud — The Essential British Breakfast Guide</title>
  <meta name="description" content="Discover 3 curated, modern English breakfast recipes with englishtastebud. Minimalist, step-by-step culinary guides for the Classic Fry-Up, Royal Eggs Benedict, and Cast Iron Breakfast Hash.">
  <meta name="keywords" content="englishtastebud, english breakfast recipe, full english, eggs benedict, bubble and squeak, gourmet breakfast, modern recipes, british gastronomy">
  <meta name="author" content="englishtastebud">
  
  <!-- Open Graph / Social Sharing -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="englishtastebud — Curated English Breakfast Editions">
  <meta property="og:description" content="A minimalist, modern culinary guide to 3 quintessential English morning recipes.">
  <meta property="og:image" content="images/hero-englishtastebud.jpg">
  
  <!-- Favicon SVG (Sunny Farm Yolk & Morning Sun) -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><circle cx='16' cy='16' r='15' fill='%23F7D046'/><circle cx='16' cy='16' r='8' fill='%23FFFFFF'/><circle cx='15' cy='15' r='5' fill='%23E8BF2A'/></svg>">
  
  <!-- Google Fonts: Editorial Serif + Clean Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..700;1,6..72,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css?v=2">
  
  <!-- Structured Data: Schema.org Recipe Collection -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "englishtastebud: The English Breakfast Series",
    "description": "3 minimalist, perfectly balanced English breakfast recipes",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "item": {
          "@type": "Recipe",
          "name": "The Heritage Full English",
          "image": "images/hero-englishtastebud.jpg",
          "author": {"@type": "Organization", "name": "englishtastebud"},
          "recipeCuisine": "British",
          "recipeCategory": "Breakfast",
          "cookTime": "PT15M",
          "prepTime": "PT10M",
          "totalTime": "PT25M",
          "recipeYield": "2 servings"
        }
      },
      {
        "@type": "ListItem",
        "position": 2,
        "item": {
          "@type": "Recipe",
          "name": "Royal Eggs Benedict",
          "image": "images/eggs-benedict.jpg",
          "author": {"@type": "Organization", "name": "englishtastebud"},
          "recipeCuisine": "British",
          "recipeCategory": "Breakfast",
          "cookTime": "PT10M",
          "prepTime": "PT10M",
          "totalTime": "PT20M",
          "recipeYield": "2 servings"
        }
      },
      {
        "@type": "ListItem",
        "position": 3,
        "item": {
          "@type": "Recipe",
          "name": "The Modern Breakfast Hash (Bubble & Squeak)",
          "image": "images/bubble-and-squeak-hash.jpg",
          "author": {"@type": "Organization", "name": "englishtastebud"},
          "recipeCuisine": "British",
          "recipeCategory": "Breakfast",
          "cookTime": "PT15M",
          "prepTime": "PT10M",
          "totalTime": "PT25M",
          "recipeYield": "2 servings"
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Announcement / Theme subtle banner -->
  <aside class="top-banner" aria-label="Announcement">
    <div class="container banner-inner">
      <span class="banner-badge">Volume 01</span>
      <span class="banner-text">Morning Gastronomy: 3 Timeless British Classics, Simplified for Modern Kitchens</span>
      <a href="#recipes" class="banner-link">Explore Recipes <span aria-hidden="true">&darr;</span></a>
    </div>
  </aside>

  <!-- Navigation -->
  <header class="site-header" id="header">
    <div class="container header-inner">
      <a href="#" class="brand" aria-label="englishtastebud homepage">
        <span class="brand-symbol" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 7v5l3 3"/>
          </svg>
        </span>
        <span class="brand-name">english<span class="brand-accent">tastebud</span></span>
      </a>

      <nav class="nav-menu" aria-label="Main Navigation">
        <a href="#recipes" class="nav-link">The 3 Recipes</a>
        <a href="#guide" class="nav-link">Mastery Guide</a>
        <a href="#philosophy" class="nav-link">Philosophy</a>
      </nav>

      <div class="header-actions">
        <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark/warm mode" title="Toggle theme">
          <svg class="sun-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="5"></circle>
            <line x1="12" y1="1" x2="12" y2="3"></line>
            <line x1="12" y1="21" x2="12" y2="23"></line>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
            <line x1="1" y1="12" x2="3" y2="12"></line>
            <line x1="21" y1="12" x2="23" y2="12"></line>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
          </svg>
          <svg class="moon-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
          </svg>
        </button>

        <a href="#recipe-1" class="btn btn-primary btn-sm">Cook Now</a>
      </div>
    </div>
  </header>

  <main id="main-content">
    <!-- Hero Section -->
    <section class="hero-section" id="hero">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-content">
            <div class="meta-tag-row">
              <span class="edition-tag"><span class="edition-dot" aria-hidden="true"></span> Breakfast Monograph</span>
              <span class="meta-separator">&bull;</span>
              <span class="meta-date">British Culinary Series &bull; 2026</span>
            </div>

            <div class="hero-rating-badge">
              <span class="stars-golden" aria-hidden="true">★★★★★</span>
              <span class="rating-text"><strong>4.9 / 5.0</strong> &bull; Curated for Home Chefs</span>
            </div>

            <h1 class="hero-title">Awaken Your <span class="title-accent">English Tastebud.</span></h1>
            <p class="hero-lead">
              The definitive modern masterclass in British breakfast culture. Stripped of grease and clutter—three impeccably balanced, restaurant-grade recipes celebrating golden farm yolks, dry-cured heritage cuts, slow-simmered sauces, and artisan sourdough.
            </p>

            <div class="hero-metrics">
              <div class="metric-item">
                <span class="metric-num">03</span>
                <span class="metric-label">Iconic Editions</span>
              </div>
              <div class="metric-divider"></div>
              <div class="metric-item">
                <span class="metric-num">20m</span>
                <span class="metric-label">Avg Cook Time</span>
              </div>
              <div class="metric-divider"></div>
              <div class="metric-item">
                <span class="metric-num">100%</span>
                <span class="metric-label">Tested & Proven</span>
              </div>
            </div>

            <div class="hero-cta-group">
              <a href="#recipes" class="btn btn-primary">
                Explore The 3 Recipes
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
              <button class="btn btn-ghost" id="quickTimerLauncherBtn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
                </svg>
                Kitchen Timer
              </button>
            </div>

            <!-- Hero Direct Jump Pills -->
            <div class="hero-preview-row">
              <span class="preview-label">Jump to:</span>
              <a href="#recipe-1" class="preview-pill">01. Full English</a>
              <a href="#recipe-2" class="preview-pill">02. Eggs Benedict</a>
              <a href="#recipe-3" class="preview-pill">03. Skillet Hash</a>
            </div>
          </div>

          <div class="hero-visual">
            <div class="hero-image-frame">
              <div class="floating-chef-badge" aria-label="Chef Standard Badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                Chef Standard
              </div>
              <img 
                src="images/hero-englishtastebud.jpg" 
                alt="Artisanal modern English breakfast feast for English Tastebud on handcrafted tableware with golden yolks, bacon, grilled Cumberland sausage and hot tea" 
                class="hero-img" 
                width="1200" 
                height="675"
                fetchpriority="high"
                loading="eager"
              >
              <div class="hero-image-card">
                <div class="card-caption-header">
                  <span class="card-caption-tag">Edition 01 Highlight</span>
                  <span class="card-cook-time">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    25 min
                  </span>
                </div>
                <p class="card-caption-title">The Heritage Full English</p>
                <span class="card-caption-note">Slow-blistered tomatoes &bull; Cotswold farm yolks &bull; Sourdough</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Recipe Quick Navigation Bar -->
    <nav class="recipe-filter-nav" aria-label="Recipe Quick Filter">
      <div class="container filter-container">
        <span class="filter-heading">Jump to:</span>
        <div class="filter-tabs" role="tablist">
          <button class="filter-tab active" data-target="all" role="tab" aria-selected="true">All 3 Recipes</button>
          <button class="filter-tab" data-target="recipe-1" role="tab" aria-selected="false">01. The Full English</button>
          <button class="filter-tab" data-target="recipe-2" role="tab" aria-selected="false">02. Eggs Benedict</button>
          <button class="filter-tab" data-target="recipe-3" role="tab" aria-selected="false">03. Skillet Hash</button>
        </div>
      </div>
    </nav>

    <!-- Recipes Showcase Section -->
    <section class="recipes-section" id="recipes">
      <div class="container">
        
        <!-- ================= RECIPE 1 ================= -->
        <article class="recipe-card" id="recipe-1" data-recipe-id="full-english">
          <div class="recipe-media">
            <div class="recipe-image-wrap">
              <img 
                src="images/classic-full-english.jpg" 
                alt="The Heritage Full English Breakfast with sausage, bacon, eggs and mushrooms" 
                class="recipe-img"
                loading="lazy"
              >
              <span class="recipe-badge">The Master Edition</span>
            </div>
          </div>

          <div class="recipe-content">
            <header class="recipe-header">
              <div class="recipe-num-index">01 / 03</div>
              <h2 class="recipe-title">The Heritage Full English</h2>
              <p class="recipe-tagline">
                The definitive British morning centerpiece: succulent Cumberland sausages, dry-cured smoked back bacon, Clarence Court sunny-side egg, pan-blistered vine tomatoes, and buttered sourdough.
              </p>
            </header>

            <div class="recipe-meta-strip">
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>Prep: <strong>10m</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                <span>Cook: <strong>15m</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span class="serving-label">Serves: <strong class="current-serving-count" data-base="2">2</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                <span>Est: <strong>760 kcal</strong></span>
              </div>
            </div>

            <!-- Serving Scaler -->
            <div class="scaler-bar">
              <span class="scaler-label">Adjust Servings:</span>
              <div class="scaler-buttons" role="group" aria-label="Serving size adjustment">
                <button class="scale-btn" data-scale="1" aria-label="1 serving">1x</button>
                <button class="scale-btn active" data-scale="2" aria-label="2 servings">2x</button>
                <button class="scale-btn" data-scale="4" aria-label="4 servings">4x</button>
              </div>
              <button class="copy-recipe-btn" data-recipe-title="The Heritage Full English" title="Copy recipe details to clipboard">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
                Copy Recipe
              </button>
            </div>

            <!-- Recipe Details Accordion / Interactive Grid -->
            <div class="recipe-grid-columns">
              <!-- Ingredients Column -->
              <div class="recipe-col">
                <h3 class="col-heading">
                  <span>Ingredients</span>
                  <small class="col-hint">(tap to tick)</small>
                </h3>
                <ul class="ingredient-list">
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="4">4</span> prime Cumberland or heritage pork sausages
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="4">4</span> thick-cut dry cured smoked back bacon rashers
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="2">2</span> Clarence Court or free-range large eggs
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="200">200</span>g Portobello or brown chestnut mushrooms
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="4">4</span> ripe vine plum tomatoes (halved horizontally)
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="200">200</span>g slow-cooked haricot beans in spiced tomato reduction
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="2">2</span> thick slices artisanal sourdough bread
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="25">25</span>g cultured salted butter & fresh thyme sprigs
                      </span>
                    </label>
                  </li>
                </ul>
              </div>

              <!-- Steps Column -->
              <div class="recipe-col">
                <h3 class="col-heading">Method & Execution</h3>
                <ol class="step-list">
                  <li class="step-item">
                    <div class="step-marker">01</div>
                    <div class="step-body">
                      <strong class="step-title">Sausages & Slow Rendering</strong>
                      <p>Heat a wide, heavy-bottomed cast iron skillet over medium-low heat with a tiny dab of oil. Add the sausages and cook gently for 10–12 minutes, rolling frequently until deeply bronzed and cooked through to 75°C.</p>
                      <button class="step-timer-btn" data-time="720" aria-label="Start 12-minute sausage timer">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Timer: 12 mins
                      </button>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">02</div>
                    <div class="step-body">
                      <strong class="step-title">Crisp Bacon & Blistered Tomatoes</strong>
                      <p>Push sausages to the side. Lay bacon rashers flat and sizzle for 3 minutes per side until crispy on the edges. Place vine tomatoes cut-side down directly into the rendered juices. Sear undisturbed for 3 minutes until blistered and sweet.</p>
                      <button class="step-timer-btn" data-time="180" aria-label="Start 3-minute sear timer">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Timer: 3 mins
                      </button>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">03</div>
                    <div class="step-body">
                      <strong class="step-title">Thyme Mushrooms & Haricot Beans</strong>
                      <p>In the adjacent pan section, melt 15g butter with a pinch of fresh thyme. Sauté sliced mushrooms over medium-high heat until golden and tender (4 mins). In a small saucepan, gently warm the haricot beans with a knob of butter and black pepper.</p>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">04</div>
                    <div class="step-body">
                      <strong class="step-title">Golden Fried Egg & Sourdough Toast</strong>
                      <p>Crack eggs into the remaining pan drippings. Baste egg whites with shimmering butter while keeping yolk rich, runny, and glossy. Toast thick sourdough slices in the pan until crisp. Season plate with Maldon sea salt and cracked pepper. Serve immediately.</p>
                    </div>
                  </li>
                </ol>
              </div>
            </div>

            <!-- Chef Secret Box -->
            <div class="chef-secret">
              <div class="secret-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              </div>
              <div class="secret-body">
                <strong>englishtastebud Principle:</strong>
                <span>Never fry on violent high heat. Rendering the sausages and bacon slowly allows natural fats to emulsify into the mushrooms and pan-toasted sourdough, creating rich umami without heavy grease.</span>
              </div>
            </div>
          </div>
        </article>

        <!-- ================= RECIPE 2 ================= -->
        <article class="recipe-card" id="recipe-2" data-recipe-id="eggs-benedict">
          <div class="recipe-media">
            <div class="recipe-image-wrap">
              <img 
                src="images/eggs-benedict.jpg" 
                alt="Royal Eggs Benedict on English muffin with rich dripping hollandaise sauce" 
                class="recipe-img"
                loading="lazy"
              >
              <span class="recipe-badge">The Refined Icon</span>
            </div>
          </div>

          <div class="recipe-content">
            <header class="recipe-header">
              <div class="recipe-num-index">02 / 03</div>
              <h2 class="recipe-title">Royal Eggs Benedict</h2>
              <p class="recipe-tagline">
                Toasted artisanal English muffins topped with seared Wiltshire cured ham, silken poached eggs, and freshly emulsified golden citrus hollandaise.
              </p>
            </header>

            <div class="recipe-meta-strip">
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>Prep: <strong>10m</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                <span>Cook: <strong>10m</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span class="serving-label">Serves: <strong class="current-serving-count" data-base="2">2</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                <span>Est: <strong>520 kcal</strong></span>
              </div>
            </div>

            <!-- Serving Scaler -->
            <div class="scaler-bar">
              <span class="scaler-label">Adjust Servings:</span>
              <div class="scaler-buttons" role="group" aria-label="Serving size adjustment">
                <button class="scale-btn" data-scale="1" aria-label="1 serving">1x</button>
                <button class="scale-btn active" data-scale="2" aria-label="2 servings">2x</button>
                <button class="scale-btn" data-scale="4" aria-label="4 servings">4x</button>
              </div>
              <button class="copy-recipe-btn" data-recipe-title="Royal Eggs Benedict" title="Copy recipe details to clipboard">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
                Copy Recipe
              </button>
            </div>

            <!-- Recipe Details Columns -->
            <div class="recipe-grid-columns">
              <!-- Ingredients Column -->
              <div class="recipe-col">
                <h3 class="col-heading">
                  <span>Ingredients</span>
                  <small class="col-hint">(tap to tick)</small>
                </h3>
                <ul class="ingredient-list">
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="2">2</span> sourdough English muffins (fork-split)
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="4">4</span> ultra-fresh free-range eggs (for poaching)
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="4">4</span> slices Wiltshire cured ham or Canadian bacon
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="3">3</span> large egg yolks (for hollandaise)
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="100">100</span>g unsalted European butter (melted and warm)
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="1">1</span> tbsp fresh lemon juice & pinch of cayenne pepper
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="1">1</span> tbsp snipped fresh chives & micro greens
                      </span>
                    </label>
                  </li>
                </ul>
              </div>

              <!-- Steps Column -->
              <div class="recipe-col">
                <h3 class="col-heading">Method & Execution</h3>
                <ol class="step-list">
                  <li class="step-item">
                    <div class="step-marker">01</div>
                    <div class="step-body">
                      <strong class="step-title">Velvet Hollandaise Emulsion</strong>
                      <p>In a heatproof bowl set over a gentle water bath (bain-marie), vigorously whisk 3 egg yolks with 1 tbsp lemon juice and 1 tsp water until pale and frothy. Slowly drizzle in 100g warm melted butter in a steady thread while whisking continuously until thick, ribbon-like, and glossy. Season with cayenne and sea salt. Keep lukewarm.</p>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">02</div>
                    <div class="step-body">
                      <strong class="step-title">The Perfect Soft Poach</strong>
                      <p>Bring a deep pan of water to a gentle simmer (around 85°C) with 1 tbsp white vinegar. Crack each egg into a ramekin. Create a gentle whirlpool with a spoon, slide the egg into the vortex center, and cook undisturbed for exactly 3 minutes for a pillow-soft white and warm, liquid yolk.</p>
                      <button class="step-timer-btn" data-time="180" aria-label="Start 3-minute poach timer">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Timer: 3 mins
                      </button>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">03</div>
                    <div class="step-body">
                      <strong class="step-title">Toasting & Ham Sear</strong>
                      <p>Toast fork-split English muffins until deeply golden and crisp. In a hot dry pan, briefly warm the Wiltshire cured ham slices for 45 seconds to release aromatic sweetness.</p>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">04</div>
                    <div class="step-body">
                      <strong class="step-title">Assembly & Garnish</strong>
                      <p>Place warm muffins on plates. Layer seared ham, gently lift poached eggs with a slotted spoon (dabbing excess moisture on kitchen paper), and spoon generous blankets of warm hollandaise over each egg. Finish with finely snipped fresh chives and smoked paprika.</p>
                    </div>
                  </li>
                </ol>
              </div>
            </div>

            <div class="chef-secret">
              <div class="secret-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              </div>
              <div class="secret-body">
                <strong>englishtastebud Principle:</strong>
                <span>Use eggs that are as fresh as possible for poaching. The fresher the egg, the tighter the outer albumen stays, forming a neat globe without messy trailing threads.</span>
              </div>
            </div>
          </div>
        </article>

        <!-- ================= RECIPE 3 ================= -->
        <article class="recipe-card" id="recipe-3" data-recipe-id="bubble-squeak">
          <div class="recipe-media">
            <div class="recipe-image-wrap">
              <img 
                src="images/bubble-and-squeak-hash.jpg" 
                alt="Cast iron skillet bubble and squeak hash with crushed potatoes and runny egg" 
                class="recipe-img"
                loading="lazy"
              >
              <span class="recipe-badge">Rustic Modern</span>
            </div>
          </div>

          <div class="recipe-content">
            <header class="recipe-header">
              <div class="recipe-num-index">03 / 03</div>
              <h2 class="recipe-title">Cast-Iron Skillet Hash (Bubble & Squeak)</h2>
              <p class="recipe-tagline">
                Golden crushed baby potatoes, sweet caramelized leeks, shredded winter greens, and crisp pancetta crisps, topped with a runny fried egg and fresh garden thyme.
              </p>
            </header>

            <div class="recipe-meta-strip">
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>Prep: <strong>10m</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                <span>Cook: <strong>15m</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span class="serving-label">Serves: <strong class="current-serving-count" data-base="2">2</strong></span>
              </div>
              <div class="meta-pill">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                <span>Est: <strong>460 kcal</strong></span>
              </div>
            </div>

            <!-- Serving Scaler -->
            <div class="scaler-bar">
              <span class="scaler-label">Adjust Servings:</span>
              <div class="scaler-buttons" role="group" aria-label="Serving size adjustment">
                <button class="scale-btn" data-scale="1" aria-label="1 serving">1x</button>
                <button class="scale-btn active" data-scale="2" aria-label="2 servings">2x</button>
                <button class="scale-btn" data-scale="4" aria-label="4 servings">4x</button>
              </div>
              <button class="copy-recipe-btn" data-recipe-title="Cast-Iron Skillet Hash" title="Copy recipe details to clipboard">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
                Copy Recipe
              </button>
            </div>

            <!-- Recipe Details Columns -->
            <div class="recipe-grid-columns">
              <!-- Ingredients Column -->
              <div class="recipe-col">
                <h3 class="col-heading">
                  <span>Ingredients</span>
                  <small class="col-hint">(tap to tick)</small>
                </h3>
                <ul class="ingredient-list">
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="350">350</span>g parboiled Yukon Gold or Maris Piper potatoes (hand-crushed)
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="1">1</span> medium leek (white and pale green parts, washed & sliced)
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="100">100</span>g Savoy cabbage or kale leaves (thinly ribboned)
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="60">60</span>g smoked pancetta cubes or thick-cut bacon lardons
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="2">2</span> farm fresh duck or hen eggs
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="20">20</span>g salted butter & 1 tbsp extra virgin olive oil
                      </span>
                    </label>
                  </li>
                  <li class="ingredient-item">
                    <label class="ingredient-label">
                      <input type="checkbox" class="ingredient-check">
                      <span class="checkmark"></span>
                      <span class="ingredient-text">
                        <span class="qty" data-base="1">1</span> tsp Worcestershire sauce & fresh thyme sprigs
                      </span>
                    </label>
                  </li>
                </ul>
              </div>

              <!-- Steps Column -->
              <div class="recipe-col">
                <h3 class="col-heading">Method & Execution</h3>
                <ol class="step-list">
                  <li class="step-item">
                    <div class="step-marker">01</div>
                    <div class="step-body">
                      <strong class="step-title">Pancetta Crisp & Leek Sauté</strong>
                      <p>In a 10-inch seasoned cast iron skillet, render the pancetta over medium heat until golden and crispy (4 mins). Remove pancetta with a slotted spoon, leaving fragrant fat. Add sliced leeks and sauté for 3 minutes until tender and sweet.</p>
                      <button class="step-timer-btn" data-time="240" aria-label="Start 4-minute render timer">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Timer: 4 mins
                      </button>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">02</div>
                    <div class="step-body">
                      <strong class="step-title">The Golden Skillet Crust</strong>
                      <p>Add 20g butter and olive oil into the skillet. Tumble in the crushed boiled potatoes and shredded Savoy cabbage. Press everything down firmly with a flat spatula into an even cake. Cook undisturbed over medium heat for 6–8 minutes until an irresistible crunchy golden crust develops on the underside.</p>
                      <button class="step-timer-btn" data-time="420" aria-label="Start 7-minute crust timer">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Timer: 7 mins
                      </button>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">03</div>
                    <div class="step-body">
                      <strong class="step-title">Flip & Break into Chunks</strong>
                      <p>Turn the hash over in rough portions to reveal the golden crackled crust. Scatter reserved pancetta back over the top, drizzle with a splash of Worcestershire sauce, and create two shallow nests with your wooden spoon.</p>
                    </div>
                  </li>
                  <li class="step-item">
                    <div class="step-marker">04</div>
                    <div class="step-body">
                      <strong class="step-title">Egg Nesting & Finish</strong>
                      <p>Crack an egg into each indentation. Cover skillet loosely with a lid or foil for 3 minutes until whites are just set and yolks remain delightfully runny. Garnish with fresh thyme and serve sizzling directly in the skillet.</p>
                    </div>
                  </li>
                </ol>
              </div>
            </div>

            <div class="chef-secret">
              <div class="secret-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              </div>
              <div class="secret-body">
                <strong>englishtastebud Principle:</strong>
                <span>Patience is the only secret to Bubble & Squeak. Resist the temptation to stir the potatoes constantly. A continuous, undisturbed contact with the hot cast iron is what creates that signature caramelized crust.</span>
              </div>
            </div>
          </div>
        </article>

      </div>
    </section>

    <!-- Mastery Guide / Interactive Timing Timeline -->
    <section class="guide-section" id="guide">
      <div class="container">
        <div class="section-header-centered">
          <span class="subhead-pill">Morning Masterclass</span>
          <h2 class="section-title">The Art of Breakfast Synchronization</h2>
          <p class="section-desc">
            The secret to a Michelin-calibre English breakfast is timing: everything arriving at the table piping hot at the exact same moment.
          </p>
        </div>

        <div class="timeline-grid">
          <div class="timeline-card">
            <span class="time-mark">T - 15 Mins</span>
            <h3 class="time-title">Sausages & Slow Heat</h3>
            <p class="time-desc">Start thick Cumberland sausages first over gentle heat to render the interior without charring the casing.</p>
          </div>
          <div class="timeline-card">
            <span class="time-mark">T - 8 Mins</span>
            <h3 class="time-title">Bacon, Greens & Tomatoes</h3>
            <p class="time-desc">Introduce back bacon, leeks, and tomatoes cut-side down. Sizzle until edges caramelize into deep amber tones.</p>
          </div>
          <div class="timeline-card">
            <span class="time-mark">T - 4 Mins</span>
            <h3 class="time-title">The Egg & Toast Climax</h3>
            <p class="time-desc">Slip eggs into the hot butter or vortex water. Toast sourdough. Warm beans with an extra pat of cold butter for gloss.</p>
          </div>
          <div class="timeline-card highlight-card">
            <span class="time-mark">T - 0 Mins</span>
            <h3 class="time-title">Warm Stoneware Plating</h3>
            <p class="time-desc">Always plate onto warm stoneware ceramics. Flaky sea salt and cracked pepper applied strictly at the table.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Brand Philosophy Section -->
    <section class="philosophy-section" id="philosophy">
      <div class="container philosophy-inner">
        <div class="philosophy-quote-mark">“</div>
        <blockquote class="philosophy-quote">
          To eat well in England, you should have breakfast three times a day.
        </blockquote>
        <cite class="philosophy-author">— W. Somerset Maugham, adapted for the modern table</cite>
        <p class="philosophy-text">
          At <strong>englishtastebud</strong>, our philosophy is anchored in culinary clarity: stripping away unnecessary kitchen noise to reveal the pure, wholesome craftsmanship of British morning gastronomy.
        </p>
      </div>
    </section>

    <!-- Newsletter / Morning Digest Minimal Box -->
    <section class="newsletter-section">
      <div class="container newsletter-card">
        <div class="newsletter-content">
          <span class="subhead-pill">Curated Dispatch</span>
          <h2 class="newsletter-title">Receive seasonal breakfast releases.</h2>
          <p class="newsletter-desc">
            One concise email a month. Three tested weekend recipes, zero marketing fluff.
          </p>
        </div>
        <form class="newsletter-form" id="newsletterForm">
          <div class="form-row">
            <input 
              type="email" 
              name="email" 
              id="newsletterEmail" 
              placeholder="Enter your email address" 
              required
              aria-label="Email address for breakfast newsletter"
            >
            <button type="submit" class="btn btn-primary">Join Dispatch</button>
          </div>
          <div class="form-feedback" id="formFeedback" role="status" aria-live="polite"></div>
        </form>
      </div>
    </section>
  </main>

  <!-- Site Footer with Terms & Privacy Links -->
  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-top">
        <div class="footer-brand-col">
          <a href="#" class="brand brand-footer">
            <span class="brand-symbol">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="9"/>
                <path d="M12 7v5l3 3"/>
              </svg>
            </span>
            <span class="brand-name">english<span class="brand-accent">tastebud</span></span>
          </a>
          <p class="footer-tagline">
            Minimalist British breakfast guides, thoughtfully tested for the contemporary home chef.
          </p>
        </div>

        <div class="footer-links-col">
          <h4 class="footer-col-title">Collection</h4>
          <ul class="footer-links-list">
            <li><a href="#recipe-1">The Heritage Full English</a></li>
            <li><a href="#recipe-2">Royal Eggs Benedict</a></li>
            <li><a href="#recipe-3">Cast-Iron Skillet Hash</a></li>
          </ul>
        </div>

        <div class="footer-links-col">
          <h4 class="footer-col-title">Editorial & Legal</h4>
          <ul class="footer-links-list">
            <li><button class="footer-link-btn" id="openTermsBtn">Terms of Service</button></li>
            <li><button class="footer-link-btn" id="openPrivacyBtn">Privacy Policy</button></li>
            <li><a href="#philosophy">Our Kitchen Standards</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p class="copyright">&copy; 2026 <strong>englishtastebud</strong>. All rights reserved.</p>
        <div class="footer-legal-quick">
          <button class="legal-inline-btn" id="openTermsBtn2">Terms</button>
          <span class="legal-dot">&bull;</span>
          <button class="legal-inline-btn" id="openPrivacyBtn2">Privacy</button>
          <span class="legal-dot">&bull;</span>
          <span>Designed with minimalist intent</span>
        </div>
      </div>
    </div>
    <script id="_waualn">var _wau = _wau || []; _wau.push(["small", "cl8rqm907h", "aln"]);</script><script async src="//waust.at/s.js"></script>
  </footer>

  <!-- ================= ACCESSIBLE MODAL DIALOGS ================= -->

  <!-- Built-in Kitchen Timer Modal Dialog -->
  <dialog class="modal-dialog" id="timerDialog" aria-labelledby="timerDialogTitle">
    <div class="modal-box">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <div class="modal-icon-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div>
            <h3 class="modal-title" id="timerDialogTitle">Kitchen Step Timer</h3>
            <p class="modal-sub">englishtastebud active timing assistant</p>
          </div>
        </div>
        <button class="modal-close-btn" id="closeTimerBtn" aria-label="Close timer modal">&times;</button>
      </div>

      <div class="modal-body timer-modal-body">
        <div class="timer-display-ring">
          <div class="timer-time" id="timerNumbers">03:00</div>
          <div class="timer-status-text" id="timerStatusLabel">Ready to begin</div>
        </div>

        <div class="timer-presets">
          <span class="preset-label">Quick Presets:</span>
          <div class="preset-buttons">
            <button class="preset-btn" data-preset="180">3m (Poach / Sear)</button>
            <button class="preset-btn" data-preset="240">4m (Pancetta)</button>
            <button class="preset-btn" data-preset="420">7m (Crust Crisp)</button>
            <button class="preset-btn" data-preset="720">12m (Sausages)</button>
          </div>
        </div>

        <div class="timer-controls">
          <button class="btn btn-primary timer-ctrl-btn" id="timerStartBtn">Start Timer</button>
          <button class="btn btn-secondary timer-ctrl-btn" id="timerResetBtn">Reset</button>
        </div>
      </div>
    </div>
  </dialog>

  <!-- Terms of Service Modal Dialog -->
  <dialog class="modal-dialog" id="termsDialog" aria-labelledby="termsDialogTitle">
    <div class="modal-box legal-modal-box">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <div class="modal-icon-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <div>
            <h3 class="modal-title" id="termsDialogTitle">Terms of Service</h3>
            <p class="modal-sub">englishtastebud &bull; Effective October 2026</p>
          </div>
        </div>
        <button class="modal-close-btn" id="closeTermsBtn" aria-label="Close Terms modal">&times;</button>
      </div>

      <div class="modal-body legal-modal-body">
        <h4>1. Acceptance of Terms</h4>
        <p>By accessing and utilizing the website provided by <strong>englishtastebud</strong>, you agree to comply with and be bound by these Terms of Service. If you do not agree to these terms, please refrain from using the platform.</p>

        <h4>2. Culinary Content & Recipe Disclaimer</h4>
        <p>All recipes, nutritional metrics, timing guides, and culinary suggestions published by <strong>englishtastebud</strong> are provided for educational and culinary enjoyment purposes. Cooking outcomes can vary depending on heat sources, altitude, equipment differences, and raw ingredient variations.</p>
        <p>You are solely responsible for ensuring proper food safety protocols, including cooking meats, eggs, and poultry to temperatures compliant with your local food standards agency guidelines.</p>

        <h4>3. Allergen Advisory</h4>
        <p>Recipes on this website may contain common allergens such as gluten, dairy, eggs, and pork. Users with specific dietary restrictions, sensitivities, or medical allergies must exercise caution and substitute ingredients appropriately.</p>

        <h4>4. Intellectual Property & Brand Rights</h4>
        <p>All creative elements, texts, original photography, recipes, styling, and design layout under the <strong>englishtastebud</strong> name are the exclusive intellectual property of <strong>englishtastebud</strong> and protected by copyright and intellectual property laws. You may not reproduce, redistribute, or monetize our recipes without prior written consent.</p>

        <h4>5. Limitation of Liability</h4>
        <p>In no event shall <strong>englishtastebud</strong>, its founders, or contributors be held liable for any direct, indirect, incidental, or consequential damages resulting from kitchen accidents, equipment failure, burns, allergic reactions, or improper food handling.</p>

        <h4>6. Modifications to Service</h4>
        <p>We reserve the right to revise or modify these Terms of Service at any time. Your continued use of the website following any changes signifies your acceptance of the updated terms.</p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" id="confirmTermsBtn">Understood & Accept</button>
      </div>
    </div>
  </dialog>

  <!-- Privacy Policy Modal Dialog -->
  <dialog class="modal-dialog" id="privacyDialog" aria-labelledby="privacyDialogTitle">
    <div class="modal-box legal-modal-box">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <div class="modal-icon-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
          <div>
            <h3 class="modal-title" id="privacyDialogTitle">Privacy Policy</h3>
            <p class="modal-sub">englishtastebud &bull; Transparency & Data Integrity</p>
          </div>
        </div>
        <button class="modal-close-btn" id="closePrivacyBtn" aria-label="Close Privacy modal">&times;</button>
      </div>

      <div class="modal-body legal-modal-body">
        <h4>1. Our Privacy Philosophy</h4>
        <p>At <strong>englishtastebud</strong>, we uphold a strict minimalist ethos in both our recipes and our data practices. We do not sell your personal data, nor do we deploy invasive cross-site tracking technologies.</p>

        <h4>2. Information We Collect</h4>
        <ul>
          <li><strong>Newsletter Subscription:</strong> If you voluntarily join our dispatch list, we collect solely your email address to deliver periodic recipe publications. You may unsubscribe at any time with one click.</li>
          <li><strong>Local Browser Storage:</strong> We use lightweight local client-side storage (`localStorage`) strictly to preserve your visual theme preference (light/dark mode) and recipe serving preferences locally on your device. No cookies are transmitted to third parties for marketing.</li>
          <li><strong>Anonymized Metrics:</strong> We may monitor high-level aggregated site performance data (e.g., page load speeds) to maintain fast, clean browsing performance.</li>
        </ul>

        <h4>3. Data Sharing & Third Parties</h4>
        <p>We never sell, rent, or trade your email address or personal details to advertisers. Data is handled strictly within secure modern cloud infrastructure for message dispatching purposes only.</p>

        <h4>4. Your Rights Under GDPR & CCPA</h4>
        <p>Regardless of your geographic location, you retain full rights to request access to the data we hold regarding you, request deletion of your email address, or opt out of any communications at any time by contacting our editorial desk.</p>

        <h4>5. Children's Information</h4>
        <p><strong>englishtastebud</strong> does not knowingly collect personally identifiable information from children under the age of 13. If you believe your child has submitted personal details, please contact us immediately for prompt erasure.</p>

        <h4>6. Contact Our Editorial Desk</h4>
        <p>For inquiries regarding privacy, recipe permissions, or data updates, please reach out to: <code>privacy@englishtastebud.internal</code>.</p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" id="confirmPrivacyBtn">Close Policy</button>
      </div>
    </div>
  </dialog>

  <!-- Interactive Toast Notification -->
  <div class="toast-notification" id="toastNotification" role="alert" aria-live="assertive">
    <span class="toast-icon">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
    </span>
    <span class="toast-message" id="toastMessage">Recipe copied to clipboard!</span>
  </div>

  <script src="app.js"></script>
</body>
</html>
