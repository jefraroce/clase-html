<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Coderdojo Colombia</title>
        <link href="styles/bootstrap-grid.css" rel="stylesheet">
        <link href="styles/bootstrap-grid.min.css" rel="stylesheet">
        <link href="styles/bootstrap.css" rel="stylesheet">
        <link href="styles/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="javascripts/index.js"></script>
        <script type="text/javascript" src="javascripts/bootstrap.min.js" ></script>
        <script type="text/javascript" src="javascripts/bootstrap.bundle.min.js" ></script>
        <script type="text/javascript" src="javascripts/highlight.pack.js" ></script>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/default.css">
        <script type="text/javascript">
            hljs.initHighlightingOnLoad();
        </script>
    </head>
    <body>
        <div class="row">
            <div class="col-2" style="background-color: rgb(76, 175, 80);" >
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="imagenes/coderdojo.png" width="180" height="50" class="d-inline-block align-top" alt=""></a>
                </nav>
                <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-html-tab" data-toggle="pill" href="#v-pills-html" role="tab" aria-controls="v-pills-html" aria-selected="false">
                            Que es HTML
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-estructura-html-tab" data-toggle="pill" href="#v-pills-estructura-html" aria-controls="v-pills-estructura-html" aria-selected="false">
                            Estructura HTML
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-elementos-tab" data-toggle="pill" href="#v-pills-elementos" role="tab" aria-controls="v-pills-elementos" aria-selected="true">
                            Elementos
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Etiquetas
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="v-pills-agrupacion-contenido-tab" data-toggle="pill" href="#v-pills-agrupacion-contenido" role="tab" aria-controls="v-pills-agrupacion-contenido" aria-selected="false">
                                Agrupación de Contenido
                            </a>
                            <a class="dropdown-item" id="v-pills-contenido-incrustado-tab" data-toggle="pill" href="#v-pills-contenido-incrustado" role="tab" aria-controls="v-pills-contenido-incrustado" aria-selected="false">
                                Contenido Incrustado
                            </a>
                            <a class="dropdown-item" id="v-pills-metadatos-tab" data-toggle="pill" href="#v-pills-metadatos" role="tab" aria-controls="v-pills-metadatos" aria-selected="false">
                                Metadatos
                            </a>
                            <a class="dropdown-item" id="v-pills-secciones-tab" data-toggle="pill" href="#v-pills-secciones" role="tab" aria-controls="v-pills-secciones" aria-selected="false">
                                Secciones
                            </a>
                            <a class="dropdown-item" id="v-pills-semantica-texto-tab" data-toggle="pill" href="#v-pills-semantica-texto" role="tab" aria-controls="v-pills-semantica-texto" aria-selected="false">
                                Semantica Texto
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-atributos-tab" data-toggle="pill" href="#v-pills-atributos" role="tab" aria-controls="v-pills-atributos" aria-selected="false">
                            Atributos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-comentarios-tab" data-toggle="pill" href="#v-pills-comentarios" role="tab" aria-controls="v-pills-comentarios" aria-selected="false">
                            Comentarios
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-tablas-tab" data-toggle="pill" href="#v-pills-tablas" role="tab" aria-controls="v-pills-tablas" aria-selected="false">
                            Tablas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-prop-css-tab" data-toggle="pill" href="#v-pills-prop-css" role="tab" aria-controls="v-pills-prop-css" aria-selected="false">
                            Propiedades CSS
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-cod-url-tab" data-toggle="pill" href="#v-pills-cod-url" role="tab" aria-controls="v-pills-cod-url" aria-selected="false">
                            Codificación URL
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Formularios
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="v-pills-estructura-formulario-tab" data-toggle="pill" href="#v-pills-estructura-formulario" role="tab" aria-controls="v-pills-estructura-formulario" aria-selected="false">
                                Estructura de formulario
                            </a>
                            <a class="dropdown-item" id="v-pills-elementos-formulario-tab" data-toggle="pill" href="#v-pills-elementos-formulario" role="tab" aria-controls="v-pills-elementos-formulario" aria-selected="false">
                                Elementos de formulario
                            </a>
                            <a class="dropdown-item" id="v-pills-tipos-input-tab" data-toggle="pill" href="#v-pills-tipos-input" role="tab" aria-controls="v-pills-tipos-input" aria-selected="false">
                                Tipos de input
                            </a>
                            <a class="dropdown-item" id="v-pills-inputs-html5-tab" data-toggle="pill" href="#v-pills-inputs-html5" role="tab" aria-controls="v-pills-inputs-html5" aria-selected="false">
                                Input HTML5
                            </a>
                            <a class="dropdown-item" id="v-pills-atributos-form-tab" data-toggle="pill" href="#v-pills-atributos-form" role="tab" aria-controls="v-pills-atributos-form" aria-selected="false">
                                Atributos formularios
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-javascript-tab" data-toggle="pill" href="#v-pills-javascript" role="tab" aria-controls="v-pills-javascript" aria-selected="false">
                            Que es JavaScript
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-html" role="tabpanel" aria-labelledby="v-pills-html-tab">
                        <?php
                        include './contenidos_html/inicio.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-estructura-html" role="tabpanel" aria-labelledby="v-pills-estructura-html-tab">
                        <?php
                        include './contenidos_html/contenidos/estructura_pagina.php';
                        ?>
                    </div>
                    <div class="tab-pane fade " id="v-pills-elementos" role="tabpanel" aria-labelledby="v-pills-elementos-tab">
                        <?php
                        include './contenidos_html/contenidos/elementos.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-agrupacion-contenido" role="tabpanel" aria-labelledby="v-pills-agrupacion-contenido-tab">
                        <?php
                        include './contenidos_html/contenidos/etiquetas/agrupacion_contenido.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-contenido-incrustado" role="tabpanel" aria-labelledby="v-pills-contenido-incrustado-tab">
                        <?php
                        include './contenidos_html/contenidos/etiquetas/contenido_incrustado.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-metadatos" role="tabpanel" aria-labelledby="v-pills-metadatos-tab">
                        <?php
                        include './contenidos_html/contenidos/etiquetas/metadatos.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-secciones" role="tabpanel" aria-labelledby="v-pills-secciones-tab">
                        <?php
                        include './contenidos_html/contenidos/etiquetas/secciones.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-semantica-texto" role="tabpanel" aria-labelledby="v-pills-semantica-texto-tab">
                        <?php
                        include './contenidos_html/contenidos/etiquetas/semantica_texto.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-atributos" role="tabpanel" aria-labelledby="v-pills-atributos-tab">
                        <?php
                        include './contenidos_html/contenidos/atributos.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-comentarios" role="tabpanel" aria-labelledby="v-pills-comentarios-tab">
                        <?php
                        include './contenidos_html/contenidos/comentarios.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-tablas" role="tabpanel" aria-labelledby="v-pills-tablas-tab">
                        <?php
                        include './contenidos_html/contenidos/tablas.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-prop-css" role="tabpanel" aria-labelledby="v-pills-prop-css-tab">
                        <?php
                        include './contenidos_html/contenidos/propiedades_css.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-cod-url" role="tabpanel" aria-labelledby="v-pills-cod-url-tab">
                        <?php
                        include './contenidos_html/contenidos/codificacion_url.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-estructura-formulario" role="tabpanel" aria-labelledby="v-pills-estructura-formulario-tab">
                        <?php
                        include './contenidos_html/contenidos/formularios.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-elementos-formulario" role="tabpanel" aria-labelledby="v-pills-elementos-formulario-tab">
                        <?php
                        include './contenidos_html/contenidos/formularios/elementos_formulario.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-tipos-input" role="tabpanel" aria-labelledby="v-pills-tipos-input-tab">
                        <?php
                        include './contenidos_html/contenidos/formularios/inputs.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-inputs-html5" role="tabpanel" aria-labelledby="v-pills-inputs-html5-tab">
                        <?php
                        include './contenidos_html/contenidos/formularios/inputs_html5.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-atributos-form" role="tabpanel" aria-labelledby="v-pills-atributos-form-tab">
                        <?php
                        include './contenidos_html/contenidos/formularios/atributos.php';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-javascript" role="tabpanel" aria-labelledby="v-pills-javascript-tab">
                        <?php
                        include './contenidos_javascript/inicio.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <footer style="text-align: center;" >
            © 2017 CoderCo.
        </footer>
    </body>
    
</html>