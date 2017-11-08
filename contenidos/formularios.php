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
                        Estructura de una p&aacute;gina
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
                    
                    <h3>Action</h3>
                    <div>
                        Es la acción que se realizará al momento de dar clic en el botón <strong>Enviar</strong>
                    </div>
                    <div>
                        Normalmente, los datos se envían a una página del servidor al momento de hacer clic en el botón.
                    </div>
                    
                    <h3>Method</h3>
                    <div>
                        E
                    </div>
                    
                    
                </section>
            </div>
        </div>
    </div>
</body>

</html>