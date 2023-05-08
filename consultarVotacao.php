<!DOCTYPE html>
<html lang="en">

<!-- Cabeçalho do código HTML -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Titúlo da página -->
    <title>Login e Votação</title>
</head>

<!-- Edição do corpo do código HTML, Coloração do Fundo da página e edição da posição do texto  -->
<body style="background-color:rgb(0, 71, 171)">
    <div class="container text-center">
        <!-- Linha e Coluna criada para página responsiva -->
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <!-- Barra de Navegação: -->
            <div class="col" style="background-color:rgba(48, 48, 48, 0.5)" >
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <!-- Barra de Navegação com o nome SISTEMA WEB -->
                        <!-- OBS: navbar-brand para o nome de seu projeto, produto ou companhia -->
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- OBS: navbar-nav para obter uma leve navegação com suporte a dropdowns -->
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Link da barra de Navegação -->
                                <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <!-- Link da barra de Navegação -->
                                <li class="nav-item">
                                <a class="nav-link" href="indexLogin.php">Login</a>
                                </li>
                                <!-- Link da barra de Navegação -->
                                <li class="nav-item">
                                <a class="nav-link" href="indexVotacao.php">Vote</a>
                                </li>
                                 <!-- Link da barra de Navegação -->
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Resultados</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>

        <!-- Linha e coluna criada para página responsiva -->
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <!-- Cor do Fundo da página e edição de texto-->
            <div class="col bg-white p-4">
                
                <!-- Titúlo e subtitúlo do formulário: -->
                <p class="text-start fs-5"><strong>Sistema de Votação</strong></p>
                <p class="fs-6">
                    
                    <!-- Código php: -->
                    <?php
                

                    if(isset ($_POST['opcao'])){//caso tenha preenchido uma dos campos de votação

                        // Obtém a opção selecionada
                        $opcao = $_POST['opcao'];

                        // Lê o arquivo de resultados
                        $arquivo = 'arquivoVotacao.txt';
                        $result = file($arquivo, FILE_IGNORE_NEW_LINES);

                        // incrementação caso for uma das opções existentes
                        switch ($opcao) {
                        case 'Disney+':
                        $result[0]++;
                        break;
                        case 'Prime Video':
                        $result[1]++;
                        break;
                        case 'Netflix':
                        $result[2]++;
                        break;
                        }

                        // Grava os resultados  no arquivo
                        file_put_contents($arquivo, implode("\n", $result));

                        // Lê o arquivo de resultados  para exibir os resultados atualizados
                        $result = file('arquivoVotacao.txt', FILE_IGNORE_NEW_LINES);
                       

                        for ($i = 0; $i < count($result); $i++) {
                            //exibindo os resultados
                            echo "Opção ".($i+1).": ".$result[$i]." votos" . "<br>";
                        }
                        
                       //mostrando qual opção onde foi contabilizado o voto
                        if($_POST['opcao'] == 'Disney+'){
                            echo "<br>"."<h4> Você votou na(o): ". $_POST['opcao'] . ": opção 1 <h4>" ;
                        } if($_POST['opcao'] == 'Prime Video'){
                            echo "<br>"."<h4> Você votou na(o): ". $_POST['opcao'] . ": opção 2 <h4>" ;
                        }if($_POST['opcao'] == 'Netflix'){
                            echo "<br>"."<h4> Você votou na(o): ". $_POST['opcao'] . ": opção 3 <h4>" ;
                        }
                        
                    }else{//caso não tenha preenchido um dos campos de votação
                        echo "Você não votou em nenhuma das opções";
                    }
                        
                    ?> 
                
                </p>
                <br>
                <!-- Botão: -->
                <a href = "indexVotacao.php" class="btn btn-success">Votar Novamente</a>
                &nbsp;
                <a href = "index.php" class="btn btn-danger">Sair</a>
                
                    
            </div>
            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div> 
</body>
</html>