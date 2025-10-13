<?php /* projects.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Projects • Danielle</title>
  <link rel="stylesheet" href="/MyPortfolio/assets/css/style.css?v=100">

  <!-- CAROUSEL FIX - SIZING AND LAYOUT -->
  <style>
    .carousel {
      position: relative;
      width: 100%;
      aspect-ratio: 21 / 9;   
      min-height: 240px;    
      background: #eee;
      overflow: hidden;
      border-bottom: 1px solid rgba(0,0,0,.1);
      border-radius: 10px 10px 0 0;
    }
    .carousel__track { height: 100%; width: 100%; position: relative; }
    .carousel__slide { position: absolute; inset: 0; opacity: 0; transition: opacity .35s ease; }
    .carousel__slide.is-active { opacity: 1; }
    .carousel__img { width: 100%; height: 100%; object-fit: cover; display: block; }

    .carousel__ctrl {
      position: absolute; top: 50%; transform: translateY(-50%);
      background: rgba(255,255,255,.95);
      border: 1px solid rgba(0,0,0,.15);
      border-radius: 999px; padding: 6px 10px; font-weight: 700;
      cursor: pointer; user-select: none;
    }
    .carousel__ctrl:focus { outline: 2px solid #111; outline-offset: 2px; }
    .carousel__prev { left: 10px; }
    .carousel__next { right: 10px; }

    .carousel__meta {
      position: absolute; left: 10px; bottom: 10px;
      display: flex; align-items: center; gap: 8px;
      background: rgba(0,0,0,.55); color: #fff; font-size: 12px;
      padding: 6px 10px; border-radius: 999px;
    }
    .carousel__dots { display: flex; gap: 6px; }
    .carousel__dot { width: 6px; height: 6px; border-radius: 50%; background: rgba(255,255,255,.6); }
    .carousel__dot.is-active { background: #fff; }
  </style>
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

  <h1 class="page-title">Projects</h1>

  <section class="board">

    <!-- BANNER - (PLACE HOLDER)  -->

    <article class="pin pin--head">
       <!--   <img class="pin__media ar-16x5" src="assets/img/projects-hero.jpg" alt="Projects banner"> -->
      <div class="pin__content">
        <h2 class="pin__title">Projects Overview</h2>
        <p class="pin__text">Highlights of my builds.</p>
      </div>
    </article>

    <article class="pin">
      <div class="carousel" id="mockupsCarousel" aria-label="Project mockups">
        <div class="carousel__track">
          <figure class="carousel__slide is-active">
            <img class="carousel__img" src="assets/img/racememockup.png" alt="RaceMe Mockups">
          </figure>
          <figure class="carousel__slide">
            <img class="carousel__img" src="assets/img/jointhecausewireframe.png" alt="Join the Cause Mockups">
          </figure>
          <figure class="carousel__slide">
            <img class="carousel__img" src="assets/img/bakerymokcup.png" alt="Bakery Mockups">
          </figure>
        </div>
        <button class="carousel__ctrl carousel__prev" type="button" aria-label="Previous slide">‹</button>
        <button class="carousel__ctrl carousel__next" type="button" aria-label="Next slide">›</button>
        <div class="carousel__meta">
          <span id="mockupsCounter">1/3</span>
          <div class="carousel__dots" aria-hidden="true">
            <span class="carousel__dot is-active"></span>
            <span class="carousel__dot"></span>
            <span class="carousel__dot"></span>
          </div>
        </div>
      </div>
      <div class="pin__content">
        <h3 class="pin__title">Mockups</h3>
        <p class="pin__text">UI mockups for RaceMe, Join the Cause, and Bakery.</p>
      </div>
    </article>

        <!-- CINEBYTE W BUTTON ADDED-->
        <article class="pin">
      <img class="pin__media ar-1x1" src="assets/img/cinebytelogo.png" alt="CineByte">
      <div class="pin__content">
        <h3 class="pin__title">CineByte</h3>
        <p class="pin__text">PHP/MySQL movie tracker.</p>
        <a class="btn btn--primary" href="https://github.com/dockdn/CineByte" target="_blank" rel="noopener">View CineByte on GitHub</a>
      </div>
    </article>
    
    <!-- RACEME CARD -->
    <article class="pin">
      <img class="pin__media ar-4x3" src="assets/img/racemelogo.png" alt="RaceMe">
      <div class="pin__content">
        <h3 class="pin__title">RaceMe</h3>
        <p class="pin__text">Android/Kotlin running app.</p>
      </div>
    </article>


    <!-- JOINTHECAUSE CARD -->
    <article class="pin">
      <a href="https://github.com/a-iqbal02/JoinTheCause" target="_blank" rel="noopener">
        <img class="pin__media ar-4x3" src="assets/img/jointhecause.png" alt="Join the Cause">
      </a>
      <div class="pin__content">
        <h3 class="pin__title">Join the Cause</h3>
        <p class="pin__text">Next.js + Spring Boot volunteer hub.</p>
        <a class="btn btn--primary" href="https://github.com/a-iqbal02/JoinTheCause" target="_blank" rel="noopener">View on GitHub</a>
      </div>
    </article>

    <!-- FEATURED WORK -->
    <article class="pin">
      <div class="carousel" id="featuredCarousel" aria-label="Featured work screenshots">
        <div class="carousel__track">
          <figure class="carousel__slide is-active">
            <img class="carousel__img" src="assets/img/racemelogo.png" alt="RaceMe">
          </figure>
          <figure class="carousel__slide">
            <img class="carousel__img" src="assets/img/cinebyte.png" alt="CineByte">
          </figure>
          <figure class="carousel__slide">
            <img class="carousel__img" src="assets/img/jointhecausefeature.png" alt="Join the Cause">
          </figure>
        </div>
        <button class="carousel__ctrl carousel__prev" type="button" aria-label="Previous slide">‹</button>
        <button class="carousel__ctrl carousel__next" type="button" aria-label="Next slide">›</button>
        <div class="carousel__meta">
          <span id="featuredCounter">1/3</span>
          <div class="carousel__dots" aria-hidden="true">
            <span class="carousel__dot is-active"></span>
            <span class="carousel__dot"></span>
            <span class="carousel__dot"></span>
          </div>
        </div>
      </div>
      <div class="pin__content">
        <h3 class="pin__title">Featured Work</h3>
        <p class="pin__text">RaceMe, CineByte, and Join the Cause.</p>
        <a class="btn btn--primary" href="https://github.com/dockdn" target="_blank" rel="noopener">See more on GitHub</a>
      </div>
    </article>

    <!-- CONTACT -->
    <article class="pin">
      <img class="pin__media ar-mini" src="assets/img/projectscontact.png" alt="Contact">
      <div class="pin__content">
        <h3 class="pin__title">Work With Me</h3>
        <a
          class="btn"
          href="mailto:danixielle@gmail.com?subject=%5BDANIELLE%27S%20PORTFOLIO%5D%20-%20Let%27s%20Work%20Together!"
          aria-label="Email Danielle: Let's Work Together"
        >Get in touch</a>
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
      const media   = item.querySelector('.pin__media') || item.querySelector('.carousel'); // include carousels
      const content = item.querySelector('.pin__content');

      const mH = media   ? media.getBoundingClientRect().height   : 0;
      const cH = content ? content.getBoundingClientRect().height : 0;

      const total = mH + cH + gap;
      const span  = Math.ceil(total / (rowH + gap)) || 1;
      item.style.gridRowEnd = `span ${span}`;
    });
  }

  function initCarousel(rootId, counterId){
    const root = document.getElementById(rootId);
    if (!root) return;
    const slides = Array.from(root.querySelectorAll('.carousel__slide'));
    const dots   = Array.from(root.querySelectorAll('.carousel__dot'));
    const prev   = root.querySelector('.carousel__prev');
    const next   = root.querySelector('.carousel__next');
    const counter= document.getElementById(counterId);

    let i = 0;
    const total = slides.length;

    function go(to){
      i = (to + total) % total;
      slides.forEach((s, idx) => s.classList.toggle('is-active', idx === i));
      dots.forEach((d, idx)   => d.classList.toggle('is-active', idx === i));
      if (counter) counter.textContent = (i+1) + '/' + total;
      layoutPins();
    }

    prev?.addEventListener('click', () => go(i - 1));
    next?.addEventListener('click', () => go(i + 1));
    root.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft')  { e.preventDefault(); go(i - 1); }
      if (e.key === 'ArrowRight') { e.preventDefault(); go(i + 1); }
    });
    root.tabIndex = 0;

    slides.forEach(slide => {
      const img = slide.querySelector('img');
      if (!img) return;
      if (!img.complete) img.addEventListener('load', layoutPins);
    });

    if ('ResizeObserver' in window){
      new ResizeObserver(layoutPins).observe(root);
    }

    go(0);
  }

  window.addEventListener('load', () => {
    initCarousel('mockupsCarousel', 'mockupsCounter');
    initCarousel('featuredCarousel', 'featuredCounter');

    layoutPins();
    document.querySelectorAll('.pin .pin__media').forEach(img => {
      if (!img.complete) img.addEventListener('load', layoutPins);
    });
  });

  window.addEventListener('resize', layoutPins);
</script>
</body>
</html>
