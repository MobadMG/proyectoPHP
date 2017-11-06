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

	if($_POST){

		$data = $database->select("tb_participantes",[
			"email",
			"password"
		],[
			"AND"=> [
				"email"=> $_POST["email"],
				"password"=>md5($_POST["password"])
			]
		]);

		$results = count($data);
		
		if($results > 0){
			session_start();
			$_SESSION["loggedin"] = true; //store session data
			$_SESSION["email"] = $data[0]["email"];
			header("location: enterCodes.php");//redirect
		}
	}
?>

<html>
	<head>
		<title>SIGN UP</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<div class="row">
			<header>
				<div>
					<nav>
						<ul class="sign">
							<li class="indicador">SIGN UP</li>
							<li>/</li>
							<li><a href="register.php">SIGN IN</a></li>
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

			<!--logo + XOBOX ONE X imagen-->
			<section>
				<div class="others-titles">
					<img src="../proyecto2/imgs/imgsRules/xbox.png">
				</div>
			</section>

			<!--CONSOLA imagen-->
			<section>
				<div>
					<img src="../proyecto2/imgs/imgsRules/consola.png">
				</div>
			</section>

			<section>
				<div class="others-titles">
					<img src="../proyecto2/imgs/imgsRules/SIGNUP.png">
				</div>
			</section>

			<div class="signUp">
				<form id="registration" action="sign-up.php" method="POST">
					<div class="left">
						<label for="email">Email</label><br>
						<input type="text" name="email" data-validation="email" data-validation-error-msg="The email is invalid">
					</div>

					<div class="right">
						<label for="password">Password</label><br>
						<input type="password" name="password" data-validation="length" data-validation-length="min3" data-validation-error-msg="INVALID">
					</div>

					<div>
						<input class="botonRegister" type="submit" name="sign-up" value="SIGN UP">
					</div>
				</form>
			</div>

			<section>
				<div class="texts">
					<h1><u><a href="resetPass.php">Forgot your pasword?</a></u></h1>
					<h1><a href="register.php">New user?</a></h1>
				</div>
			</section>

		</div>

		<footer></footer>

	</body>
</html>