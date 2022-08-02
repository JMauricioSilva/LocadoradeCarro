<?php
  include('verificar_login.php');
  include('conexao.php');
  $id = $_GET["id"];
  
$consulta = "SELECT ID,MODELO,PLACA FROM carro";
$con = mysqli_query($conexao, $consulta) or die("Erro: Consulta não efetuada "  + $mysqli->error); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet_cadastroFuncionario.css" media="screen" />
    <title>Alugar Carro</title>
    
</head>
<body>

<nav id="borda">
    <ul class="menu">
      <li><a href="lista_carros.php">Home</a></li>
      <li><a href="#">Cadastrar</a></li>
        <ul>
            <li><a href="cadastro_carro.php">Carro</a></li>
            <li><a href="cadastro_cliente.php">Cliente</a></li>
            <li><a href="cadatro_colaborador.php">Colaborador</a></li>
        </ul>
      <li><a href="devolucao.php">Devolução</a></li>
      <li><a href="logout.php">Sair</a></li>
  </ul>
  </nav>
  <form method="POST" action="add_locacao.php?acao=cadastrar">
    <div id="cadastro_alugar_carro">
        <h1 class="titulo">INFORMAÇÕES DO LOCAÇÃO</h1>
        <input name="nome" class="EntradaNome" type="text" placeholder="Nome Cliente" maxlength="255">
        <br><br>
        <input name="modelo" class="EntradaNome" type="hidden" value= "<?php echo $_GET['modelo'] ?>">
        <br>
        <input name="placa" class="EntradaNome" type="hidden" value="<?php echo $_GET['placa'] ?>">
        <br>
        <input name="data_locacao" class="EntradaDataLocacao" type="text" placeholder="Data_Locação 00/00/0000" maxlength="10">
        <br><br><br><br>
        <input name="data_devolucao" class="EntradaDataDevolucao" type="text" placeholder="Data_Devolução 00/00/0000" maxlength="10">
        <br><br><br>
          <button type="submit" class="Alugar">Salvar</button>
    </div>
</form>
   <div>
    <footer class="rodapé">
      <div>
        <h4 class="tituloRodapé"></h4>
      </div>
    </footer>
   </div>
        
    </body>
</html>