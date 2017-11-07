<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Etiquetas HTML</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/default.css">
    <script type="text/javascript" src="../javascripts/highlight.pack.js"></script>

    <script type="text/javascript">
        hljs.initHighlightingOnLoad();
    </script>
</head>

<body style="font-family: arial; font-size: 20px; background-color: #80c9c6;">
    <div class="pagina">
        <div class="menu">
            <?php
                include '../menu.php';
            ?>
        </div>
        <div class="contenido">
            <div style="margin: 50px;">
                <h1 style="background-color: #142b3b; text-align: center; color: white;">
                    Etiquetas
                </h1>
                <section>
                    <h2 style="background-color: #e47c5d">Elementos de ra&iacute;z</h2>
                    <div>
                        <h3>!DOCTYPE html</h3>
                        <pre><code class="html">&lt;!DOCTYPE html&gt;</code></pre> Es el primer elemento que se agrega en un documento HTML, sirve para decirle al navegador la versi&oacute;n de HTML que se va a usar.
                    </div>
                    <hr/>
                    <div>
                        <h3>Html</h3>
                        <pre><code class="html">&lt;html&gt;&lt;/html&gt;</code></pre> e indica al navegador que el documento es HTML, todos los demas elementos deben descender de el.
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>