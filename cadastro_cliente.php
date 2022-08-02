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
    <title>Cadastro Cliente</title>
    
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
  <form method="POST" action="add_cliente.php?acao=cadastrar">
    <div id="cadastro_cliente">
        <h1 class="titulo">CADASTRO CLIENTE</h1>
        <input name="nome" class="EntradaNome" type="text" placeholder="Nome" maxlength="255">
        <br><br><br><br>
        <input name="cpf" id="EntradaCpf" type="text" placeholder="CPF" maxlength="11">
        <br><br><br><br>
        <input name="numero_celular" id="EntradaNumeroCelular" type="text" placeholder="Celular" maxlength="11">
        <br><br><br><br>
        <input name="endereco" class="EntradaEndereco" type="text" placeholder="Endereço" maxlength="255">
        <br><br><br><br>
        <input name="numero_endereco" class="EntradaNumeroEndereco" type="text" placeholder="Número Endereço" maxlength="4">
        <br><br><br><br>
           

        <fieldset class="status">
            <legend id="status">Status</legend>
        
            <div>
              <input name="status_cliente" type="radio" id="ativo" name="drone" value="ativo"
                     checked>
              <label for="ativo">Ativo</label>
            </div>
        
            <div>
              <input name="status_cliente" type="radio" id="inativo" name="drone" value="inativo">
              <label for="inativo">Inativo</label>
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