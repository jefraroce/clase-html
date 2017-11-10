<div class="pagina">
    <div class="contenido">
        <div style="margin: 50px;">
            <h1 class="title-pages">
                Formularios
            </h1>
            <section>
                <div>
                    <h2 class="sub-title">Inputs HTML5</h2>
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
                <div>
                    <h3>Input tipo number</h3>
                    <p>
                        Define un campo numeríco, se puede agregar restricciones de sobre se pueden aceptar.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        Escriba un número entre 1 y 3.
        &lt;input type="number" id="numbero" name="numbero" min="1" max="3" /&gt;
        &lt;input type="submit" id="enviar" value="Enviar"/&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            Escriba un número entre 1 y 3.
                            <input type="number" id="numbero" name="numbero" min="1" max="3" />
                            <input type="submit" id="enviar" value="Enviar" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo rango</h3>
                    <p>
                        Denife un campo de rango, cuyo valor exacto no es importante, este campo agrega un control deslizante, el rango predeterminado es de 0 a 100, pero al igual que el campo numeríco, se pueden establecer restricciones.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        Seleccione un rango entre 1 y 20.
        &lt;input type="range" id="rango" name="rango" min="1" max="20" /&gt;
        &lt;input type="submit" id="enviar" value="Enviar"/&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="menu.php" method="post" >
                            Seleccione un rango entre 1 y 20.
                            <input type="range" id="rango" name="rango" min="1" max="20" />
                            <input type="submit" id="enviar" value="Enviar" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo teléfono</h3>
                    <p>
                        Denife un campo cuyo valor es un número telefónico.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        Seleccione un rango entre 1 y 20.
        &lt;input type="range" id="rango" name="rango" min="1" max="20" /&gt;
        &lt;input type="submit" id="enviar" value="Enviar"/&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="menu.php" method="post" >
                            Escriba su número de celular:
                            <input type="tel" id="telefono" name="telefono" />
                            <input type="submit" id="enviar" value="Enviar" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo fecha</h3>
                    <p>
                        Denife un campo para ingresar una fecha.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        Ingrese una fecha:
        &lt;input type="date" id="fecha" name="fecha" /&gt;
        &lt;input type="submit" id="enviar" value="Enviar"/&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs_html5.php" method="post" >
                            Ingrese una fecha:
                            <input type="date" id="fecha" name="fecha" max="1989-12-31" min="2005-12-31" />
                            <input type="submit" id="enviar" value="Enviar" />
                        </form>
                    </div>
                    <hr/>
                </div>
            </section>
        </div>
    </div>
</div>