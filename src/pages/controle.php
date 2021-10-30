<?php
session_start();
require_once "../areaRestrita/crud.php";

switch ($_POST['acao']) {
    case 'gravar_bairro':
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];


        if ($nome == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nome não pode ser vazio!";
        } elseif ($cidade == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Cidade não pode ser vazia!";
        } else {
            $dados = [
                'BairroNome' => $nome,
                'idCidade' => $cidade
            ];

            if (GravarRegistro('bairros', $dados)) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Bairro cadastro com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;

    case 'gravar_cidade':
        $nome = $_POST['nome'];
        $uf = $_POST['uf'];

        if ($nome == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nome não pode ser vazio!";
        } elseif ($uf == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "UF não pode ser vazio!";
        } else {
            $dados = [
                'NomeCidade' => $nome,
                'UFCidade' => $uf
            ];

            if (GravarRegistro('cidades', $dados)) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Cidade cadastrada com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;

    case 'gravar_pessoa':
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $nascimento = $_POST['nascimento'];
        $sexo = $_POST['sexo'];
        $foto_nome = $_FILES['foto']['name'];
        $situacao = $_POST['ativo'];
        $bairro = $_POST['bairro'];

        $pasta = 'fotos/';
        if (!file_exists($pasta)) {
            mkdir($pasta, 0755);
        }


        if ($foto_nome) {
            $extensao = strchr($foto_nome, '.');
            $imagem = array('.jpg', '.jpeg', '.png', '.gif');

            if (in_array($extensao, $imagem)) {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $foto_nome)) {
                    $retorno['codigo'] = '5';
                    $retorno['mensagem'] = 'Imagem salva';
                }
            } else {
                $retorno['codigo'] = '15';
                $retorno['mensagem'] = 'Imagem não suportada';
            }
        }

        if ($nome == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nome não pode ser vazio!";
        } elseif ($cpf == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "CPF não pode ser vazio!";
        } elseif ($nascimento == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nascimento não pode ser vazio!";
        } else {
            $dados = [
                'NomePessoa' => $nome,
                'CpfPessoa' => $cpf,
                'NascimentoPessoa' => $nascimento,
                'SexoPessoa' => $sexo,
                'FotoPessoa' => $foto_nome,
                'AtivoPessoa' => $situacao,
                'idBairro' => $bairro
            ];

            if (GravarRegistro('pessoa', $dados)) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Pessoa cadastra com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;

    case 'gravar_usuario':
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if ($nome == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Nome não pode ser vazio!";
        } elseif ($login == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Login não pode ser vazio!";
        } elseif ($senha == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Senha não pode ser vazio!";
        } else {
            unset($_POST['acao']);
            if (GravarRegistro('usuarios', $_POST)) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Usuário cadastro com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;

            case 'gravar_permissao':
        $usuario = $_POST['idUsuario'];
        $modulo = $_POST['idModulo'];

        if ($usuario == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Usuário não pode ser vazio!";
        } elseif ($modulo == "") {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Modulo não pode ser vazio!";
        } else {
            unset($_POST['acao']);
            if (GravarRegistro('usuario_modulo', $_POST)) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Permissão cadastrada com sucesso!";
            };
        }

        echo json_encode($retorno);
        break;
    case 'excluir_cidade':
        $codigo = $_POST['codigo_cidade'];
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Erro ao excluir cidade"; //DeletarRegistro('cidades', 'idCidade='.$codigo);

        if (DeletarRegistro('cidades', 'idCidade=' . $codigo) == 1) {
            $retorno['codigo'] = "1";
            $retorno['mensagem'] = "Cidade excluída com sucesso!";
        }
        echo json_encode($retorno);
        break;


    case 'listar_cidade':
        ?>

        <table class="table table-hover" border="1">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Cidade</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $lista_cidades = LerRegistro('cidades');
        foreach ($lista_cidades as $chave => $valor) { ?>

            <tr>
                <td><?= $valor['idCidade'] ?></td>
                <td><?= $valor['NomeCidade'] ?></td>
                <td><a href="#" id="<?= $valor['idCidade'] ?>" class="btn_excluir_cidade">X</a></td>
            </tr>
            <?php
        }
        break;
    case 'excluir_pessoa':
        $codigo = $_POST['codigo_pessoa'];
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Erro ao excluir Pessoa"; //DeletarRegistro('cidades', 'idCidade='.$codigo);

        if (DeletarRegistro('pessoa', 'idPessoa=' . $codigo) == 1) {
            $retorno['codigo'] = "1";
            $retorno['mensagem'] = "Pessoa excluída com sucesso!";
        }
        echo json_encode($retorno);
        break;


    case 'listar_pessoa':
        ?>

        <table class="table table-hover" border="1">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Pessoa</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $lista_pessoa = LerRegistro('pessoa');
        foreach ($lista_pessoa as $chave => $valor) { ?>

            <tr>
                <td><?= $valor['idPessoa'] ?></td>
                <td><?= $valor['NomePessoa'] ?></td>
                <td><a href="#" id="<?= $valor['idPessoa'] ?>" class="btn_excluir_pessoa">X</a></td>
            </tr>
            <?php
        }
        break;

    case 'excluir_usuario':
        $codigo = $_POST['codigo_usuario'];
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Erro ao excluir Usuário"; //DeletarRegistro('cidades', 'idCidade='.$codigo);

        if (DeletarRegistro('usuarios', 'idUsuario=' . $codigo) == 1) {
            $retorno['codigo'] = "1";
            $retorno['mensagem'] = "Usuário excluída com sucesso!";
        }
        echo json_encode($retorno);
        break;


    case 'listar_usuario':
        ?>

        <table class="table table-hover" border="1">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Usuário</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $lista_usuario = LerRegistro('usuarios');
        foreach ($lista_usuario as $chave => $valor) { ?>

            <tr>
                <td><?= $valor['idUsuario'] ?></td>
                <td><?= $valor['NomeUsuario'] ?></td>
                <td><a href="#" id="<?= $valor['idUsuario'] ?>" class="btn_excluir_usuario">X</a></td>
            </tr>
            <?php
        }
        break;

    case 'excluir_bairro':
        $codigo = $_POST['codigo_bairro'];
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Erro ao excluir Bairro"; //DeletarRegistro('cidades', 'idCidade='.$codigo);

        if (DeletarRegistro('bairros', 'idBairro=' . $codigo) == 1) {
            $retorno['codigo'] = "1";
            $retorno['mensagem'] = "Bairro excluída com sucesso!";
        }
        echo json_encode($retorno);
        break;


    case 'listar_bairro':
        ?>

        <table class="table table-hover" border="1">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Bairro</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $lista_bairro = LerRegistro('bairros');
        foreach ($lista_bairro as $chave => $valor) { ?>

            <tr>
                <td><?= $valor['idBairro'] ?></td>
                <td><?= $valor['BairroNome'] ?></td>
                <td><a href="#" id="<?= $valor['idBairro'] ?>" class="btn_excluir_Bairro">X</a></td>
            </tr>
            <?php
        }
        break;

    case 'Logar':
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if (empty($login) || (empty($senha))) {
            $retorno['codigo'] = "0";
            $retorno['mensagem'] = "Existe campos em braco";
        }
        else{
            $logar = LerRegistro('usuarios','*', 'login = "'. $login .'" AND senha = "'. $senha .'"');

            if ($logar) {
                $retorno['codigo'] = "1";
                $retorno['mensagem'] = "Bem Vindo";
                $_SESSION['logado'] = true;
                $_SESSION['dados'] = $logar;
                $_SESSION['usuario'] = [
                    'nome' => $logar[0]['nome'],
                    'codigo' => $logar[0]['codigo'],
                    'foto' => $logar[0]['foto']

                ];

                $permissao= LerRegistro('usuario_modulo','*', ''.$_SESSION['usuario']['codigo'] .'= idUsuario');
                $_SESSION['modulo'] = [
                    'idModulo' => $permissao[0]['idModulo'],
                    'idUsuario' => $permissao[0]['idUsuario']
                ];

                //$logado = true;
            }else{
                $retorno['codigo'] = "0";
                $retorno['mensagem'] = "Usuário e/ou senha invalidos";
            }
        }
        echo json_encode($retorno);
        break;


    default:
        $retorno['codigo'] = "0";
        $retorno['mensagem'] = "Nenhuma ação definida! Contate o Suporte!";
        echo json_encode($retorno);
        break;
}
