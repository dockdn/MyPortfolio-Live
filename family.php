<?php /* family.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Family • Danielle</title>
  <link rel="stylesheet" href="/MyPortfolio/assets/css/style.css?v=105">

  <style>
    .pin--wide { grid-column: span 2; }
    .pin--small .pin__media {
      width: 85%;
      margin: 0 auto;
      display: block;
      opacity: 0.95;
    }
  </style>
</head>
<body>
<div class="site-wrap">

  <header class="header">
    <a class="brand" href="/MyPortfolio/index.php">
      <img src="/MyPortfolio/assets/img/logo.png" alt="Danielle Logo" class="brand__logo-img">
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

  <h1 class="page-title">Family</h1>

  <section class="hero-banner">
    <div class="hero-banner__image" style="background-image:url('/MyPortfolio/assets/img/wholefamily.png');"></div>
    <div class="hero-banner__content">
      <h2 class="hero-banner__title">My People</h2>
      <p class="hero-banner__text">My family - my blood and my chosen members. Each of these people inspire me to be the best at what I do and drive me to want to make a difference in this world. My main mission is to create accessible and user-frieldly spaces for all kinds of people. Everyone has a story that you don't know about. My people are living proof.</p>
    </div>
  </section>

  <section class="board">
    <article class="pin pin--wide">
      <img class="pin__media ar-21x9" src="/MyPortfolio/assets/img/mom+uncs.png" alt="Mom + Uncs">
      <div class="pin__content">
        <h3 class="pin__title">Highlights</h3>
        <p class="pin__text">
          <i>Trips, celebrations, everyday life – they'll be there.</i><br><br>
          I am so grateful to come from a line of extremely hard workers who still make the time
          to instill old-fashioned family values into our lives, all while continuing to learn
          and grow with changing times.
        </p>
      </div>
    </article>

    <article class="pin pin--small">
      <img class="pin__media ar-4x3" src="/MyPortfolio/assets/img/younglove.png" alt="My Boyfriend">
      <div class="pin__content"><h3 class="pin__title">Young Love.</h3></div>
    </article>

    <article class="pin">
      <img class="pin__media ar-1x1" src="/MyPortfolio/assets/img/gradday.png" alt="GradDay Picture">
      <div class="pin__content">
        <h3 class="pin__title">Grad Day</h3>
        <p class="pin__text"><i>Coming Fall 2025</i></p>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media ar-3x4" src="/MyPortfolio/assets/img/chiquito.png" alt="My Little Brother">
      <div class="pin__content">
        <h3 class="pin__title">My Inspiration</h3>
        <p class="pin__text">
          <i>My little brother.</i><br><br>
          This little man! He’s the muse behind some of the crazy ideas I have stored
          in my notes app. He is creative, adventurous, and so caring. I love having
          him by my side always.
        </p>
      </div>
    </article>

    <article class="pin">
      <img class="pin__media ar-mini" src="/MyPortfolio/assets/img/familyhero.png" alt="Share a memory">
      <div class="pin__content">
        <h3 class="pin__title">Share a memory</h3>
        <a
          class="btn"
          href="mailto:danixielle@gmail.com?subject=%5BDANIELLE%27S%20PORTFOLIO%5D%20-%20Sharing%20a%20Favorite%20Memory"
          aria-label="Email Danielle to share a favorite memory"
        >Message me</a>
      </div>
    </article>
  </section>

  <footer class="footer">© <?php echo date('Y'); ?> Danielle Dockery</footer>
</div>

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
    setTimeout(layoutPins, 50);
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
