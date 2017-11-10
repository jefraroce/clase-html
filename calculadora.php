<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
            function numero(valor){
                if (valor === "="){
                    igual();
                }
                resultado = document.getElementById("resultado").value;
                document.getElementById("resultado").value = resultado + " " + valor;
            }
            
            function igual(){
                var signos = ["+", "-", "/", "*"];
                resultado = document.getElementById("resultado").value;
                var array = resultado.split(" ") ;
                console.info(array);
                for (var i = 1; i <= array.length; i++){
                    if (isNaN(array[i])){
                        
                    }else{
                        
                    }
                    console.info(array[i]);
                    console.info(signos.indexOf(array[i]));
                }
                
                
            }
        </script>
    </head>
    <body>
        <form id="calculadora">
            <table>
                <tr>
                    <td colspan="3">
                        <input type="text" id="resultado" name="resultado" readonly />
                    </td>
                </tr>
                <tr>
                    <td><button onclick="numero(1)">1</button> </td>
                    <td><input type="text" id="dos" name="dos" value="2" onclick="numero(this.value)" readonly size="1"></td>
                    <td><input type="text" id="tres" name="tres" value="3" onclick="numero(this.value)" readonly size="1"></td>
                </tr>
                <tr>
                    <td><input type="text" id="cuatro" name="cuatro" value="4" onclick="numero(this.value)" readonly size="1"></td>
                    <td><input type="text" id="cinco" name="cinco" value="5" onclick="numero(this.value)" readonly size="1"></td>
                    <td><input type="text" id="seis" name="seis" value="6" onclick="numero(this.value)" readonly size="1"></td>
                </tr>
                <tr>
                    <td><input type="text" id="siete" name="siete" value="7" onclick="numero(this.value)" readonly size="1"></td>
                    <td><input type="text" id="ocho" name="ocho" value="8" onclick="numero(this.value)" readonly size="1"></td>
                    <td><input type="text" id="nueve" name="nueve" value="9" onclick="numero(this.value)" readonly size="1"></td>
                </tr>
                <tr>
                    <td><input type="text" id="suma" name="suma" value="+" onclick="numero(this.value)" readonly size="1"></td>
                    <td><input type="text" id="resta" name="resta" value="-" onclick="numero(this.value)" readonly size="1"></td>
                    <td><input type="text" id="division" name="division" value="%" onclick="numero(this.value)" readonly size="1"></td>
                </tr>
                <tr>
                    <td><input type="text" id="multi" name="multi" value="*" onclick="numero(this.value)" readonly size="1"></td>
                    <td><input type="text" id="igual" name="igual" value="=" onclick="numero(this.value);" readonly size="1"></td>
                    <td><input type="reset" id="resta"></td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>

