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
                    <h2 style="background-color: #e47c5d">Semantica de texto</h2>
                    <div>
                        <h3>A</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
    &lt;a href="http://google.com.co" target="_blank"&gt;Link a google.&lt;/a&gt;
                    </pre>
                        <div>
                            <a href="http://google.com.co" target="_blank">Link a google.</a>
                        </div>
                        Representa un hipervinculo el cual redirecciona a otra página.
                    </div>
                    <hr/>
                    <div>
                        <h3>Strong</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
            &lt;p&gt;
                Párrafo con un texto&lt;strong&gt;importante&lt;/strong&gt; 
            &lt;/p&gt;
                    </pre>
                        <div>
                            <p>Párrafo con un texto <strong>importante</strong>.</p>
                        </div>
                        Define un texto importante.
                    </div>
                    <hr/>
                    <div>
                        <h3>B</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
            &lt;p&gt;
                Párrafo con un texto en &lt;b&gt;negrita&lt;/b&gt; 
            &lt;/p&gt;
                    </pre>
                        <div>
                            <p>Párrafo con un texto en <b>negrita</b>.</p>
                        </div>
                        Representa un texto con negrita.
                    </div>
                    <hr/>
                    <div>
                        <h3>Br</h3>
                        <pre style="color: blue; border: 1px solid black; background-color: #E6E6E6; ">
            &lt;p&gt;
                Párrafo con un texto &lt;br/&gt; párrafo con otro texto. 
            &lt;/p&gt;
                    </pre>
                        <div>
                            <p>Párrafo con un texto <br/> párrafo con otro texto.</p>
                        </div>
                        Representa un salto de línea.
                    </div>
                    <hr/>
                </section>
                <br/>
                <a style="float: left;" href="../etiquetas.html">Elementos de raíz</a>
                <a style="float: right;" href="contenido_incrustado.html">Contenido incrustado.</a>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2017 CoderCo.</p>
    </footer>
</body>

</html>