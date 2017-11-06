<?php

namespace Medoo;
require 'Medoo.php';

$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'proyectophp',
	'server' => 'localhost',
	'username' => 'root',
	'password' => ''
]);

$provin = $database->select("tb_provincias","*");
$particip = $database->select("tb_participantes","*");

	if($_POST){
		$database->insert("tb_participantes", [
		"nombre" => $_POST["firtName"],
		"apellido" => $_POST["lastName"],
		"email" => $_POST["email"],
		"telefono" => $_POST["phoneN"],
		"provincia" => $_POST["provincia"],
		"puntajeTotal" => 0,
		"password" => md5($_POST["password"]),
		"fecha" => strftime("%Y-%m-%d-%H-%M-%S", time())
	]);

		header("location:prizingDetails.php");

	}

?>

<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<div class="row">
			<header>
				<div>
					<nav>
						<ul class="sign">
							<li><a href="sign-up.php">SIGN UP</a></li>
							<li>/</li>
							<li class="indicador">SIGN IN</li>
						</ul>
					</nav>
				</div>

				<div class="menusTOP">
					<nav>
						<ul>
							<li><a href="prizingDetails.php">Prizes</a></li>
							<li>/</li>
							<li><a href="rules_reg.php">Rules and Regulations</a></li>
							<li>/</li>
							<li><a href="howtoplay.php">How to play</a></li>
						</ul>
					</nav>
				</div>
			</header>

			<!--WIN EVERY HOUR imagen-->
			<section>
				<div>
					<img src="../proyecto2/imgs/imgsRules/Title.png">
				</div>
			</section>

			<!--HEY FIRST TIMER imagen-->
			<section>
				<div class="others-titles">
					<img src="../proyecto2/imgs/imgsRules/firstTime.png">
				</div>
			</section>

			<!--FILL THE FIELDS imagen-->
			<section>
				<div class="others-titles">
					<img src="../proyecto2/imgs/imgsRules/fill.png">
				</div>
			</section>

			<section>
				
				<form id="registration" action="register.php" method="POST">

				<div class="register">
					
					<div class="left">
						<div class="space">
							<label for="email">Email<br></label>
							<input type="text" name="email" data-validation="email" data-validation-error-msg="<br>The email is invalid">
						</div>

						<div class="space">
							<label for="firtName">First Name<br></label>
							<input type="text" name="firtName" data-validation="length" data-validation-length="min3" data-validation-error-msg="<br>Insert FirstName">
						</div>

						<div class="space">
							<label for="password">Password<br></label>
							<input type="password" name="password" data-validation="length" data-validation-length="min3" data-validation-error-msg="<br>The passwords doesn't coincide">
						</div>

						<div class="space">
							<label for="phoneN">Phone Number<br></label>
							<input type="text" name="phoneN" data-validation="length" data-validation-length="min3" data-validation-error-msg="<br>Incorrect phone number">
						</div>
					</div>

					<div class="right">
						<div class="space">
							<label for="confirmEmail">Confirm Email<br></label>
							<input type="text" data-validation="email" data-validation-error-msg="<br>The email is invalid">
						</div>

						<div class="space">
							<label for="lastName">Last Name<br></label>
							<input type="text" name="lastName" data-validation="length" data-validation-length="min3" data-validation-error-msg="<br>Insert LastName">
						</div>

						<div class="space">
							<label for="confimPass">Confirm Password<br></label>
							<input type="password" name="password" data-validation="length" data-validation-length="min3" data-validation-error-msg="<br>The passwords doesn't coincide">
						</div>

						<div class="space">
							<label for="provincia">Province<br></label>
							<select name="provincia">
							<?php
								$len = count($provin);
								for($i=0; $i<$len; $i++){
									echo "<option value='".$provin[$i]["id_provincia"]."'>".$provin[$i]
									["provincia"]."</option>";
								}
							?>
							</select>
						</div>
					</div>
					
				</div>

					<div>
						<input class="botonRegister" type="submit" name="register" value="REGISTER">
					</div>

				</form>
			</section>

		</div>

		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script>
			$.validate({
				form: '#registration'
			});
		</script>

		<footer></footer>

	</body>
</html>

