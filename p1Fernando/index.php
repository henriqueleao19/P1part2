<?php
//conexão
require 'database.php';
//sessão
session_start();

//botão enviar
    if(isset($_POST['entrar'])):
        $erros = array();
        $login = mysqli_real_escape_string($connect, $_POST['login']);
        $senha = mysqli_real_escape_string($connect, $_POST['senha']);
        
        if(empty($login) or empty($senha)):
            $erros[] = "<font color='red'><i>Preenchimento errado, tente novamente.</i>";
        else:
            $sql = "select id, username, password from usuarios where username = '$login' and password = '$senha'";
            $resultado = mysqli_query($connect,$sql);
            if(mysqli_num_rows($resultado) >0 ):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            else:
                $erros[] = "<font color='red'><i>Preenchimento errado, tente novamente.</i>";
            endif;
        endif;
    endif;
       
        ?>



<!DOCTYPE html>
<html lang="pt">
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
       
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<span class="login100-form-title">
						Login
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Digite seu nome">
						<input class="input100" type="text"  type="text" name="login" placeholder="Username">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite sua senha">
						<input class="input100" type="password" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn mb-5">
                        <button type="submit" class="btn" name="entrar">Entrar</button>
					</div>

                    <div class="flex-col-c p-5 mb-5">
                        <a class="btn waves-effect waves-light" href="anonimo.php">Modo Anônimo</a>
					</div>

                    <div class="flex-col-c p-5 mb-5">
                    <a class="btn waves-effect waves-light" href="novousuario.php">Criar Login</a>
                    </div>
<br>
<br>
                    <?php 
                if(!empty($erros)):
                    foreach($erros as $erro):
            echo $erro;
                endforeach;
            endif; 
        
        
        ?>

				</form>
			</div>

            
		</div>
	</div>
	
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>