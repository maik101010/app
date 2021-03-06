<!DOCTYPE html>
<html>
<head>
	<title>
		Busqueda
	</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
	.demo-list-icon {
	  /* 	 */
	}

	h3 {
		text-align: center;
	}

	.contenedor-resultados {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		background: #fff;
		margin: auto;
		width: 300px;
		border-radius: 10px;
	}

	.resultado {
		display: flex;
		justify-content: space-between;
		align-items: center;
		text-decoration: none;
		color: #707070;
		padding: 15px;
		width: 100%;
		-webkit-transition: all 0.2s ease-out;
		-o-transition: all 0.2s ease-out;
		transition: all 0.2s ease-out;
	}

	.resultado:hover {
		background: #eee;
	}

	.resultado:first-child {
		border-radius: 10px 10px 0 0;
	}

	.resultado:last-child {
		border-radius: 0 0 10px 10px;
	}

	.resultado .contenedor1 {
		display:flex;
		align-items: center;
	}

	.resultado img {
		width: 50px;
		height: 50px;
		border-radius: 50%;
	}

	.resultado p {
		display: flex;
		flex-wrap: wrap;
		margin-bottom: 0;
	}

	.resultado p span {
		width: 100%;
		margin-left: 20px;
	}

	.resultado p .nombre {
		font-size: 20px;
	}

	footer {
		margin-top: 400px;
	}

	@media screen and (max-width: 759px) {
        footer {
            margin-top: 500px;
        }
    }
</style>
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<?php
	include "generales/header.php";
	?>  
	<main class="mdl-layout__content">
		<h3 style="color: black">Resultados de la busqueda: </h3>

	  	<div class="contenedor-resultados">
			<?php 
			if (isset($_GET["data"])) {
				
				$valores= unserialize(urldecode($_GET['data']));
			
				foreach ($valores as $row) { ?>				
				<div class="resultado">
					<div class="contenedor1">
						<img src="images/usuario.jpg" alt="">
						<p>
							<span class="nombre"><?php echo $row['nombre']; ?></span>
							<span class="cargo"><?php echo $row['cargo']; ?></span>
						</p>
					</div>
						<a href="view_informacion_persona.php?id=<?php echo $row['id_persona']; ?>"><i class="material-icons">remove_red_eye</i></a>
				</div>
		    <?php }
			}else{ 
		          echo "<h2>No se encontraron resultados</h2>";
		        }
			?>
		</div>
		<?php include("generales/footer.php"); ?>

		</main>
	</div>
</body>
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>