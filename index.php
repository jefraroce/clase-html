<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    
    <title>Clase HTML....</title>

    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../javascripts/highlight.pack.js"></script>
    <script type="text/javascript" src="javascripts/index.js"></script>
</head>

<body style="font-family: arial; font-size: 20px; background-color: #D8CEF6;">
    <div class="pagina">
        <div class="menu">
            <?php 
                include 'menu.php';
            
            ?>
            
        </div>
        <div class="contenido">
            <div style="margin: 50px;">
                <h1 style="background-color: #142b3b; text-align: center; color: white;">Que es HTML</h1>
                <div>
                    <p>
                        HTML significa: lenguaje de marcado para hipertexto (HyperText Markup Language), es el lenguaje que se usa para la creación y visualización de página y software web, le indica al navegador como debe mostrar el contenido por medio de elementos que contienen
                        una o más etiquetas.
                    </p>
                    <div>
                        <h3>Versiones HTML</h3>
                        <img src="imagenes/versiones_html.png" alt="Versiones HTML" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2017 CoderCo.</p>
    </footer>
</body>

</html>