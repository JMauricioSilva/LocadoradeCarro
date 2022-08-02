<?php
session_start();
include('conexao.php');
    if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "cadastrar"){
        $sql = "INSERT INTO cliente (NOME, CPF, NUMERO_CELULAR, ENDERECO, NUMERO_ENDERECO, STATUS_CLIENTE) values ('$_POST[nome]','$_POST[cpf]','$_POST[numero_celular]','$_POST[endereco]','$_POST[numero_endereco]','$_POST[status_cliente]')";    
        $query = mysqli_query($conexao,$sql);
        if(!$query){
            die ("Erro: ".mysqli_error($conexao));
            header('Location: cadastro_cliente.php');
            exit();
        }else{
            echo("Cadastro Realizado com Sucesso!");
            header('Location: cadastro_cliente.php');
            exit();
        }    
    }

    
?>