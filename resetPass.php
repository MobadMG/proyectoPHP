<?php

?>

<html>
	<head>
		<title>Reset Pass</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<div class="row">
			<header>
				<div>
					<nav>
						<ul class="sign">
							<li>SIGN UP</li>
							<li>/</li>
							<li>SIGN IN</li>
						</ul>
					</nav>
				</div>

				<div class="menusTOP">
					<nav>
						<ul>
							<li><a href="prizingDetails.php">Prizes</a></li>
							<li>/</li>
							<li><a href="enterCodes.php">Enter Codes</a></li> <!--Porque ya esta iniciada la sesion-->
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

			<!--Forgot your Pass imagen-->
			<section>
				<div class="others-titles">
					<img src="../proyecto2/imgs/imgsRules/forgotPass.png">
				</div>
			</section>

			<div class="others-titles">
				<label for="Email">Email</label><br>
				<input type="text" data-validation="email" data-validation-error-msg="The email is invalid">
			</div>

			<div class="others-titles">
				<input style="background: #2b9942; color: white; border: none; margin-bottom: 80px; width: 140px;" 
				type="submit" name="reset" value="RESET">
			</div>

		</div>

		<footer></footer>

	</body>
</html>