<?php   

    require __DIR__ . "/conexao.php";

    //Consultar dados no Banco
    function LerRegistro($tabela, $campos = "*", $condicao = null){
        //$sql = "SELECT * FROM tabela";
        $condicao_frase = ($condicao) ? "WHERE {$condicao}" : null;

        $sql = "SELECT {$campos} FROM {$tabela} {$condicao_frase} ";
        
        $resultado = Executar($sql);
        //var_dump($resultado);
        if (!mysqli_num_rows($resultado)) {
            return [];
        }else{
            while($registro = mysqli_fetch_assoc($resultado)){
                $dados[] = $registro;
            }
        }
        return $dados;
    }

    //Cadastrar dados no Banco
    function GravarRegistro($tabela, array $dados){
        //$sql = "INSERT INTO NomeTabela (campo1, campo2) VALUES ('valor1   ', 'valor')";
        TratarAspas($dados);
        $campos = implode(',' , array_keys($dados));
        //echo $campos;
        $valores = "'" . implode("','", $dados) . "'";
        //echo $valores;
        $sql = "INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})";
        //echo $sql;
        return Executar($sql);
    }

    //Deletar dados do Banco
    function DeletarRegistro($tabela, $condicao = null){
        //$sql = "DELETE FROM NomeTabela WHERE Algo";
        $condicao = $condicao ? " WHERE {$condicao}" : null;
        $sql = "DELETE FROM {$tabela}{$condicao}";
        return Executar($sql, true);
        //return $sql;
        
    }


    //Atualizar dados do Banco
    function AlterarRegistro($tabela, array $dados, $condicao = null ){
        TratarAspas($dados);
        //$sql = "UPDATE Nome_tabela SET campo1 = 'valor1' , campo2 = 'valor2' WHERE";
        foreach ($dados as $chave => $valor) {
            $campos[] = "{$chave} = '{$valor}'";
        }

        $campos = implode("," , $campos);
        $condicao = $condicao ? " WHERE {$condicao}" :  null;
        $sql = "UPDATE {$tabela} SET {$campos} {$condicao}";
        return Executar($sql, true);
    }


    function Executar($sql, $linhas_afetadas = false){
        $mysqli = AbriConexao();
        $resultado = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
        if ($linhas_afetadas) {
            return mysqli_affected_rows($mysqli);
        }

        FecharConexao($mysqli);

        return $resultado;
    }