<?php
$noticias = require __DIR__ . '/data/noticias.php';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$noticia = null;
foreach ($noticias as $item) {
    if ($item['id'] === $id) { $noticia = $item; break; }
}
if (!$noticia) {
    http_response_code(404);
    $noticia = [
        'fecha'=>'', 'categoria'=>'', 'titulo'=>'Noticia no encontrada',
        'resumen'=>'La noticia solicitada no existe.', 'texto'=>'',
        'fuente'=>'noticiasESG', 'imagen'=>'https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=1200&q=80'
    ];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($noticia['titulo']) ?> | noticiasESG</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="topbar">
  <div class="container nav">
    <a class="brand" href="index.php"><span class="brand-mark">ESG</span><span>noticias<strong>ESG</strong></span></a>
    <nav><a href="index.php">Inicio</a><a href="index.php#noticias">Noticias</a></nav>
  </div>
</header>

<main>
<section class="article-hero" style="background-image:url('<?= htmlspecialchars($noticia['imagen']) ?>')">
  <div class="hero-overlay"></div>
  <div class="container article-hero-content">
    <span class="tag"><?= htmlspecialchars($noticia['categoria']) ?></span>
    <h1><?= htmlspecialchars($noticia['titulo']) ?></h1>
    <time><?= htmlspecialchars($noticia['fecha']) ?></time>
  </div>
</section>
<section class="article">
  <div class="article-content">
    <a class="back" href="index.php#noticias">← Volver a noticias</a>
    <p class="lead"><?= htmlspecialchars($noticia['resumen']) ?></p>
    <p><?= htmlspecialchars($noticia['texto']) ?></p>
    <div class="source"><strong>Fuente:</strong> <?= htmlspecialchars($noticia['fuente']) ?></div>
  </div>
</section>
</main>

<footer><div class="container footer-inner"><div><strong>noticiasESG</strong><br><small>Portal informativo institucional</small></div><div>Escuela Superior de Guerra<br>“Tte Grl Luis María Campos”</div></div></footer>
</body>
</html>
