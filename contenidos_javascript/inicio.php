<div class="pagina">
    <div class="contenido">
        <div style="margin: 50px;">
            <h1 class="title-pages">Que es JavaScript</h1>
            <div>
                <p>
                    JavaScript es el lenguaje de programación que se utiliza principalmente para crear páginas web dinámicas.
                </p>
                <p>
                    Una página web dinámica es aquella que agrega efectos, animaciones, acciones que se activan al pulsar un botón.
                </p>
                <p>
                    JavaScript es un lenguaje interpretado, ósea que no necesita ser compilado para que se pueda ejecutar, en otras palabras, los programas JavaScript se pueden probar directamente en un navegador.
                </p>
                <p>
                    JavaScript puede cambiar el comtenido de un elemento HTML, esto se puede realizar con un elemento llamado <strong>getElemenyById()</strong> el cual optiene el elemento con el id indicado:
                </p>
                <div>
                    <pre>
                            <code class="html">
&lt;p id="cambio_mensaje"&gt;Este es un mensaje &lt;/p&gt;
&lt;button type="button" onclick="document.getElementById('cambio_mensaje').innerHTML = 'Hola amigos!!!'" &gt;Haz Click!!!&lt;/button&gt;
                            </code>
                    </pre>
                </div>
                <div>
                    <p id="cambio_mensaje">Este es un mensaje </p>
                    <button type="button" onclick="document.getElementById('cambio_mensaje').innerHTML = 'Hola amigos!!!'" >Haz Click!!!</button>
                </div>
                <hr/>
                <p>
                    Se puede agregar código Javascript en un archivo html o también se puede agregar llamando a un archivo javascript externo, los documentos JavaScript tiene la extensión .js.
                </p>
                <p>
                    El código JavaScript se puede agregar por medio de la etiqueta: <strong>&lt;script&gt;&lt;/script&gt;</strong>. El código JavaScript se puede agregar en el <strong>&lt;head&gt;&lt;/head&gt;</strong> o en el <strong>&lt;body&gt;&lt;/body&gt;</strong>
                </p>
                <h3>Codigó JavaScript en un documento HTML</h3>
                <div>
                    <pre>
                            <code class="html">
&lt;head&gt;
    &lt;script&gt;
        alert("Hola");
    &lt;/script&gt;
&lt;/head&gt;
                            </code>
                    </pre>
                </div>
                <hr/>
                <h3>Llamar un archivo JS desde HTML</h3>
                <div>
                    <pre>
                            <code class="html">
&lt;head&gt;
    &lt;script src="nombre_archivo.js" &gt;&lt;/script&gt;
&lt;/head&gt;
                            </code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>