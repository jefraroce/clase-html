<div class="pagina">
    <div class="contenido">
        <div style="margin: 50px;">
            <h1 style="background-color: #142b3b; text-align: center; color: white;">
                Atributos
            </h1>
            <ul>
                <li>Todos los elementos HTML pueden tener atributos.</li>
                <li>Se deben especificar en la etiqueta de inicio.</li>
                <li>Se escriben en pares: nombre="valor"</li>
            </ul>
            <section>
                <div>
                    <h3>Href</h3>
                    <div>
                        <p>
                            Dentro de este atributo se especifica el enlace donde redirecciona una etiqueta <b>&lt;a&gt;&lt;/a&gt;</b>
                        </p>
                        <pre>
                                <code class="html">
&lt;a href="http://www.google.com.co" &gt;
    Link Google.
&lt;/a&gt;
                                </code>
                        </pre>
                        <div>
                            <a href="http://www.google.com.co">Link Google</a>
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <h3>Src</h3>
                    <div>
                        <p>
                            Este atributo se puede utilizar en las etiquetas de imagen, video e iframe. <b>&lt;img /&gt;, &lt;iframe&gt;&lt;/iframe&gt;, &lt;video&gt;&lt;/video&gt;</b>
                        </p>
                        <pre><code class="html">&lt;img src="https://goo.gl/yVKDkR" alt="Imagen cara feliz" width="100" height="100" /&gt;</code></pre>
                        <div>
                            <img src="https://goo.gl/yVKDkR" alt="Imagen cara feliz" width="100" height="100" />
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <h3>Alt</h3>
                    <div>
                        <p>
                            Este atributo se usa en la etiqueta de imagen y representa un texto alternativo cuando la imagen no existe. <b>&lt;img /&gt;</b>
                        </p>
                        <pre><code class="html">&lt;img src="https://goo.gl/yVKDkRl" alt="Imagen cara feliz" width="100" height="100" /&gt;</code></pre>
                        <div>
                            <img src="https://goo.gl/yVKDkRl" alt="Imagen cara feliz" />
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <h3>Width y Height</h3>
                    <div>
                        <p>
                            <b>width:</b> Establece el ancho y <b>height:</b> Establece el alto para los elementos: <b>&lt;img /&gt;, &lt;iframe&gt;&lt;/iframe&gt;, &lt;video&gt;&lt;/video&gt;</b>
                        </p>
                        <pre><code class="html">&lt;img src="https://goo.gl/yVKDkR" alt="Imagen cara feliz" width="200" height="200" /&gt;</code></pre>
                        <div>
                            <img src="https://goo.gl/yVKDkR" alt="Imagen cara feliz" width="200" height="200" />
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <h3>Class</h3>
                    <div>
                        <p>
                            Permite crear un conjunto de etiquetas que forman parte del mismo grupo, este atributo es usado con CSS para aplicar estilos a elementos.
                        </p>
                        <pre>
                                <code class="html">
&lt;style type="text/css"&gt; 
    .parrafos{
        color: white;
        background-color: red;
        font-size: 20px;
    }
&lt;/style&gt;
                
&lt;p class="parrafos" &gt; Párrafo uno &lt;/p&gt;
&lt;p class="parrafos" &gt; Párrafo dos &lt;/p&gt;
&lt;p class="parrafos" &gt; Párrafo tres &lt;/p&gt;
                                </code>
                        </pre>
                        <div>
                            <p class="parrafos">Párrafo uno</p>
                            <p class="parrafos">Párrafo dos</p>
                            <p class="parrafos">Párrafo tres</p>
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <h3>Id</h3>
                    <div>
                        <p>
                            Permite agregar un nombre como identificador de un elemento, este identificador debe ser único para cada elemento.
                        </p>
                        <pre>
                                <code class="html">
&lt;style type="text/css"&gt; 
    #parrafo_uno{
        color: white;
        background-color: blue;
        font-size: 20px;
    }
&lt;/style&gt;
                
&lt;p id="parrafo_uno" &gt; Párrafo uno &lt;/p&gt;
&lt;p id="parrafo_dos" &gt; Párrafo dos &lt;/p&gt;
&lt;p id="parrafo_tres" &gt; Párrafo tres &lt;/p&gt;
                                </code>
                        </pre>
                        <div>
                            <p id="parrafo_uno">Párrafo uno</p>
                            <p id="parrafo_dos">Párrafo dos</p>
                            <p id="parrafo_tres">Párrafo tres</p>
                        </div>
                    </div>
                </div>
                <hr/>
            </section>
        </div>
    </div>
</div>