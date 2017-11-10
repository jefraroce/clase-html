<div class="pagina">
    <div class="contenido">
        <div style="margin: 50px;">
            <h1 class="title-pages">
                Formularios
            </h1>
            <section>
                <div>
                    <h2 class="sub-title">Elementos HTML</h2>
                    <h3>Input</h3>
                    <p>
                        El elemento <strong>input</strong> es el más importante, ya que se puede mostrar de diferentes maneras, solo se debe cambiar el valor del atributo tipo.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        &lt;input type="text" id="input_text" name="input_text"/&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            <input type="text" id="input_text" name="input_text" />
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Textarea</h3>
                    <p>
                        El elemento <strong>textarea</strong> permite agregar un campo de varias líneas.
                    </p>
                    <ul>
                        <li><b>rows:</b> Permite especificar el número de filas visibles del textarea.</li>
                        <li><b>cols:</b> Permite especificar el ancho del textarea.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        &lt;textarea id="textarea" rows="5" cols="20" &gt;&lt;/textarea&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            <textarea id="textarea" rows="5" cols="20" ></textarea>
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Select</h3>
                    <p>
                        El elemento <strong>select</strong> permite agregar una lista desplegable, solo se puede seleccionar una opción.
                    </p>
                    <ul>
                        <li><b>option:</b> Permite agregar una opción a la lista.</li>
                        <li><b>selected:</b> Permite preseleccionar la opción donde se agregue este atributo.</li>
                        <li><b>size:</b> Permite especificar el número de valores visibles.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        &lt;select name="selector"&gt;
            &lt;option value="1"&gt;Primera opción&lt;/option&gt;
            &lt;option value="2" selected &gt;Segunda opción&lt;/option&gt;
            &lt;option value="3"&gt;Tercera opción&lt;/option&gt;
        &lt;/select&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            <select name="selector" >
                                <option value="1">Primera opción</option>
                                <option value="2" selected>Segunda opción</option>
                                <option value="3">Tercera opción</option>
                            </select>
                        </form>
                    </div>
                    <hr/>
                    <p>
                        El elemento <strong>select</strong> también puede representar una lista en la cual se puede seleccionar varias opciones.
                    </p>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form action="inputs_html5.php" method="post" &gt;
        &lt;select name="selector"&gt;
            &lt;option value="1"&gt;Primera opción&lt;/option&gt;
            &lt;option value="2" selected &gt;Segunda opción&lt;/option&gt;
            &lt;option value="3"&gt;Tercera opción&lt;/option&gt;
        &lt;/select&gt;
    &lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form action="inputs.php" method="post" >
                            <select name="selector" multiple >
                                <option value="1">Primera opción</option>
                                <option value="2">Segunda opción</option>
                                <option value="3">Tercera opción</option>
                            </select>
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Button</h3>
                    <p>
                        El elemento <strong>button</strong> permite agregar un botón.
                    </p>
                    <ul>
                        <li><b>rows:</b> Permite especificar el número de filas visibles del textarea.</li>
                        <li><b>cols:</b> Permite especificar el ancho del textarea.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;button type="button" onclick="alert('Hola!!!');" &gt;Hola&lt;/button&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <button type="button" onclick="alert('Hola!!!');" >Hola</button>
                    </div>
                    <hr/>
                </div>
            </section>
            <section>
                <h2 class="sub-title">Elementos HTML5</h2>
                <div>
                    <h3>Datalist</h3>
                    <p>
                        El elemento <strong>datalist</strong> permite agregar una lista predefinida para un elemento input.
                    </p>
                    <ul>
                        <li>A medida que se ingresan los datos, se mostrará las opciones predefinidas.</li>
                        <li>El atributo <b>list</b> del input debe ser igual al atributo <b>id</b> del datalist. </li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;input list="colores"&gt;
    &lt;datalist id="colores"&gt;
        &lt;option value="Azul"&gt;
        &lt;option value="Amarillo"&gt;
        &lt;option value="Negro"&gt;
        &lt;option value="Rojo"&gt;
    &lt;/datalist&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <input list="colores">
                        <datalist id="colores">
                            <option value="Azul">
                            <option value="Amarillo">
                            <option value="Negro">
                            <option value="Rojo">
                        </datalist>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Output</h3>
                    <p>
                        El elemento <strong>output</strong> representa el resultado de un calculo.
                    </p>
                    <b>Atributo oninput:</b>
                    <ul>
                        <li>Este atributo ejecuta una función JavaScript cuando se cambia el valor del input.</li>
                        <li>Este atributo se activa cuando se escribe o cambia el valor del input.</li>
                        <li>Se puede usar en los elementos de <b>texarea</b> e <b>input</b>.</li>
                    </ul>
                    <b>Atributo for</b>
                    <ul>
                        <li>Debe contener una lista de los ids que van a afectar el calculo.</li>
                        <li>Los ids se debe separar por espacios.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;form&gt;
        0
        &lt;input type="range"  id="numero_1" name="numero_1" value="50"&gt;
        100 +
        &lt;input type="number" id="numero_2" name="numero_2" value="50"&gt;
        =
        &lt;output name="x" for="numero_1 numero_2"&gt;&lt;/output&gt;
    &lt;/form> 
                                </code>
                        </pre>
                    </div>
                    <div>
                         <form>
                            0
                            <input type="range"  id="numero_1" name="numero_1" value="50" oninput="total.value=parseInt(numero_1.value)+parseInt(numero_2.value)">
                            100 +
                            <input type="number" id="numero_2" name="numero_2" value="50">
                            =
                            <output name="total" for="numero_1 numero_2"></output>
                          </form> 
                    </div>
                    <hr/>
                </div>
            </section>
        </div>
    </div>
</div>