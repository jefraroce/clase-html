<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tablas</title>
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
                        Tablas
                    </h1>
                    <p>
                        Una tabla HTML esta formada por un conjunto de etiquetas:
                    </p>
                    <p>
                        La etiqueta principal es: <b>&lt;table&gt;&lt;/table&gt;</b>
                    </p>
                    <p>
                        La etiqueta para construir las filas es: <b>&lt;tr&gt;&lt;/tr&gt;</b>
                    </p>
                    <p>
                        La etiqueta para construir las cabeceras de las celdas es: <b>&lt;th&gt;&lt;/th&gt;</b>
                    </p>
                    <div>
                    <p>
                        La etiqueta para construir las celdas es: <b>&lt;td&gt;&lt;/td&gt;</b>
                    </p>
                    <div>
                        <pre>
                            <code class="html">
&lt;table&gt;
    &lt;tr&gt;
        &lt;th&gt;Nombre&lt;th&gt;
        &lt;th&gt;Apellido&lt;th&gt;
        &lt;th&gt;Edad&lt;th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Jeisson&lt;td&gt;
        &lt;td&gt;Rosas&lt;td&gt;
        &lt;td&gt;26&lt;td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Paola&lt;td&gt;
        &lt;td&gt;Cuadros&lt;td&gt;
        &lt;td&gt;28&lt;td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Glendel&lt;td&gt;
        &lt;td&gt;Fyne&lt;td&gt;
        &lt;td&gt;32&lt;td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
                            </code>
                        </pre>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                            </tr>
                            <tr>
                                <td>Jeisson</td>
                                <td>Rosas</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>Paola</td>
                                <td>Cuadros</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>Glendel</td>
                                <td>Fyne</td>
                                <td>32</td>
                            </tr>
                        </table>
                    </div>
                </section>
                <section>
                    <h2>Conbinación de columnas y filas</h2>
                    <h3>Colspan</h3>
                    <p>
                        Este atributo permite combinar varias columnas para crear una columna ancha
                    </p>
                    <div>
                        <pre>
                            <code class="html">
&lt;table border="2"&gt;
    &lt;tr&gt;
        &lt;th&gt;Producto&lt;th&gt;
        &lt;th&gt;Valor&lt;th&gt;
        &lt;th&gt;Cantidad&lt;th&gt;
        &lt;th&gt;Total&lt;th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Arroz&lt;td&gt;
        &lt;td&gt;1500&lt;td&gt;
        &lt;td&gt;2 Lib.&lt;td&gt;
        &lt;td&gt;3000&lt;td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Azucar&lt;td&gt;
        &lt;td&gt;1000&lt;td&gt;
        &lt;td&gt;1 Lib.&lt;td&gt;
        &lt;td&gt;1000&lt;td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Leche&lt;td&gt;
        &lt;td&gt;2500&lt;td&gt;
        &lt;td&gt;2 Lit.&lt;td&gt;
        &lt;td&gt;5000&lt;td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td colspan="3" style="text-align: center;" &gt;Total&lt;td&gt;
        &lt;td&gt;9000&lt;td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
                            </code>
                        </pre>
                    </div>
                    <div>
                        <table border="2" >
                        <tr>
                            <th>Producto</th>
                            <th>Valor</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>Arroz</td>
                            <td>1500</td>
                            <td>2 Lib.</td>
                            <td>3000</td>
                        </tr>
                        <tr>
                            <td>Azucar</td>
                            <td>1000</td>
                            <td>1 Lib.</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>Leche</td>
                            <td>2500</td>
                            <td>2 Lit.</td>
                            <td>5000</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center;" >Total</td>
                            <td>9000</td>
                        </tr>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2017 CoderCo.</p>
    </footer>
</body>

</html>