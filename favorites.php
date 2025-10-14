<?php /* favorites.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Favorites • Danielle</title>
  <link rel="icon" type="image/png" href="/MyPortfolio/assets/img/favicon.png">
  <link rel="stylesheet" href="/MyPortfolio/assets/css/style.css?v=103">
</head>
<body>
<div class="site-wrap">

  <header class="header">
    <a class="brand" href="/MyPortfolio/index.php">
      <img src="assets/img/logo.png" alt="Danielle Logo" class="brand__logo-img">
      <span class="brand__text">Danielle.</span>
    </a>
    <nav class="nav">
      <a href="/MyPortfolio/about.php"     <?php if(basename($_SERVER['PHP_SELF'])=='about.php')     echo 'aria-current="page"'; ?>>About</a>
      <a href="/MyPortfolio/family.php"    <?php if(basename($_SERVER['PHP_SELF'])=='family.php')    echo 'aria-current="page"'; ?>>Family</a>
      <a href="/MyPortfolio/projects.php"  <?php if(basename($_SERVER['PHP_SELF'])=='projects.php')  echo 'aria-current="page"'; ?>>Projects</a>
      <a href="/MyPortfolio/favorites.php" <?php if(basename($_SERVER['PHP_SELF'])=='favorites.php') echo 'aria-current="page"'; ?>>Favorites</a>
      <a href="/MyPortfolio/resume.php"    <?php if(basename($_SERVER['PHP_SELF'])=='resume.php')    echo 'aria-current="page"'; ?>>Resume</a>
      <a href="/MyPortfolio/connect.php"   <?php if(basename($_SERVER['PHP_SELF'])=='connect.php')   echo 'aria-current="page"'; ?>>Connect</a>
    </nav>
  </header>

  <h1 class="page-title">Favorites</h1>

  <!-- BANNER) -->
  <section class="hero-banner">
    <div class="hero-banner__image"></div>
    <div class="hero-banner__content">
      <h2 class="hero-banner__title">Favorite Things</h2>
      <p class="hero-banner__text">Aesthetic + cozy + retro.</p>
    </div>
  </section>

  <!-- GRID -->
  <section class="board">
    <article class="pin">
      <img class="pin__media ar-21x9" src="assets/img/books.png" alt="Favorite Books">
      <div class="pin__content">
        <h3 class="pin__title">My Favorite Books</h3>
        <p class="pin__text">
          I’m drawn to psychological fiction and character-driven novels—especially with bold, complicated
          female protagonists. The scenery snaps into focus, and I get completely immersed from page one.
        </p>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media ar-4x3" src="assets/img/kindle.png" alt="Kindle Aesthetic">
      <div class="pin__content">
        <h3 class="pin__title">Kindle</h3>
        <p class="pin__text">
          My tiny library on the go—battery for days and a dangerous “just one more chapter” button.
        </p>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media ar-1x1" src="assets/img/pizza.png" alt="Pizza">
      <div class="pin__content">
        <h3 class="pin__title">Pizza</h3>
        <p class="pin__text">
          Thin crust, extra crispy. A cold slice for breakfast? Absolutely.
        </p>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media ar-3x4" src="assets/img/cooking.png" alt="Cooking Aesthetic">
      <div class="pin__content">
        <h3 class="pin__title">Chef’s Kiss 💋</h3>
        <p class="pin__text">
          I love cooking steak and lamb—simple, seasoned, sizzling. Dream setup: a gas stove
          and a well-loved cast-iron.
        </p>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media ar-mini" src="assets/img/favoritecontact.png" alt="Suggest a fave">
      <div class="pin__content">
        <h3 class="pin__title">Suggest a fave</h3>
        <a
          class="btn"
          href="mailto:danixielle@gmail.com?subject=%5BDANIELLE%27S%20PORTFOLIO%5D%20-%20Sharing%20a%20Fav%21"
          aria-label="Email Danielle: Sharing a Fav"
        >DM me</a>
      </div>
    </article>
  </section>

  <footer class="footer">© <?php echo date('Y'); ?> Danielle Dockery</footer>
</div>

<script>
  // PINTEREST AESTHETIC GRID FIX
  function layoutPins() {
    const grid = document.querySelector('.board');
    if (!grid) return;

    const rowH = parseInt(getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
    const gap  = parseInt(getComputedStyle(grid).getPropertyValue('gap'));

    grid.querySelectorAll('.pin').forEach((item) => {
      const media   = item.querySelector('.pin__media');
      const content = item.querySelector('.pin__content');
      const mH = media ? media.getBoundingClientRect().height : 0;
      const cH = content ? content.getBoundingClientRect().height : 0;
      const total = mH + cH + gap;
      const span  = Math.ceil(total / (rowH + gap));
      item.style.gridRowEnd = `span ${span}`;
    });
  }

  window.addEventListener('load', () => {
    layoutPins();
    setTimeout(layoutPins, 50);
    document.querySelectorAll('.pin .pin__media').forEach(m => {
      if (m.tagName === 'IMG' && !m.complete) m.addEventListener('load', layoutPins);
    });
  });
  window.addEventListener('resize', layoutPins);
</script>
</body>
</html>
