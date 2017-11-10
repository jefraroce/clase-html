<div class="pagina">
    <div class="contenido">
        <div style="margin: 50px;">
            <h1 class="title-pages">
                Formularios
            </h1>
            <section>
                <div>
                    <h2 class="sub-title">Tipos de input</h2>
                    <h3>Input tipo text</h3>
                    <p>
                        Permite agregar texto de línea simple, los saltos de línea son eliminados automáticamente.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs.php" method="post" &gt;
        Nombre
        &lt;input type="text" id="name" name="name" /&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            Nombre
                            <input type="text" id="name" name="name" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo password</h3>
                    <p>
                        Campo para ingresar una contraseña.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs.php" method="post" &gt;
        Nombre
        &lt;input type="text" id="name" name="name" /&gt;&lt;br/&gt;
        Contraseña
        &lt;input type="password" id="password" name="password" /&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            Nombre
                            <input type="text" id="name" name="name" /><br/>
                            Contraseña
                            <input type="password" id="password" name="password" /><br/>
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo Submit</h3>
                    <p>
                        Define un botón para enviar los datos del formulario.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs.php" method="post" &gt;
        Nombre
        &lt;input type="text" id="name" name="name" /&gt;&lt;br/&gt;
        Contraseña
        &lt;input type="text" id="apellido" name="apellido" /&gt;&lt;br/&gt;
        &lt;input type="submit" id="enviar" name="enviar" value="enviar" /&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            Nombre
                            <input type="text" id="name" name="name" /><br/>
                            Apellido
                            <input type="text" id="apellido" name="apellido" /><br/>
                            <input type="submit" id="enviar" name="enviar" value="enviar" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo reset</h3>
                    <p>
                        Permite limpiar los campos de un formulario.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs.php" method="post" &gt;
        Nombre
        &lt;input type="text" id="name" name="name" /&gt;&lt;br/&gt;
        Apellido
        &lt;input type="text" id="apellido" name="apellido" /&gt;&lt;br/&gt;
        &lt;input type="reset" /&gt;
        &lt;input type="submit" id="enviar" name="enviar" value="enviar" /&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            Nombre
                            <input type="text" id="name" name="name" /><br/>
                            Apellido
                            <input type="text" id="apellido" name="apellido" /><br/>
                            <input type="reset" />
                            <input type="submit" id="enviar" name="enviar" value="enviar" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo Radio</h3>
                    <p>
                        Permite seleccionar solo una opción entre múltiples opciones.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs.php" method="post" &gt;
        Nombre
        &lt;input type="text" id="name" name="name" /&gt;&lt;br/&gt;
        Apellido
        &lt;input type="text" id="apellido" name="apellido" /&gt;&lt;br/&gt;
        &lt;input type="reset" /&gt;
        &lt;input type="submit" id="enviar" name="enviar" value="enviar" /&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            <input type="radio" name="genero" value="femenino" />Mujer <br/>
                            <input type="radio" name="genero" value="masculino" />Hombre <br/>
                            <input type="radio" name="genero" value="otro" />Otro <br/>
                            <input type="submit" id="enviar" name="enviar" value="enviar" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo Checkbox</h3>
                    <p>
                        Permite seleccionar solo una opción entre múltiples opciones.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
&lt;form action="inputs.php" method="post" &gt;
    Qué deporte practicas: &lt;br/&gt;
    &lt;input type="checkbox" name="deporte[]" value="ciclismo" /&gt; Ciclismo &lt;br/&gt;
    &lt;input type="checkbox" name="deporte[]" value="futbol" /&gt; Futbol &lt;br/&gt;
    &lt;input type="checkbox" name="deporte[]" value="baloncesto" /&gt; Baloncesto &lt;br/&gt;
    &lt;input type="submit" id="enviar" name="enviar" value="enviar" /&gt;
&lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            Qué deporte practicas: <br/>
                            <input type="checkbox" name="deporte[]" value="ciclismo" />Ciclismo <br/>
                            <input type="checkbox" name="deporte[]" value="futbol" />Futbol <br/>
                            <input type="checkbox" name="deporte[]" value="baloncesto" />Baloncesto <br/>
                            <input type="submit" id="enviar" name="enviar" value="enviar" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Input tipo button</h3>
                    <p>
                        Permite convertir un input en un botón.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
&lt;input type="button" id="boton" name="boton" value="Clic aquí" onclick="alert('Hola!!!')" /&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <input type="button" id="boton" value="Clic aquí" onclick="alert('Hola!!!')" />
                    </div>
                    <hr/>
                </div>
            </section>
        </div>
    </div>
</div>