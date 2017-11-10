<div class="pagina">
    <div class="contenido">
        <div style="margin: 50px;">
            <h1 class="title-pages">
                Formularios
            </h1>
            <section>
                <div>
                    <h2 class="sub-title">Atributos elementos</h2>
                    <h3>Value</h3>
                    <p>
                        El atributo <strong>value</strong> permite asignar un valor inicial para un input.
                    </p>
                    <ul>
                        <li>Este atributo se usa en los elementos <b>button</b>, <b>input</b>, <b>option</b>.</li>
                        <li>En los elementos <b>input</b> este valor se puede modificar, en los otrs elementos no.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;input type="text" value="Valor del input" /&gt;
    &lt;hr/&gt;
    &lt;select name="select" &gt;
        &lt;option value="1"&gt;Uno&lt;/option&gt;
        &lt;option value="2"&gt;Dos&lt;/option&gt;
        &lt;option value="3"&gt;Tres&lt;/option&gt;
    &lt;/select&gt;
    &lt;hr/&gt;
    &lt;button value="boton"&gt;Botón&lt;/button&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <input type="text" value="Valor del input" />
                        <hr/>
                        <select name="select" >
                            <option value="1">Uno</option>
                            <option value="2">Dos</option>
                            <option value="3">Tres</option>
                        </select>
                        <hr/>
                        <button value="boton">Botón</button>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Readonly</h3>
                    <p>
                        El atributo <strong>readonly</strong> indica que el elemento solo es de lectura.
                    </p>
                    <ul>
                        <li>Este atributo se usa en los elementos <b>input</b>, <b>textarea</b>.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;input type="text" value="Valor del input" readonly /&gt;
    &lt;hr/&gt;
    &lt;textarea name="textarea" readonly &gt;Valor del textarea.&lt;/textarea&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <input type="text" value="Valor del input" readonly />
                        <hr/>
                        <textarea name="textarea" readonly >Valor del textarea.</textarea>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Disabled</h3>
                    <p>
                        El atributo <strong>disabled</strong> indica que el elemento esta deshabilitado.
                    </p>
                    <ul>
                        <li>Este atributo se usa en los elementos <b>input</b>, <b>textarea</b>, <b>button</b>, <b>option</b>, <b>select</b>, <b>textarea</b>.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;input type="text" value="Valor del input" disabled /&gt;
    &lt;hr/&gt;
    &lt;select name="select" disabled &gt;
        &lt;option value="1"&gt;Uno&lt;/option&gt;
        &lt;option value="2"&gt;Dos&lt;/option&gt;
        &lt;option value="3"&gt;Tres&lt;/option&gt;
    &lt;/select&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <input type="text" value="Valor del input" disabled />
                        <hr/>
                        <select name="select" disabled >
                            <option value="1">Uno</option>
                            <option value="2">Dos</option>
                            <option value="3">Tres</option>
                        </select>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Size</h3>
                    <p>
                        El atributo <strong>size</strong> indica el tamaño de caracteres para un elemento, si el elemento es select entonces especifica el número de valores visibles.
                    </p>
                    <ul>
                        <li>Este atributo se usa en los elementos <b>input</b>, <b>select</b>.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;input type="text" value="Valor del input" size="5" /&gt;
    &lt;hr/&gt;
    &lt;select name="select" size="2" &gt;
        &lt;option value="1"&gt;Uno&lt;/option&gt;
        &lt;option value="2"&gt;Dos&lt;/option&gt;
        &lt;option value="3"&gt;Tres&lt;/option&gt;
    &lt;/select&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form>
                            <input type="text" value="Valor del input" size="5" />
                            <input type="submit" value="we"  >
                        </form>
                        
                        <hr/>
                        <select name="select" size="2" >
                            <option value="1">Uno</option>
                            <option value="2">Dos</option>
                            <option value="3">Tres</option>
                        </select>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Maxlength</h3>
                    <p>
                        El atributo <strong>maxlength</strong> la longitud máxima permitida para el elemento
                    </p>
                    <ul>
                        <li>Este atributo se usa en los elementos <b>input</b>, <b>textarea</b>.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;input type="text" value="Valor del input" maxlength="15" /&gt;
    &lt;hr/&gt;
    &lt;textarea name="textarea" maxlength="20" &gt;Valor del textarea.&lt;/textarea&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <input type="text" value="Valor del input" maxlength="15" />
                        <hr/>
                        <textarea name="textarea" maxlength="20"  >Valor del textarea.</textarea>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Max y Min</h3>
                    <ul>
                        <li>El atributo <strong>max</strong> especifica el valor máximo que puede tener un input</li>
                        <li>El atributo <strong>min</strong> especifica el valor mínimo que puede tener un input</li>
                        <li>Se puede usar en los inputs tipo: <b>number</b>, <b>range</b>, <b>date</b>, <b>month</b>, </li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;input type="number" max="10" min="5" /&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <input type="number" max="10" min="5" />
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Placeholder</h3>
                    <p>
                        El atributo <strong>placeholder</strong> especifica una descripción del valor que espera el elemento.
                    </p>
                    <ul>
                        <li>Este atributo se usa en los elementos <b>input</b>, <b>textarea</b>.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
    &lt;input type="email" placeholder="email@email.com" /&gt;
    &lt;hr/&gt;
    &lt;textarea name="textarea" placeholder="Debe ingresar una descripción" &gt;&lt;/textarea&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <input type="email" placeholder="email@email.com" />
                        <hr/>
                        <textarea name="textarea" placeholder="Debe ingresar una descripción" ></textarea>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Required</h3>
                    <p>
                        El atributo <strong>required</strong> indica que el elemento debe tener un valor obligatoriamente.
                    </p>
                    <ul>
                        <li>Este atributo se usa en los elementos <b>input</b>, <b>textarea</b>, <b>select</b>.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
&lt;form&gt;                                  
    &lt;input type="email" placeholder="email@email.com" /&gt;
    &lt;hr/&gt;
    &lt;textarea name="textarea" placeholder="Debe ingresar una descripción" &gt;&lt;/textarea&gt;
    &lt;hr/&gt;
    &lt;input type="text" value="Valor del input" size="5" /&gt;
    &lt;hr/&gt;
    &lt;select name="select" size="2" required &gt;
        &lt;option value="1"&gt;Uno&lt;/option&gt;
        &lt;option value="2"&gt;Dos&lt;/option&gt;
        &lt;option value="3"&gt;Tres&lt;/option&gt;
    &lt;/select&gt;
    &lt;button&gt;Enviar&lt;/button&gt;
&lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                        <form>
                            <input type="email" placeholder="email@email.com" required />
                            <hr/>
                            <textarea name="textarea" placeholder="Debe ingresar una descripción" required ></textarea>
                            <hr/>
                            <select name="select" size="2" required >
                                <option value="1">Uno</option>
                                <option value="2">Dos</option>
                                <option value="3">Tres</option>
                            </select>
                            <button>Enviar</button>
                        </form>
                    </div>
                    <hr/>
                </div>
                <div>
                    <h3>Autocomplete</h3>
                    <p>
                        El atributo <strong>autocomplete</strong> indica si se puede autocompletar los valores por el navedagor, si el valor del atributo es <b>off</b> no se autocompleta, si el valor es <b>on</b> si lo hace.
                    </p>
                    <ul>
                        <li>Este atributo se usa en los elementos <b>form</b>, <b>input</b>.</li>
                    </ul>
                    <div>
                        <pre>
                                <code class="html">
&lt;form&gt;                                  
    &lt;input type="email" autocomplete="off" /&gt;
    &lt;button&gt;Enviar&lt;/button&gt;
&lt;/form&gt;
                                </code>
                        </pre>
                    </div>
                    <div>
                         <form>
                            <input type="email" name="email" autocomplete="on"><br>
                            <input type="submit" value="Enviar">
                          </form> 
                    </div>
                    <hr/>
                </div>
            </section>
        </div>
    </div>
</div>