<?php
$noticias = require __DIR__ . '/data/noticias.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>noticiasESG | Escuela Superior de Guerra</title>

    <meta name="description"
          content="Portal de noticias de la Escuela Superior de Guerra Teniente General Luis María Campos.">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/chat.css">
</head>

<body>

<header class="topbar">
    <div class="container nav">

        <a class="brand" href="index.php">
            <span class="brand-mark">ESG</span>
            <span>noticias<strong>ESG</strong></span>
        </a>

        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#noticias">Noticias</a>
            <a href="#institucional">Institucional</a>
        </nav>

    </div>
</header>


<main id="inicio">

    <!-- HERO -->
    <section class="hero">

        <div class="hero-overlay"></div>

        <div class="container hero-content">

            <span class="eyebrow">
                INFORMACIÓN INSTITUCIONAL
            </span>

            <h1>
                noticias<span>ESG</span>
            </h1>

            <p>
                Actualidad, actividades y novedades de la Escuela Superior de Guerra
                “Teniente General Luis María Campos”.
            </p>

            <a class="btn" href="#noticias">
                Ver últimas noticias
            </a>

        </div>

    </section>


    <!-- NOTICIAS -->
    <section class="section" id="noticias">

        <div class="container">

            <div class="section-head">

                <div>
                    <span class="eyebrow dark">
                        ACTUALIDAD
                    </span>

                    <h2>
                        Últimas noticias
                    </h2>
                </div>

                <span class="count">
                    <?= count($noticias) ?> noticias
                </span>

            </div>


            <div class="grid">

                <?php foreach ($noticias as $n): ?>

                    <article class="card">

                        <div
                            class="card-image"
                            style="background-image:url('<?= htmlspecialchars($n['imagen'], ENT_QUOTES, 'UTF-8') ?>')"
                        >

                            <span class="tag">
                                <?= htmlspecialchars($n['categoria'], ENT_QUOTES, 'UTF-8') ?>
                            </span>

                        </div>


                        <div class="card-body">

                            <time>
                                <?= htmlspecialchars($n['fecha'], ENT_QUOTES, 'UTF-8') ?>
                            </time>

                            <h3>
                                <?= htmlspecialchars($n['titulo'], ENT_QUOTES, 'UTF-8') ?>
                            </h3>

                            <p>
                                <?= htmlspecialchars($n['resumen'], ENT_QUOTES, 'UTF-8') ?>
                            </p>

                            <a
                                class="read"
                                href="noticia.php?id=<?= (int)$n['id'] ?>"
                            >
                                Leer noticia <span>→</span>
                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- INSTITUCIONAL -->
    <section class="institutional" id="institucional">

        <div class="container institutional-inner">

            <div>

                <span class="eyebrow dark">
                    INSTITUCIONAL
                </span>

                <h2>
                    Escuela Superior de Guerra
                </h2>

                <p>
                    “Teniente General Luis María Campos”
                </p>

            </div>

            <div class="institutional-copy">

                <p>
                    Espacio digital de noticias y novedades institucionales,
                    académicas y profesionales de la Escuela Superior de Guerra.
                </p>

            </div>

        </div>

    </section>

</main>


<!-- FOOTER -->
<footer>

    <div class="container footer-inner">

        <div>
            <strong>noticiasESG</strong>
            <br>
            <small>Portal informativo institucional</small>
        </div>

        <div>
            Escuela Superior de Guerra
            <br>
            “Tte Grl Luis María Campos”
        </div>

    </div>

</footer>


<!-- ============================= -->
<!-- ASISTENTE IA -->
<!-- ============================= -->

<button
    id="chatButton"
    class="chat-button"
    type="button"
    title="Asistente virtual ESG"
    aria-label="Abrir asistente virtual"
>
    🤖
</button>


<div
    id="chatWindow"
    class="chat-window"
>

    <div class="chat-header">

        <div>
            <div class="chat-title">
                Asistente ESG
            </div>

            <div class="chat-subtitle">
                Información de la Escuela Superior de Guerra
            </div>
        </div>

        <button
            id="chatClose"
            class="chat-close"
            type="button"
            aria-label="Cerrar"
        >
            ×
        </button>

    </div>


    <div id="chatMessages" class="chat-messages">

        <div class="message bot">
            ¡Hola! 👋<br><br>
            Soy el asistente virtual de la Escuela Superior de Guerra.<br><br>
            Podés preguntarme sobre carreras, cursos, admisión,
            pagos, biblioteca, museo, títulos y otra información institucional.
        </div>

    </div>


    <div class="chat-input-area">

        <input
            id="chatInput"
            class="chat-input"
            type="text"
            placeholder="Escribí tu pregunta..."
            autocomplete="off"
        >

        <button
            id="chatSend"
            class="chat-send"
            type="button"
        >
            Enviar
        </button>

    </div>

</div>


<script src="assets/js/app.js"></script>
<script src="assets/js/chat.js"></script>

</body>
</html>