<?php
    var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
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
                include '../../menu.php';
            ?>
        </div>
        <div class="contenido">
            <div style="margin: 50px;">
                <h1 style="background-color: #142b3b; text-align: center; color: white;">
                    Formularios
                </h1>
                <section>
                    <div>
                        <h2 style="background-color: #e47c5d">Inputs HTML5</h2>
                        <h3>Input tipo email</h3>
                        <p>
                            Campo especifico para agregar un email.
                        </p>
                        <div>
                            <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        Email
        &lt;input type="email" id="email" name="email"/&gt;
        &lt;input type="submit" id="enviar" value="Enviar"/&gt;
    &lt;/form&gt;
                                </code>
                            </pre>
                        </div>
                        <div>
                            <form action="inputs.php" method="post" >
                                Email
                                <input type="email" id="email" name="email" />
                                <input type="submit" id="enviar" value="Enviar" />
                            </form>
                        </div>
                        <hr/>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>