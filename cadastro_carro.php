<?php
  include('verificar_login.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet_cadastroFuncionario.css" media="screen" />
    <title>Cadastro Carro</title>
    
</head>
<body>

<nav id="borda">
    <ul class="menu">
      <li><a href="lista_carros.php">Home</a></li>
      <li><a href="#">Cadastrar</a></li>
        <ul>
            <li><a href="cadastro_carro.php">Carro</a></li>
            <li><a href="cadastro_cliente.php">Cliente</a></li>
            <li><a href="cadastro_colaborador.php">Colaborador</a></li>
        </ul>
      <li><a href="devolucao.php">Devolução</a></li>
      <li><a href="logout.php">Sair</a></li>
  </ul>
  </nav>
  <form method="POST" action="add_carro.php?acao=cadastrar">
    <div id="cadastro_carro">
        <h1 class="titulo">CADASTRO CARRO</h1>
        <input name="modelo" class="EntradaModelo" type="text" placeholder="Modelo" maxlength="20">
        <br><br><br><br>
        <input name="placa" class="EntradaPlaca" type="text" placeholder="Placa" maxlength="7">
        <br><br><br><br>
        <input name="ano" class="EntradaAno" type="text" placeholder="Ano" maxlength="4">
        <br><br><br>
        <input name="cor" id="EntradaCor" type="text" placeholder="Cor" maxlength="100">
        <br><br>
        

        <fieldset class="status">
            <legend id="status">Status</legend>
        
            <div>
              <input name="status_carro" type="radio" id="disponivel" name="drone" value="disponivel"
                     checked>
              <label for="disponivel">Disponivel</label>
            </div>
        
            <div>
              <input name="status_carro" type="radio" id="indisponivel" name="drone" value="indisponivel">
              <label for="indisponivel">Indisponivel</label>
            </div>
        </fieldset>
        <br><br>
        <button type="submit" class="salvaCadastro">Cadastrar</button>
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