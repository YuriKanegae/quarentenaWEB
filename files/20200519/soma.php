<!DOCTYPE html>
<html lang = "pt=br">
    <head>
        <meta charset = "UTF-8" />
        <title>Lista de Atividades na quarentena</title>

        <script>
            function calcular(){
                var numero1 = parseInt(document.getElementById('number1').value);
                var numero2 = parseInt(document.getElementById('number2').value);

                document.getElementById('result').value = numero1+numero2;
            }

            function limpar(){
                document.getElementById('number1').value = "";
                document.getElementById('number2').value = "";
                document.getElementById('result').value = "";
            }
        </script>
    </head>

    <body>
        <form>
            <input type = "number" id = "number1"/>
            +
            <input type = "number" id = "number2"/>
            =
            <input type = "number" id = "result"/>
        </form><br/>

        <button onclick = "calcular()">Calcular</button>
        <button onclick = "limpar()">Limpar</button>
    </body>
</html>
