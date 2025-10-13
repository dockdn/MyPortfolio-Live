<?php /* connect.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Connect • Danielle</title>
  <link rel="stylesheet" href="/MyPortfolio/assets/css/style.css?v=107">

  <!-- Page-local button accents (keeps global CSS unchanged) -->
  <style>
    .btn--primary { background:#111; color:#fff; border-color:#111; }
    .btn--primary:hover { background:#333; }
    .btn--icon { display:inline-flex; align-items:center; gap:8px; }
    .btn--full { width:100%; text-align:center; }
    .contact-actions { display:flex; flex-wrap:wrap; gap:10px; }
    .contact-actions .btn { flex:1 1 200px; }
    /* ✅ header image now points to danielle.png */
    .hero-banner__image--connect { background-image:url('/MyPortfolio/assets/img/danielle.png'); }
    .muted { color:#555; font-size:13px; margin-top:6px; }
    .mono { font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", monospace; }
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

  <h1 class="page-title">Connect</h1>


  <!-- HERO BANNER outside the grid (optional image) -->
  <section class="hero-banner">
    <div class="hero-banner__image hero-banner__image--connect"></div>
    <div class="hero-banner__content">
      <h2 class="hero-banner__title">Let’s build something together</h2>
      <p class="hero-banner__text">Quick links to reach me anywhere.</p>
    </div>
  </section>

  <!-- GRID -->
  <section class="board">

    <!-- Primary actions card -->
    <article class="pin">
      <div class="pin__content">
        <h3 class="pin__title">Say hi</h3>
        <p class="pin__text">I’m open to internships, collabs, and cool side projects.</p>
        <div class="contact-actions">
          <!-- LINKEDIN -->
          <a class="btn btn--primary btn--icon" href="https://www.linkedin.com/in/danielledockery" target="_blank" rel="noopener" aria-label="Open LinkedIn profile">
            <span>🔗</span><span>LinkedIn</span>
          </a>

          <!-- MAILTO: -->
          <a
            class="btn btn--icon"
            href="mailto:danixielle@gmail.com?subject=%5BDANIELLE%27S%20PORTFOLIO%5D%20-%20Let%27s%20Connect%21"
            aria-label="Email Danielle with prefilled subject"
          >
            ✉️ <span>Let’s Connect (Email)</span>
          </a>
        </div>
        <p class="muted">Subject line auto-fills to <span class="mono">[DANIELLE'S PORTFOLIO] - Let's Connect!</span></p>
      </div>
    </article>

    <!-- GITHUB -->
    <article class="pin">
      <img class="pin__media ar-4x3" src="/MyPortfolio/assets/img/cutiegithub.png" alt="GitHub">
      <div class="pin__content">
        <h3 class="pin__title">GitHub</h3>
        <p class="pin__text">See more code, WIPs, and experiments.</p>
        <a class="btn btn--primary btn--icon" href="https://github.com/dockdn" target="_blank" rel="noopener" aria-label="Open Danielle's GitHub">
          🐙 <span>View GitHub</span>
        </a>
      </div>
    </article>

    <!-- RESUME -->
    <article class="pin">
      <img class="pin__media ar-21x9" src="/MyPortfolio/assets/img/resume.png" alt="Resume preview">
      <div class="pin__content">
        <h3 class="pin__title">Resume</h3>
        <?php
          $resumeUrl = '/MyPortfolio/assets/css/docs/resume.pdf';       
          $resumeFs  = $_SERVER['DOCUMENT_ROOT'] . $resumeUrl;            
          if (file_exists($resumeFs)) {
            echo '<a class="btn btn--primary btn--icon" href="'.$resumeUrl.'" target="_blank" rel="noopener" aria-label="Open resume PDF">📄 <span>Open PDF</span></a>';
          } else {
            echo '<p class="pin__text"><i>PDF not found.</i><br>Place your file at:<br><span class="mono">'.$resumeUrl.'</span></p>';
          }
        ?>
      </div>
    </article>

    <!-- COPY EMAIL -->
    <article class="pin">
    <!--  <img class="pin__media ar-mini" src="/MyPortfolio/assets/img/projects-contact.jpg" alt="Copy email"> -->
      <div class="pin__content">
        <h3 class="pin__title">Email (quick copy)</h3>
        <p class="pin__text"><span class="mono" id="emailText">danixielle@gmail.com</span></p>
        <button class="btn btn--icon btn--full" type="button" id="copyEmailBtn" aria-label="Copy email to clipboard">📋 Copy email</button>
      </div>
    </article>

  </section>

  <footer class="footer">© <?php echo date('Y'); ?> Danielle Dockery</footer>
</div>

<script>
  // LAYOUT
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

    // QUICK COPY EMAIL CUTIE
    const btn = document.getElementById('copyEmailBtn');
    const emailEl = document.getElementById('emailText');
    btn?.addEventListener('click', async () => {
      try {
        await navigator.clipboard.writeText(emailEl.textContent.trim());
        btn.textContent = '✅ Copied!';
        setTimeout(() => (btn.textContent = '📋 Copy email'), 1200);
      } catch {
        btn.textContent = '❌ Copy failed';
        setTimeout(() => (btn.textContent = '📋 Copy email'), 1200);
      }
    });
  });

  window.addEventListener('resize', layoutPins);
</script>
</body>
</html>
