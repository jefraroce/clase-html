<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
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
                        Formularios
                    </h1>
                    <div>
                        <pre>
                            <code class="html">
                                
        &lt;form action="formularios.php" method="post" &gt;
            Nombre
            &lt;input type="text" id="name" name="name" /&gt;&lt;br/&gt;
            Apellido
            &lt;input type="tex" id="apellido" name="apellido" /&gt;&lt;br/&gt;
            edad
            &lt;input type="number" id="edad" name="edad" /&gt;&lt;br/&gt;
            &lt;button id="enviar"&gt;Enviar&lt;/button&gt;
        &lt;/form&gt;
                            </code>
                        </pre>
                    </div>
                    <div>
                        <form action="formularios.php" method="post" >
                            Nombre
                            <input type="text" id="name" name="name" /><br/>
                            Apellido
                            <input type="tex" id="apellido" name="apellido" /><br/>
                            edad
                            <input type="number" id="edad" name="edad" /><br/>
                            <button id="enviar">Enviar</button>
                        </form>
                    </div>

                    <hr/>

                    <h3 style="background-color: #e47c5d">Action</h3>
                    <div>
                        Es la acción que se realizará al momento de dar clic en el botón <strong>Enviar</strong>
                    </div>
                    <div>
                        Normalmente, los datos se envían a una página del servidor al momento de hacer clic en el botón.
                    </div>

                    <hr/>

                    <h3 style="background-color: #e47c5d">Method</h3>
                    <div>
                        Es el atributo donde  se especifica el metodo HTTP (GET o POST) usado para enviar los datos del formulario.
                    </div>

                    <div>
                        <h4>Metodo GET:</h4>
                        <pre>
                            <code class="html">
        &lt;form action="formularios.php" method="post" &gt;&lt;/form&gt;
                            </code>
                        </pre>
                    </div>
                    <div>
                        <h5>Cuando se usa el metodo GET</h5>
                        <p>
                            Si los datos de un formulario no contienen información personal o sensible, se puede usar este metodo, ya que los datos se muestran en la url como parametros.
                        <ul>
                            <li>Se agregan en la URL como parametros: <b>nombre=valor</b></li>
                            <li>La longitud de una url es limitada</li>
                            <li>El metodo get no se debe usar para enviar información personal.</li>
                        </ul>
                        </p>
                    </div>

                    <hr/>

                    <div>
                        <h4>Metodo POST: </h4>
                        <pre>
                            <code class="html">
        &lt;form action="formularios.php" method="post" &gt;&lt;/form&gt;
                            </code>
                        </pre>
                    </div>
                    <div>
                        <h5>Cuando se usa el metodo POST</h5>
                        <p>
                            Se útiliza POST si los datos del formulario continene información sensible, ya que los datos no se mostrarán en la url de la página web. <br/><br/>
                            El metodo POST No tiene limitaciones de tamaño, ósea que se puede usar para enviar grandes cantidades de datos.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>