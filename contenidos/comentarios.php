<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Comentarios</title>
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
                    Comentarios
                </h1>
                <p>
                    Agregar comentarios al código es importante porque nos permite recordar la razón y funcionamiento de nuestro código; cuando lo vamos a revisar, actualizar o modificar. Además de que facilita que personas diferentes a nosotros a que ellos también lo logren
                    entender más facilmente.
                </p>
                <h3>Comentarios de una línea</h3>
                <div>
                    <pre><code class="html">&lt;!-- Comentario de una sola línea. --&gt;</code></pre>
                </div>

                <br/>
                <h3>Comentarios múltiple línea</h3>
                <div>
                    <pre>
                        <code class="html">
&lt;!-- 
    Comentario de multiples lineas.
    Un comentario puede ayudar como guía al desarrollador.
--&gt;
                        </code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2017 CoderCo.</p>
    </footer>
</body>

</html>