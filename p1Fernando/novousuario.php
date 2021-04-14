<!DOCTYPE html>
<html lang="pt">
<head>
	<title>NOVO USUÁRIO</title>
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
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="create_login.php" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						Cadastra-se
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Digite seu nome">
						<input class="input100" type="text"  name="nome" id="nome" placeholder="Nome">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Digite seu username">
						<input class="input100" type="text" name="usuario" id="usuario" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite sua senha">
						<input class="input100" type="password" name="password" id="password" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Carregue uma foto sua">
						<input class="input100" type="file" id="avatar" name="avatar" placeholder="Arquivo">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-b-16">
                        <button type="submit" name="btn-criar-usuario" class="btn btn-block create-account">Criar Usuário</button>
						<span class="focus-input100"></span>

					</div>

					<div class="flex-col-c p-t-170 p-b-40">
                    <a href="index.php" class="btn btn-green" role="button">Voltar</a>
                    <span class="focus-input100"></span>

					</div>

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