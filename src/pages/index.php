<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register & Generics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
<?php require_once '../areaRestrita/crud.php'; ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand p-3" href="#">Register & Generics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav p-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
                <button class="btn btn-outline-success m-3" data-bs-toggle="modal" data-bs-target="#modal-login" type="submit">Login</button>
            </div>
        </div>
    </nav>



</header>

<main>
    <section id="carouselExampleCaptions" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/bg-form.jpeg" class="d-block w-100 img-carrossel" alt="...">
                <div class="carousel-caption d-none d-md-block h-50">
                    <h1 class="fonte-titulo display-4">Faça parte da equipe!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/bg-form2.jpg" class="d-block w-100 img-carrossel" alt="...">
                <div class="carousel-caption d-none d-md-block h-50">
                    <h1 class="fonte-titulo display-4">Economize e ganhe em tempo!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/bg-form3.jpeg" class="d-block w-100 img-carrossel" alt="...">
                <div class="carousel-caption d-none d-md-block h-50">
                    <h1 class="fonte-titulo display-4">Register & Generics</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>


    <section id="titulo">

        <h1 class="text-center fonte-titulo cor-especial pt-5">CRUD: Create, Read, Update and Delete.</h1>
        <p class="text-center text-secondary pb-5">Um sistema simples e pratico para testar os conhecimentos da disciplina de Web II.</p>
    </section>



</main>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"><?php include("../html/footer.php") ?></footer>


<!-- Modal de LOGIN-->
<div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Faça seu Login!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form method="post" action="controle.php" name="login">
                    <div class="resposta"></div>
                    <div class="mb-3 ">
                        <label for="login" class="form-label">Login:</label>
                        <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp" placeholder="Seu Usuário, aqui! :)">
                        <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém!</div>
                    </div>
                    <div class="mb-3">
                        <label for="login" class="form-label">Password</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha aqui ...">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary logar">Entrar</button>
                </div>
                </form>

            </div>

        </div>
    </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="../js/jquery-3.6.0.js"></script>
<script src="../js/principal.js"></script>
<script src="../js/all.js"></script>
<script src="../js/main.js"></script>

</body>
</html>