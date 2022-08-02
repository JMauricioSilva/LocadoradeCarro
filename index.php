<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
    <title>Tela de login</title>
    
</head>
<body>
    <form action="login.php" method="POST">
        <div id="login">
            <h1>Login</h1>
            <input name="usuario" type="text" placeholder="Usuario" maxlength="100">
            <br><br>
            <input name="senha" type="password" placeholder="Senha" maxlength="8">
            <br><br>
            <button type="submit">Entrar</button>
            <br><br>
        </div>
    </form>

	<footer>
		<div id="rodape"></div>
			<h4></h4>
		</div>
	</footer>

</script></body>
</html>