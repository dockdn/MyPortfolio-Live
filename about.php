<?php /* about.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About • Danielle</title>
  <link rel="icon" type="image/png" href="/MyPortfolio/assets/img/favicon.png">
  <link rel="stylesheet" href="/MyPortfolio/assets/css/style.css?v=104">
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

  <h1 class="page-title">About</h1>

  <!-- BANNER -->
  <section class="hero-banner">
    <div class="hero-banner__image" style="background-image:url('assets/img/about.png');"></div>
    <div class="hero-banner__content">
      <h2 class="hero-banner__title">About Me</h2>
      <p class="hero-banner__text">Short intro placeholder.</p>
    </div>
  </section>

  <!-- GRID -->
  <section class="board">
    <article class="pin">
      <img class="pin__media" src="assets/img/projects.png" alt="Projects wide">
      <div class="pin__content">
        <h3 class="pin__title">Projects</h3>
        <p class="pin__text">RaceMe, CineByte, Join the Cause…</p>
        <!-- ADDED: button to Projects page -->
        <a class="btn" href="/MyPortfolio/projects.php">View Projects</a>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media" src="assets/img/wholefamily.png" alt="Family">
      <div class="pin__content">
        <h3 class="pin__title">Family</h3>
        <p class="pin__text">Snapshot of my people.</p>
        <!-- ADDED: button to Family page -->
        <a class="btn" href="/MyPortfolio/family.php">View Family</a>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media" src="assets/img/favoritethings.png" alt="Favorites">
      <div class="pin__content">
        <h3 class="pin__title">Favorite Things</h3>
        <p class="pin__text">Hello Kitty, Computing, Books, Fast Food…</p>
        <!-- ADDED: button to Favorites page -->
        <a class="btn" href="/MyPortfolio/favorites.php">View Favorites</a>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media" src="assets/img/resume.png" alt="Resume preview">
      <div class="pin__content">
        <h3 class="pin__title">Resume</h3>
        <!-- CHANGED: link points to your Resume page -->
        <a class="btn" href="/MyPortfolio/resume.php">View Resume</a>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media" src="assets/img/connect.png" alt="Connect">
      <div class="pin__content">
        <h3 class="pin__title">Reach Out!</h3>
        <!-- CHANGED: link points to your Connect page -->
        <a class="btn" href="/MyPortfolio/connect.php">Connect</a>
      </div>
    </article>
  </section>

  <footer class="footer">© <?php echo date('Y'); ?> Danielle Dockery</footer>
</div>

<!-- PINTEREST AESTHETIC GRID -->
<script>
  function layoutPins() {
    const grid = document.querySelector('.board');
    if (!grid) return;

    const rowH = parseInt(getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
    const gap  = parseInt(getComputedStyle(grid).getPropertyValue('gap'));

    grid.querySelectorAll('.pin').forEach((item) => {
      const media   = item.querySelector('.pin__media');
      const content = item.querySelector('.pin__content');

      const mH = media   ? media.getBoundingClientRect().height   : 0;
      const cH = content ? content.getBoundingClientRect().height : 0;

      const total = mH + cH + gap;
      const span  = Math.ceil(total / (rowH + gap));
      item.style.gridRowEnd = `span ${span}`;
    });
  }

  window.addEventListener('load', () => {
    layoutPins();
    document.querySelectorAll('.pin .pin__media').forEach(img => {
      if (img.tagName === 'IMG' && !img.complete) {
        img.addEventListener('load', layoutPins);
      }
    });
  });
  window.addEventListener('resize', layoutPins);
</script>
</body>
</html>
