<?php
include('conexao.php');
$consulta = "SELECT * FROM carro";
$con = mysqli_query($conexao, $consulta) or die("Erro: Consulta não efetuada "  + $mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
</head>

<body>
<nav id="borda">
    <ul class="menu">
      <li><a href="lista_carros.php">Home</a></li>
      <li><a>Cadastrar</a></li>
        <ul>
            <li><a href="cadastro_carro.php">Carro</a></li>
            <li><a href="cadastro_cliente.php">Cliente</a></li>
            <li><a href="cadatro_colaborador.php">Colaborador</a></li>
        </ul>
      <li><a href="devolucao.php">Devolução</a></li>
      <li><a href="logout.php">Sair</a></li>
  </ul>
  </nav>
    <table>
        <tr>
            <td>Modelo</td>
            <td>Placa</td>
            <td>Ano</td>
            <td>Cor</td>
            <td>Status</td>
        </tr>

        <?php while ($dado = $con->fetch_array()) { ?>
            <tr>
                <td><?php echo $dado["MODELO"]; ?></td>
                <td><?php echo $dado["PLACA"]; ?></td>
                <td><?php echo $dado["ANO"]; ?></td>
                <td><?php echo $dado["COR"]; ?></td>
                <?php if($dado["STATUS_CARRO"] == "DISPONIVEL"){ ?>
                <td><a href="alugar_carro.php?id=<?php echo $dado["ID"]?>&modelo=<?php echo $dado["MODELO"]?>&placa=<?php echo $dado["PLACA"]?>"><?php echo $dado["STATUS_CARRO"];?></a></td>
                <?php } else{?>
                    <td><?php echo $dado["STATUS_CARRO"]; ?></td>
                <?php }?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>