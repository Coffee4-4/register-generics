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

<header><?php include ("../html/navbar.php")?></header>

<main>
    <section id="titulo" class="row container-fluid ">

        <h1 class="text-center fonte-titulo cor-especial pt-5">Seja Bem-vindo!</h1>
        <p class="text-center text-secondary pb-5">Aqui estão os modulos disponiveis: </p>
    </section>

    <nav>
        <section class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-cadastrar-tab" data-bs-toggle="tab" data-bs-target="#nav-cadastrar" type="button" role="tab" aria-controls="nav-cadastrar" aria-selected="true">Cadastrar</button>
            <button class="nav-link" id="nav-listar-tab" data-bs-toggle="tab" data-bs-target="#nav-listar" type="button" role="tab" aria-controls="nav-listar" aria-selected="false">Permissões</button>
            <button class="nav-link" id="nav-alterar-tab" data-bs-toggle="tab" data-bs-target="#nav-alterar" type="button" role="tab" aria-controls="nav-alterar" aria-selected="false">Alterar</button>
        </section>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-cadastrar" role="tabpanel" aria-labelledby="nav-cadastrar-tab">

            <form class="row col-md-12 p-3 form_usuario" action="gravar_usuario.php" method="POST" >
                <div class="resposta"></div>
                <div class="col-md-12">
                    <label for="nome" class="form-label ">Nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                 <div class="col-md-12">
                    <label for="nome" class="form-label ">Login:</label>
                    <input type="text" name="login" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="nome" class="form-label ">Senha:</label>
                    <input type="password" name="senha" class="form-control">
                </div>

                <div class="col-12 m-3 d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Limpar</button>
                    <button type="submit" class="btn btn-primary btn-usuario">Cadastrar</button>
                </div>
            </form>

            <div class="modal"></div>

        </div>
        <div class="tab-pane fade" id="nav-listar" role="tabpanel" aria-labelledby="nav-listar-tab">

            <form class="row col-md-12 p-3 form_permissao" action="gravar_permissao.php" method="POST" >
                <div class="resposta"></div>

                <div class="col-md-4">
                    <label for="cidade" class="form-label">Usuário:</label>
                    <select id="cidade" class="form-select text-capitalize" name="idUsuario">
                        <?php
                        $lista_cidades = LerRegistro('usuarios');
                        foreach ($lista_cidades as $chave => $valor) { ?>
                            <option value="<?= $valor['codigo']?>"> <?= $valor['nome']?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="cidade" class="form-label">Modulo:</label>
                    <select id="cidade" class="form-select text-capitalize" name="idModulo">
                        <?php
                        $lista_cidades = LerRegistro('modulos');
                        foreach ($lista_cidades as $chave => $valor) { ?>
                            <option value="<?= $valor['idModulo']?>"> <?= $valor['nomeModulo']?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12 m-3 d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Limpar</button>
                    <button type="submit" class="btn btn-primary btn-permissao">Cadastrar</button>
                </div>
            </form>
            <div class="modal"></div>


    </div>
    <div class="tab-pane fade" id="nav-alterar" role="tabpanel" aria-labelledby="nav-alterar-tab">3</div>
    </div>




</main>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"><?php include ("../html/footer.php")?></footer>




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



