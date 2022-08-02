<?php
session_start();
include('conexao.php');
include('lista_carros.php');
    if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "cadastrar"){
        $sql = "INSERT INTO alugados (NOME_CLIENTE, MODELO, PLACA, DATA_LOCACAO, DATA_DEVOLUCAO) values ('$_POST[nome]','$_POST[modelo]','$_POST[placa]','$_POST[data_locacao]','$_POST[data_devolucao]')";    
        $query = mysqli_query($conexao,$sql);
        if(!$query){
            die ("Erro: ".mysqli_error($conexao));
            header('Location: cadastro_cliente.php');
            exit();
        }else{
            $id = $_GET["id"];
            echo("Cadastro Realizado com Sucesso!");
            $status = "UPDATE carro SET STATUS_CARRO = 'INDISPONIVEL' WHERE ID = echo($id) ";    
            $query = mysqli_query($conexao,$status);
            header('Location: lista_carros.php');
            exit();
        }    
    }

    
?>