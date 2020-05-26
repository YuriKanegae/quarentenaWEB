<?php
    date_default_timezone_set('America/Sao_Paulo');

    function listaPastas($nomeDoCaminho, $nivel){
        $pasta = scandir($nomeDoCaminho);

        for($i = 0; $i < sizeof($pasta); $i++){
            if($pasta[$i] != '.' && $pasta[$i] != '..' && $pasta[$i] != '.git' && $pasta[$i] != 'css' && $pasta[$i] != 'js'){

                $caminho = $nomeDoCaminho . '/' . $pasta[$i];

                $tab = $nivel * 2;
                if(is_dir($caminho)){
                    echo '
                    <tr class = "table-active">
                        <td scope = "col" class = "pl-' .$tab. '">
                            <a href = "' .$caminho. '">' .$pasta[$i]. '</a>
                        </td>
                        <td>
                            ' .date ("F d Y", filemtime($caminho)). '
                        </td>
                    </tr>
                    ';
                }else{
                    echo '
                    <tr>
                        <td scope = "col" class = "pl-' .$tab. '">
                            <a href = "' .$caminho. '">' .$pasta[$i]. '</a>
                        </td>
                        <td>
                            ' .date ("F d Y", filemtime($caminho)). '
                        </td>
                    </tr>
                    ';
                }

                if(is_dir($caminho)){
                    listaPastas($caminho, $nivel+1);
                }

            }
        }
    }
?>

<!DOCTYPE html>
<html lang = "pt=br">
    <head>
        <meta charset = "UTF-8" />
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css" />

        <title>Lista de Atividades na quarentena</title>

        <style>
            .tabela_0{
                height: 30px;
            }
            .tabela_1{
                padding-left: 20px;
            }
            .tabela_2{
                padding-left: 40px;
            }
        </style>
    </head>

    <body>
        <div class = "container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style = "margin-bottom: 30px;">
                <span class = "navbar-brand mb-0 h1">Yuri Kanegae</span>
                <a class="nav-link" href="https://github.com/YuriKanegae">GIT</a>
                <p class="nav-link">Prontuário: 1890794</p>
				<a href = "https://arq.ifsp.edu.br/portal/" class = "nav-link">Campos Araraquara</a>
            </nav>


            <table class = "tablr table striped">
                <thead class = "thead-dark">
                    <tr>
                        <th scope = "col">Nome</th>
                        <th scope = "col">Data de criação/atualização</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        listaPastas('.', 0);
                    ?>
                </tbody>
            </table>
    </div>

        <script src = "js/jquery-3.2.1.min.js"></script>
        <script src = "js/popper.min.js"></script>
        <script src = "js/bootstrap.min.js"></script>
    </body>
</html>
