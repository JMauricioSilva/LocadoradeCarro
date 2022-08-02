<?php
session_start();
include('conexao.php');
    if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "cadastrar"){
        $sql = "INSERT INTO carro (MODELO, PLACA, ANO, COR, STATUS_CARRO) values ('$_POST[modelo]','$_POST[placa]','$_POST[ano]','$_POST[cor]','$_POST[status_carro]')";    
        $query = mysqli_query($conexao,$sql);
        if(!$query){
            die ("Erro: ".mysqli_error($conexao));
            header('Location: cadastro_carro.php');
            exit();
        }else{
            echo("Cadastro Realizado com Sucesso!");
            header('Location: cadastro_carro.php');
            exit();
        }    
    }
   
?>