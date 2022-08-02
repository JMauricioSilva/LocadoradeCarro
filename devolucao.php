<?php
include('conexao.php');
$consulta = "SELECT * FROM alugados";
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
  <form method="POST" action="add_devolucao.php?acao=cadastrar">
    <table>
        <tr>
            <td>Nome</td>
            <td>Modelo</td>
            <td>Placa</td>
            <td>Data da Locação</td>
            <td>Data da Devolução</td>
            <td>Devolver Agora</td>
        </tr>

        <?php while ($dado = $con->fetch_array()) { ?>
            <tr>
                <td><?php echo $dado["NOME_CLIENTE"]; ?></td>
                <td><?php echo $dado["MODELO"]; ?></td>
                <td><?php echo $dado["PLACA"]; ?></td>
                <td><?php echo $dado["DATA_LOCACAO"]; ?></td>
                <td><?php echo $dado["DATA_DEVOLUCAO"]; ?></td>
                <td><button type="submit" class="Alugar">Devolver</button></td>
            </tr>
        <?php } ?>
    </table>
  </form>
</body>
</html>