<?php
session_start();
include('conexao.php');
    if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "cadastrar"){
        $sql = "DELETE FROM alugados WHERE id = 7";   
        $query = mysqli_query($conexao,$sql);
        if(!$query){
            die ("Erro: ".mysqli_error($conexao));
            header('Location: devolucao.php');
            exit();
        }else{
            $id = $_GET["id"];
            echo("Devolução realizada com Sucesso!");
            $status = "UPDATE carro SET STATUS_CARRO = 'DISPONIVEL' WHERE ID = 5 ";    
            $query = mysqli_query($conexao,$status);
            header('Location: devolucao.php');
            exit();
        }    
    }

    
?>