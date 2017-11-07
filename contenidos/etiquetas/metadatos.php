<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Etiquetas HTML</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/default.css">
    <script type="text/javascript" src="../../javascripts/highlight.pack.js"></script>

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
                    <h2 style="background-color: #e47c5d">Metadatos del documento</h2>
                    <div>
                        <h3>Head</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
                        &lt;head&gt;&lt;/head&gt;
                    </pre> Provee información general acerca del documento HTML, incluyendo el título, enlaces a hojas de estilos, etc.
                    </div>
                    <hr/>
                    <div>
                        <h3>Title</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
                        &lt;title&gt;&lt;/title&gt;
                    </pre> Define el título en la barra del navegador.
                    </div>
                    <hr/>
                    <div>
                        <h3>Style</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
                        &lt;style&gt;&lt;/style&gt;
                    </pre> Etiqueta usada para escribir código CSS dentro de un documento HTML.
                    </div>
                    <hr/>
                </section>
                <br/>
                <a style="float: left;" href="../etiquetas.html">Elementos de raíz</a>
                <a style="float: right;" href="secciones.html">Secciones</a>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2017 CoderCo.</p>
    </footer>
</body>

</html>