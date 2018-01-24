<!doctype html>
<html>
<head>
		<meta charset="utf-8">
		<title>RPG</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="img/favicon.png" />
		<script src="js/burger.js"></script>
	</head>

	<body>
		<div id="partie_menu">
             <div id="conteneur_menu">
				 <div id="leburger">
					 <div class="burger">
						 <img src="./img/burger_icon.png" id="menu_burger"/>
					 </div>
				 </div>
				 <div id="lemenu">
					 <div class="menu">
						 <ul>
							<a href="site/regles.php" class="liens_menu"><li>REGLES DU JEU</li></a>
							<a href="site/astuces.php" class="liens_menu"><li>ASTUCES ET CONSEILS</li></a>
						 </ul>
					 </div>
				 </div>
             </div>
         </div>
		<div id="partie_corps">
			<div id="conteneur_corps">
				<div id="structure_corps">
					<div class="content_corps">
						<h1>Fallen in Hell</h1>
						<br>
						<?php
							include ('src/jeu.php');
						?>
					</div>
				</div>
			</div>
		</div>
		<div id="partie_footer">
			<div id="conteneur_footer">
				<div id="structure_footer">
					<div class="content_footer">
						<ul>
							<li>Copyright © RPG 2018</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>