<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Estructura de una página de HTML</title>
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
                <section>
                    <h1 style="background-color: #142b3b; text-align: center; color: white;">
                        Estructura de una p&aacute;gina
                    </h1>
                    <div>
                        <pre>
                            <code class="html">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt; T&iacute;tulo de la p&aacute;gina &lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Contenido de la p&aacute;gina.
    &lt;/body&gt;
&lt;/html&gt;
                            </code>
                        </pre>
                    </div>
                    <br/>
                    <div align="center">
                        <a href="../imagenes/google.png" target="_blank">
                            <img src="../imagenes/google.png" alt="Página de muestra" width="700" height="500">
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>