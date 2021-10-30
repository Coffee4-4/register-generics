<?php
    require __DIR__ . "/config.php";

    function AbriConexao(){
        $mysqli = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die (mysqli_connect_error());
        mysqli_set_charset($mysqli, CHARSET) or die (mysqli_error($mysqli));

        return $mysqli;
    }

    function FecharConexao($mysqli){
        mysqli_close($mysqli) or die(mysqli_error($mysqli));
    }

    function TratarAspas($dados){
        $mysqli = AbriConexao();

        if (!is_array($dados)) {
            $dados = mysqli_real_escape_string($mysqli, $dados);
        }
        else{
            foreach ($dados as $key => $value) {
                $key = mysqli_real_escape_string($mysqli, $key);
                $value = mysqli_real_escape_string($mysqli, $value);

                $dados[$key] = $value;
            }
        }
        
        FecharConexao($mysqli);
        return $dados;
    }