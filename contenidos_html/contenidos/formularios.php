<div class="pagina">
    <div class="contenido">
        <div style="margin: 50px;">
            <section>
                <h1 class="title-pages">
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

                <h2 class="sub-title">Action</h2>
                <div>
                    Es la acción que se realizará al momento de dar clic en el botón <strong>Enviar</strong>
                </div>
                <div>
                    Normalmente, los datos se envían a una página del servidor al momento de hacer clic en el botón.
                </div>

                <hr/>

                <h2 class="sub-title">Method</h2>
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