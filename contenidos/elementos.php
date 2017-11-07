<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Elementos de HTML</title>
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
                        Elementos
                    </h1>
                    Son partes que componen los documentos HTML, un elemento HTML esta conformado por:
                    <ol>
                        <li>Etiqueta de apertura</li>
                        <li>Atributos</li>
                        <li>Contenido de a etiqueta</li>
                        <li>Cierre de la etiqueta</li>
                    </ol>
                    <img src="../imagenes/elemento.png" alt="Elemento" width="500">
                </section>
                <hr/>
                <section>
                    <h1 style="background-color: #142b3b; text-align: center; color: white;">
                        Elementos anidados
                    </h1>
                    <div>
                        <pre>
                            <code class="html">
&lt;div&gt;
    &lt;p&gt; Este es un p&aacute;rrafo &lt;/p&gt;
    &lt;p style="color:red"&gt; Este es otro p&aacute;rrafo &lt;/p&gt;
&lt;/div&gt;
                            </code>
                        </pre>
                    </div>

                    <div>
                        <p>Este es un p&aacute;rrafo</p>
                        <p style="color:red">Este es otro p&aacute;rrafo</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>