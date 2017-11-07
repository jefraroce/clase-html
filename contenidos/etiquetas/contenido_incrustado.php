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
                    <h2 style="background-color: #e47c5d">Contenido incrustado</h2>
                    <div>
                        <h3>Img</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
    &lt;img/ scr="https://goo.gl/qURYKs" alt="Imagen de muestra" &gt;
                    </pre>
                        <div>
                            <img src="https://goo.gl/qURYKs" alt="Imagen de muestra" width="250" height="300">
                        </div>
                        <br/>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
    &lt;img/ scr="https://goo.gl/qURYKsdd" alt="Imagen de muestra" &gt;
                    </pre>
                        <div>
                            <img src="https://goo.gl/qURYKsdd" alt="Imagen de muestra" width="250" height="300">
                        </div>
                        <br/> Permite agregar una imagen en una página, esta etiqueta debe tener obligatorio el atributo <b>src</b> la cual indicia l url de la imagen.
                    </div>
                    <hr/>
                    <div>
                        <h3>Iframe</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
    &lt;iframe src="../../index.html" &gt;&lt;/iframe&gt;
                    </pre>
                        <iframe src="../../index.html" width="800" height="300"></iframe>
                        <br/> Permite embeber un documento HTML dentro de nuestra página.
                    </div>
                    <hr/>
                    <div>
                        <h3>Vídeo</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
&lt;video src="../../video/Todos_deberian_aprender_a_programar.mp4" controls &gt;
&lt;/video&gt;
                    </pre>
                        <video src="../../video/Todos_deberian_aprender_a_programar.mp4" controls poster></video>
                        <br/> Permite permite agregar un vídeo dentro de nuestra página.
                    </div>
                    <hr/>
                </section>
                <br/>
                <a style="float: left;" href="semantica_texto.html">Semantica de texto</a>
                <a style="float: right;" href="../atributos.html">Atributos</a>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2017 CoderCo.</p>
    </footer>
</body>

</html>