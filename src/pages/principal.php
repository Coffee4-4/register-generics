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


    <link rel="stylesheet" href="../css/global.css">
</head>
<body>

<?php require_once '../areaRestrita/crud.php'; ?>

<header><?php include("../html/navbar.php") ?></header>

<main>
    <div class="row container-fluid  " style="max-width: 640px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="fotos/<?= $_SESSION['usuario']['foto']; ?>" class="img-fluid rounded-start" alt="..." ;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-capitalize">Seja Bem-vindo, <?= $_SESSION['usuario']['nome'] ?>!</h5>
                    <p class="card-text">Aqui estão os modulos disponiveis:</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    </section>
    <section class="container-fluid bg-light" id="">
        <div class="row justify-content-center">
            <?php
            switch ($_SESSION['modulo']['idModulo']) {
                case 1:
                    ?>
                    <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4 ">
                        <img src="../img/people-icon.png" class="card-img-top card-imagem"
                             alt="icone do cadastro de pessoas">
                        <div class="card-body">
                            <h5 class="card-title">Módulo: Pessoas</h5>
                            <p class="card-text">Faça o cadastro de novas pessoas, liste, altere e delete com
                                moderação ;)</p>
                            <a href="cadastro_pessoa.php" class="btn btn-primary d-grid">Acessar</a>
                        </div>
                    </article>
                    <?php
                    break;
                case 2:
                    ?>

                    <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4 ">
                        <img src="../img/user-icon.png" class="card-img-top card-imagem"
                             alt="icone do cadastro de pessoas">
                        <div class="card-body">
                            <h5 class="card-title">Módulo: Usuários</h5>
                            <p class="card-text">Faça o cadastro de novos usuários, liste, altere e delete com
                                moderação ;)</p>
                            <a href="cadastro_usuario.php" class="btn btn-primary d-grid">Acessar</a>
                        </div>
                    </article>
                    <?php
                    break;
                case 3:
                    ?>

                    <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4">
                        <img src="../img/city-icon.png" class="card-img-top card-imagem"
                             alt="icone do cadastro de cidades">
                        <div class="card-body">
                            <h5 class="card-title">Módulo: Cidades</h5>
                            <p class="card-text">Faça o cadastro de novas Cidades, liste, altere e delete com moderação
                                ;)</p>
                            <a href="cadastro_cidade.php" class="btn btn-primary d-grid">Acessar</a>
                        </div>
                    </article>
                    <?php
                    break;
                case 4:
                    ?>
                    <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4">
                        <img src="../img/bairro-icon.png" class="card-img-top card-imagem"
                             alt="icone do cadastro de bairros">
                        <div class="card-body">
                            <h5 class="card-title">Módulo: Bairros</h5>
                            <p class="card-text">Faça o cadastro de novos Bairros, liste, altere e delete com moderação
                                ;)</p>
                            <a href="castro_bairro.php" class="btn btn-primary d-grid">Acessar</a>
                        </div>
                    </article>
                    <?php
                    break;
                case 5:
                    ?>

                    <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4 ">
                        <img src="../img/people-icon.png" class="card-img-top card-imagem"
                             alt="icone do cadastro de pessoas">
                        <div class="card-body">
                            <h5 class="card-title">Módulo: Pessoas</h5>
                            <p class="card-text">Faça o cadastro de novas pessoas, liste, altere e delete com
                                moderação ;)</p>
                            <a href="cadastro_pessoa.php" class="btn btn-primary d-grid">Acessar</a>
                        </div>
                    </article>
                    <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4 ">
                        <img src="../img/user-icon.png" class="card-img-top card-imagem"
                             alt="icone do cadastro de pessoas">
                        <div class="card-body">
                            <h5 class="card-title">Módulo: Usuários</h5>
                            <p class="card-text">Faça o cadastro de novos usuários, liste, altere e delete com
                                moderação ;)</p>
                            <a href="cadastro_usuario.php" class="btn btn-primary d-grid">Acessar</a>
                        </div>
                    </article>
                    <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4">
                        <img src="../img/city-icon.png" class="card-img-top card-imagem"
                             alt="icone do cadastro de cidades">
                        <div class="card-body">
                            <h5 class="card-title">Módulo: Cidades</h5>
                            <p class="card-text">Faça o cadastro de novas Cidades, liste, altere e delete com moderação
                                ;)</p>
                            <a href="cadastro_cidade.php" class="btn btn-primary d-grid">Acessar</a>
                        </div>
                    </article>
                    <article class="card borda-cor-especial card-largura p-1 m-4 col-12 col-md-4">
                        <img src="../img/bairro-icon.png" class="card-img-top card-imagem"
                             alt="icone do cadastro de bairros">
                        <div class="card-body">
                            <h5 class="card-title">Módulo: Bairros</h5>
                            <p class="card-text">Faça o cadastro de novos Bairros, liste, altere e delete com moderação
                                ;)</p>
                            <a href="castro_bairro.php" class="btn btn-primary d-grid">Acessar</a>
                        </div>
                    </article>
                    <?php
                    break;
            }
            ?>


        </div>
    </section>


</main>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <i class="fas fa-coffee" width="30" height="24"></i>
        </a>
        <span class="text-muted">Feito com <i class="fas fa-coffee"></i> & <i class="fas fa-heart"></i></span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li><a href="#"><i class="ms-3 text-muted  fab fa-github" width="24" height="24"></a></i></li>
        <li><a href="#"><i class="ms-3 text-muted  fab fa-facebook" width="24" height="24"></i></a></li>
        <li><a href="#"><i class="ms-3 text-muted bi fab fa-instagram" width="24" height="24"></i></li>
        </a>
    </ul>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="../js/jquery-3.6.0.js"></script>
<script src="../js/jquery.form.js"></script>
<script src="../js/principal.js"></script>
<script src="../js/all.js"></script>
<script src="../js/main.js"></script>
<script src="../js/sweetalert2.all.js"></script>

</body>
</html>