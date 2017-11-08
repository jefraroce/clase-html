<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Codificación URL</title>
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/default.css">
        <script type="text/javascript" src="../javascripts/highlight.pack.js"></script>

        <script type="text/javascript">
            hljs.initHighlightingOnLoad();
        </script>

        <style type="text/css" >
            th, td {
                border: 1px solid;
            }
        </style>
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
                        Codificación URL
                    </h1>
                    <p>
                        Una <strong>URL Uniform Resource Locator (Localizador Uniforme de Recursos)</strong> , permite encontrar de manera precisa en un servidor cualquier recurso, como documentos, imágenes, audios, etc.
                    </p>
                    <p>
                        Es otra palabra para una dirección web, puede estar compuesta por palabras(localhost) o una dirección de <strong>Protocolo de Internet (IP).</strong>
                    </p>
                    <p>
                        Una dirección web esta compuesta por:
                    </p>

                    <div>
                        <pre>
                            <code class="html">
        protocolo://servidor:puerto/directorio/pagina
                            </code>
                        </pre>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Protocolo</th>
                                <th style="width: 280px;" >Servidor</th>
                                <th>Puerto</th>
                                <th>Directorio</th>
                                <th>Página</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Indica el tipo de servicio al cual estamos accediendo, las más comunes son (http y https).
                                </td>
                                <td>
                                    Es el nombre del sitio web, se compone de dos partes:
                                    <ul>
                                        <li><b>Nombre del servidor:</b> El nombre que se le haya asignado al sitio web.</li>
                                        <li><b>Dominio:</b> Son las últimas letras del nombre del servidor, las más comunes son: <b>.com, .net, .org, .edu</b></li>
                                    </ul>
                                </td>
                                <td>
                                    Es un número y corresponde a un punto especifico de enrada a un sitio web, suele ir asociado al protocolo, el protocolo http suele user el puerto 80 y por esto no se especifica en la url.
                                </td>
                                <td>
                                    Al igual que los sistemas operativos tienen carpetas, los sitios web también los tienen, nos sirven para organizar las páginas.
                                </td>
                                <td>
                                    Representa la página web que se muestra.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 style="background-color: #e47c5d">Protocolos comunes de URL</h2>

                    <table>
                        <thead>
                            <tr>
                                <th>Protocolo</th>
                                <th>Significado</th>
                                <th>Uso.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>http</td>
                                <td>HyperText Transfer Protocol. (Protocolo de Transferencia de Hipertexto.)</td>
                                <td>Páginas web comunes, no encriptado.</td>
                            </tr>
                            <tr>
                                <td>https</td>
                                <td>HyperText Transfer Protocol. (Protocolo Seguro de Transferencia de Hipertexto.)</td>
                                <td>Páginas web seguras, encriptado.</td>
                            </tr>
                            <tr>
                                <td>ftp</td>
                                <td>File Transfer Protocol. (Protocolo de Transferencia de archivos.)</td>
                                <td>Páginas web seguras, encriptado.</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <footer>
            <p>© 2017 CoderCo.</p>
        </footer>
    </body>

</html>