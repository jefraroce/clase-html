<?php
    include_once 'funciones.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?= get_url()?>/clase_HTML/javascripts/index.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <h3>Menu</h3>
        <ul>
            <li><a href="<?= get_url()?>/clase_HTML/index.php" title="Inicio">Inicio</a></li>
            <li><a href="<?= get_url()?>/clase_HTML/contenidos/estructura_pagina.php" title="Estructura HTML">Estructura HTML</a></li>
            <li><a href="<?= get_url()?>/clase_HTML/contenidos/elementos.php" title="Elementos">Elementos</a></li>
            <li>
                <div onclick="mostrar_menu_etiqueta('etiquetas')">Etiquetas</div>
                <ul class="menus-ocultos" id="etiquetas">
                    <li><a href="<?= get_url()?>/clase_HTML/contenidos/etiquetas/agrupacion_contenido.php" title="Agrupación de Contenido">Agrupación de Contenido</a></li>
                    <li><a href="<?= get_url()?>/clase_HTML/contenidos/etiquetas/contenido_incrustado.php" title="Contenido Incrustado">Contenido Incrustado</a></li>
                    <li><a href="<?= get_url()?>/clase_HTML/contenidos/etiquetas/metadatos.php" title="Metadatos">Metadatos</a></li>
                    <li><a href="<?= get_url()?>/clase_HTML/contenidos/etiquetas/secciones.php" title="Secciones">Secciones</a></li>
                    <li><a href="<?= get_url()?>/clase_HTML/contenidos/etiquetas/semantica_texto.php" title="Semantica Texto">Semantica Texto</a></li>
                </ul>
            </li>
            <li><a href="<?= get_url()?>/clase_HTML/contenidos/atributos.php" title="Atributos">Atributos</a></li>
            <li><a href="<?= get_url()?>/clase_HTML/contenidos/comentarios.php" title="Comentarios">Comentarios</a></li>
            <li><a href="<?= get_url()?>/clase_HTML/contenidos/tablas.php" title="Tablas">Tablas</a></li>
            <li><a href="<?= get_url()?>/clase_HTML/contenidos/propiedades_css.php" title="Propiedades CSS">Propiedades CSS</a></li>
            <li><a href="<?= get_url()?>/clase_HTML/contenidos/codificacion_url.php ">Codificación URL</a></li>
            <li>
                <div onclick="mostrar_menu_etiqueta('formularios')">Formulario</div>
                <ul class="menus-ocultos" id="formularios">
                    <li><a href="<?= get_url()?>/clase_HTML/contenidos/formularios.php ">Estructura de formulario</a></li>
                    <li><a href="<?= get_url()?>/clase_HTML/contenidos/formularios/inputs.php" title="Inputs">Tipos de input</a></li>
                    <li><a href="<?= get_url()?>/clase_HTML/contenidos/formularios/inputs_html5.php" title="Inputs">Input HTML5</a></li>
                </ul>
            </li>
        </ul>
        
    </body>
</html>