<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Propiedades CSS</title>
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
                    Propiedades CSS
                </h1>
                <p>
                    CSS permite cambiar la apariencia de una página web.
                </p>
                <section>
                    <h2 style="background-color: #e47c5d">Texto</h2>
                    <div>
                        <h3>Color texto</h3>
                        <p>
                            Permite cambiar el color del texto.
                        </p>
                        <pre><code class="html">&lt;p style="color: green;" &gt; Este es un párrafo en color verde &lt;/p&gt;</code></pre>
                        <div>
                            <p style="color: green;">Este es un párrafo en color verde </p>
                        </div>
                    </div>
                    <hr/>
                    <div>
                        <h3>Font-size</h3>
                        Permite cambiar el tamaño del texto.
                        <pre><code class="html">&lt;p style="font-size: 30px;" &gt; Este es un párrafo &lt;/p&gt;</code></pre>
                        <div>
                            <p style="font-size: 30px;">Este es un párrafo</p>
                        </div>
                    </div>
                    <div>
                        <h3>Font-family</h3>
                        Permite cambiar el tipo de letra.
                        <pre><code class="html">&lt;p style="font-family: monospace;" &gt; Este es un párrafo &lt;/p&gt;</code></pre>
                        <div>
                            <p style="font-family: monospace;">Este es un párrafo</p>
                        </div>
                    </div>
                    <div>
                        <h3>Text-aling</h3>
                        Permite cambiar la alineación del texto.
                        <h4>Left</h4>
                        <p>Permite alinear el texto a la izquierda.</p>
                        <pre><code class="html">&lt;p style="text-align: left;" &gt; Este es un párrafo &lt;/p&gt;</code></pre>
                        <div>
                            <p style="text-align: left;">Este es un párrafo</p>
                        </div>
                        <h4>Right</h4>
                        <p>Permite alinear el texto a la derecha.</p>
                        <pre><code class="html">&lt;p style="text-align: right;" &gt; Este es un párrafo &lt;/p&gt;</code></pre>
                        <div>
                            <p style="text-align: right;">Este es un párrafo</p>
                        </div>
                        <h4>Center</h4>
                        <p>Permite centar el texto.</p>
                        <pre><code class="html">&lt;p style="text-align: center;" &gt; Este es un párrafo &lt;/p&gt;</code></pre>
                        <div>
                            <p style="text-align: center;">Este es un párrafo</p>
                        </div>
                    </div>
                </section>
                <section>
                    <h2 style="background-color: #e47c5d">Fondos</h2>
                    <div>
                        <h3>Background-color</h3>
                        Permite cambiar el tamaño del texto.
                        <pre><code class="html">&lt;p style="background-color: #8258FA;" &gt; Este es un párrafo &lt;/p&gt;</code></pre>
                        <div>
                            <p style="background-color: #8258FA;">Este es un párrafo</p>
                        </div>
                    </div>
                    <hr/>
                    <div>
                        <h3>Background</h3>
                        Permite cambiar el tamaño del texto.
                        <pre><code class="html">&lt;p style="background-color: #8258FA;" &gt; Este es un párrafo &lt;/p&gt;</code></pre>
                        <div style="background-image: url('http://vivirenflow.com/wp-content/uploads/2014/07/colores.jpg'); background-repeat: no-repeat;">
                            <p>
                                Este es un ejemplo de una imagen de fondo.
                            </p>
                            <p>
                                <b>background-color:</b> Permite cambiar el color de fondo de un elemento.
                            </p>
                            <p>
                                <b>background-image:</b> Permite agregar una imagen de fondo a un elemento.
                            </p>
                            <p>
                                <b>Bacground.repeat:</b> Opciones de repetir una imagen de fondo: no-repeat, repeat.
                            </p>
                        </div>
                    </div>
                    <hr/>
                </section>
                <section>
                    <h2 style="background-color: #e47c5d">Margen</h2>
                    <div>
                        <h3>Maging-left</h3>
                        <p>
                            Permite el margen izquierdo de un elemento.
                        </p>
                        <pre>
                            <code class="html">
&lt;div style="border: 2px solid; margin-left: 40px;" &gt;
    &lt;p &gt; Este es un párrafo &lt;/p&gt;
&lt;/div&gt;
                            </code>
                        </pre>
                        <div style="border: 2px solid; margin-left: 40px;">
                            <p>Este es un párrafo</p>
                        </div>
                    </div>
                    <hr/>
                    <div>
                        <h3>Maging-right</h3>
                        <p>
                            Permite el margen derecho de un elemento.
                        </p>
                        <pre>
                            <code class="html">
&lt;div style="border: 2px solid; margin-left: 40px;" &gt;
    &lt;p &gt; Este es un párrafo &lt;/p&gt;
&lt;/div&gt;
                            </code>
                        </pre>
                        <div style="border: 2px solid; margin-right: 40px;">
                            <p>Este es un párrafo</p>
                        </div>
                    </div>
                    <hr/>
                </section>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2017 CoderCo.</p>
    </footer>
</body>

</html>