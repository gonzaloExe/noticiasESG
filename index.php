<?php
$noticias = require __DIR__ . '/data/noticias.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>noticiasESG | Escuela Superior de Guerra</title>
<meta name="description" content="Portal de noticias de la Escuela Superior de Guerra Teniente General Luis María Campos.">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="topbar">
  <div class="container nav">
    <a class="brand" href="index.php"><span class="brand-mark">ESG</span><span>noticias<strong>ESG</strong></span></a>
    <nav>
      <a href="#inicio">Inicio</a>
      <a href="#noticias">Noticias</a>
      <a href="#institucional">Institucional</a>
    </nav>
  </div>
</header>

<main id="inicio">
<section class="hero">
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <span class="eyebrow">INFORMACIÓN INSTITUCIONAL</span>
    <h1>noticias<span>ESG</span></h1>
    <p>Actualidad, actividades y novedades de la Escuela Superior de Guerra “Teniente General Luis María Campos”.</p>
    <a class="btn" href="#noticias">Ver últimas noticias</a>
  </div>
</section>

<section class="section" id="noticias">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow dark">ACTUALIDAD</span>
        <h2>Últimas noticias</h2>
      </div>
      <span class="count"><?= count($noticias) ?> noticias</span>
    </div>
    <div class="grid">
      <?php foreach ($noticias as $n): ?>
      <article class="card">
        <div class="card-image" style="background-image:url('<?= htmlspecialchars($n['imagen']) ?>')">
          <span class="tag"><?= htmlspecialchars($n['categoria']) ?></span>
        </div>
        <div class="card-body">
          <time><?= htmlspecialchars($n['fecha']) ?></time>
          <h3><?= htmlspecialchars($n['titulo']) ?></h3>
          <p><?= htmlspecialchars($n['resumen']) ?></p>
          <a class="read" href="noticia.php?id=<?= (int)$n['id'] ?>">Leer noticia <span>→</span></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="institutional" id="institucional">
  <div class="container institutional-inner">
    <div>
      <span class="eyebrow dark">INSTITUCIONAL</span>
      <h2>Escuela Superior de Guerra</h2>
      <p>“Teniente General Luis María Campos”</p>
    </div>
    <div class="institutional-copy">
      <p>Espacio digital de noticias y novedades institucionales, académicas y profesionales de la Escuela Superior de Guerra.</p>
    </div>
  </div>
</section>
</main>

<footer>
  <div class="container footer-inner">
    <div><strong>noticiasESG</strong><br><small>Portal informativo institucional</small></div>
    <div>Escuela Superior de Guerra<br>“Tte Grl Luis María Campos”</div>
  </div>
</footer>
<script src="assets/js/app.js"></script>
</body>
</html>
