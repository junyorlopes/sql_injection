<?php
if($_SERVER["REQUEST_METHOD"] === 'POST'){
	$conn = mysqli_connect("localhost", "root", "", "dbphp7");
	if ($conn) {
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		$query = "SELECT deslogin, dessenha FROM tb_usuarios WHERE deslogin='$login' AND dessenha='$senha'";
		$result = mysqli_query($conn, $query);
		$rows = mysqli_fetch_array($result);
		if($rows){
			echo "<b>Logado com sucesso!</b>";
			echo "<br><i>$query</i>";
		}
		else {
			echo "<b>Erro no login ou senha.</b>";	
		}
	}
	else {
		echo "Erro na conexão!";
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
   <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading text-center">Sign in</h2>
        <br>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="text" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
       	<br>
       	<button class="btn btn-lg btn-primary btn-block" name="entrar" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>