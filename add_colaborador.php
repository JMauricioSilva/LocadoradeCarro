<?php
session_start();
include('conexao.php');
    if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "cadastrar"){
        $sql = "INSERT INTO colaborador (NOME, CPF, USUARIO, SENHA, STATUS_COLABORADOR) values ('$_POST[nome]','$_POST[cpf]','$_POST[usuario]','$_POST[senha]','$_POST[status_colaborador]')";    
        $query = mysqli_query($conexao,$sql);
        if(!$query){
            die ("Erro: ".mysqli_error($conexao));
            header('Location: cadastro_colaborador.php');
            exit();
        }else{
            echo("Cadastro Realizado com Sucesso!");
            header('Location: cadastro_colaborador.php');
            exit();
        }    
    } 
?>