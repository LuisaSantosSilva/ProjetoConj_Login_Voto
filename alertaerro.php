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
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                </li>
                                <!-- Link da barra de Navegação -->
                                <li class="nav-item">
                                <a class="nav-link"  href="indexLogin.php">Login</a>
                                </li>
                                 <!-- Link da barra de Navegação -->
                                <li class="nav-item">
                                <a class="nav-link" href="alertaerro.php">Vote</a>
                                </li>
                                <!-- Link da barra de Navegação -->
                                <li class="nav-item">
                                <a class="nav-link" href="alertaerro.php">Resultados</a>
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


                 <!-- Colunas para espaços responsivos na página -->
                <div class="container text-center">
                <div class="row">
                <div class="col">
                &nbsp;
                </div>

                <div class="col">
                    <br>
                    <div class="alert alert-danger" role="alert">
                    Você Precisa fazer o login para acessar essa página!
                    </div>

                    <br>
                    <!-- Botão Para Voltar a Tela Home: -->
                    <a href = "index.php" class="btn btn-outline-danger">Voltar para a tela inicial</a>
                    <br>
                </div>

                <div class="col">
                &nbsp;
                </div>
                </div>
                </div>
              
            </div>


            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div> 


</body>
</html>