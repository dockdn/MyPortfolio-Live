<?php /* resume.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resume • Danielle</title>
  <link rel="stylesheet" href="/MyPortfolio/assets/css/style.css?v=99">

  <style>
    .board.board--resume{
      grid-auto-rows: auto !important;
      display: grid;
      gap: 18px;
      max-width: 1200px;
      margin: 18px auto 60px;
      padding: 0 8px;
      grid-template-columns: 1.1fr 1fr;
      grid-template-areas:
        "hero hero"
        "left rightTop"
        "left rightBottom";
      align-items: start;
    }
    .board--resume .pin--head{ grid-area: hero; }
    .board--resume .pin--head .pin__media{ aspect-ratio:16/5; object-fit:cover; width:100%; display:block; }

    .pin--resume-left{ grid-area:left; display:flex; flex-direction:column; }
    .pin--resume-left .pin__media{ aspect-ratio:3/4; object-fit:cover; }

    .pin--rec{ grid-area:rightTop; }
    .pin--linkedin{ grid-area:rightBottom; }
    .pin--landscape .pin__media{ aspect-ratio:16/9; object-fit:cover; }

    .pin__actions{ display:flex; gap:10px; flex-wrap:wrap; margin-top:8px; }
    .btn--primary{ background:#000; color:#fff; }
    .btn--primary:hover{ background:#222; }
    .btn--ghost{ background:#fff; }

    dialog#pdfModal{
      width:min(1000px, 92vw);
      height:min(90vh, 900px);
      border:none; padding:0; border-radius:10px; overflow:hidden;
      box-shadow:0 20px 60px rgba(0,0,0,.25);
    }
    dialog::backdrop{ background:rgba(0,0,0,.45); }
    .modal__bar{ display:flex; align-items:center; justify-content:space-between; padding:10px 12px; background:#111; color:#fff; }
    .modal__close{
      appearance:none; border:0; background:#fff; color:#000;
      border-radius:6px; padding:6px 10px; cursor:pointer; font-weight:600;
    }
    .modal__frame{ width:100%; height:calc(100% - 44px); display:block; border:0; }

    @media (max-width: 900px){
      .board.board--resume{
        grid-template-columns:1fr;
        grid-template-areas:"hero" "left" "rightTop" "rightBottom";
      }
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

  <h1 class="page-title">Resume</h1>

  <section class="board board--resume">
    <article class="pin pin--resume-left">
      <img class="pin__media" src="/MyPortfolio/assets/img/resume.png" alt="Resume preview">
      <div class="pin__content">
        <h3 class="pin__title">My Resume (PDF)</h3>
        <div class="pin__actions">
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

    <article class="pin pin--landscape pin--rec">
      <img class="pin__media" src="/MyPortfolio/assets/img/lettershero.png" alt="Letters of Recommendation">
      <div class="pin__content">
        <h3 class="pin__title">Letters of Recommendation</h3>
        <p class="pin__text">Please wait with me as my letters are being written. ❤️ </p>
      </div>
    </article>

    <article class="pin pin--landscape pin--linkedin">
      <img class="pin__media" src="/MyPortfolio/assets/img/linkedin.png" alt="LinkedIn">
      <div class="pin__content">
        <h3 class="pin__title">LinkedIn</h3>
        <p class="pin__text">Let’s connect professionally.</p>
        <div class="pin__actions">
          <a class="btn btn--primary" href="https://www.linkedin.com/in/danielledockery" target="_blank" rel="noopener">Open LinkedIn</a>
        </div>
      </div>
    </article>
  </section>

  <footer class="footer">© <?php echo date('Y'); ?> Danielle Dockery</footer>
</div>

<dialog id="pdfModal">
  <div class="modal__bar">
    <strong>resume.pdf</strong>
    <button class="modal__close" id="closeModalBtn">Close</button>
  </div>
  <iframe id="pdfFrame" class="modal__frame" src="" title="Resume PDF"></iframe>
</dialog>

<script>
  const viewBtn   = document.getElementById('viewResumeBtn');
  const modal     = document.getElementById('pdfModal');
  const pdfFrame  = document.getElementById('pdfFrame');
  const closeBtn  = document.getElementById('closeModalBtn');
  const RESUME_URL = '/MyPortfolio/assets/css/docs/resume.pdf';

  viewBtn?.addEventListener('click', () => {
    pdfFrame.src = RESUME_URL + '?v=' + Date.now();
    if (typeof modal.showModal === 'function') {
      try { modal.showModal(); } catch (e) { window.open(RESUME_URL, '_blank'); }
    } else {
      window.open(RESUME_URL, '_blank');
    }
  });

  closeBtn?.addEventListener('click', () => {
    modal.close();
    pdfFrame.src = '';
  });

  modal?.addEventListener('cancel', () => {
    pdfFrame.src = '';
  });
</script>
</body>
</html>
