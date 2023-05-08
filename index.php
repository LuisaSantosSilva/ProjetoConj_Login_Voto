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
                                <!-- Link da barra de Navegação-->
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <!-- Link da barra de Navegação-->
                                <li class="nav-item">
                                <a class="nav-link" href="indexLogin.php">Login</a>
                                </li>
                                 <!-- Link da barra de Navegação-->
                                <li class="nav-item">
                                <a class="nav-link" href="alertaerro.php">Vote</a>
                                </li>
                                <!-- Link da barra de Navegação-->
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
            <!-- Cor do Fundo da página e edição de texto -->
            <div class="col bg-white p-4">
                
                <!-- Título e subtítulo da página -->
                <p class="text-start fs-5"><strong>Seja Bem Vindo(a)</strong></p>
                <p class="text-start fs-6">Feito com o objetivo de votação entre as plataformas de streaming a seguir:</p>
                <br>

                <!-- Fotos e descrições das plataformas de streaming -->
                <div class="container text-center">
                <div class="row">
                <div class="col">

                <div class="card" style="width: 18rem;">
                <img src="_img/Disney+.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Disney+</h5>
                <p class="card-text">O Streaming que reúne no catálogo produções da Disney, Pixar, Marvel, Star Wars e National Geographic.</p>
                <a href="indexLogin.php" class="btn btn-outline-primary">Quero Votar</a>
                </div>
                </div>

                </div>
                <div class="col">

                <div class="card" style="width: 18rem;">
                <img src="_img/PrimeVideo.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Prime Video</h5>
                <p class="card-text">Reality shows, filmes, séries e documentários de sucesso dignos de maratona.</p>
                <a href="indexLogin.php" class="btn btn-outline-primary">Quero Votar</a>
                </div>
                </div>

                </div>
                <div class="col">

                <div class="card" style="width: 18rem;">
                <img src="_img/Netflix.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Netflix</h5>
                <p class="card-text">O Streaming que oferece uma ampla variedade de séries, filmes e documentários premiados.</p>
                <a href="indexLogin.php" class="btn btn-outline-primary">Quero Votar</a>
                </div>
                </div>

                </div>
                </div>
                </div>

                <br>

                <!-- Rodapé da página -->
                <hr>

                <footer class="container text-center"  id="rodape">
                    <p><b> Todos direitos reservados a Luisa Santos - 2023</b></p>
                </footer>

                </div>


            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div> 

</body>
</html>