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
	  width: 300px;
	}
</style>
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<?php
	include "generales/header.php";
	?>  
	<main class="mdl-layout__content">
		<h3 style="color: black">Resultados de la busqueda: </h3>

	  	<ul class="demo-list-icon mdl-list">
		<?php 
		if (isset($_GET["data"])) {
	           
	    $valores= unserialize(urldecode($_GET['data']));
	    //echo $row['nombre'];
  //     	echo $row['cargo'];
		// echo $row['direccion_oficina'];
		// echo $row['codigo_postal'];
		// echo $row['ciudad'];
		foreach ($valores as $row) { ?>				
				  <li class="mdl-list__item">
				    <span class="mdl-list__item-primary-content">
					    <i class="material-icons mdl-list__item-icon">person</i>
					    <?php echo $row['nombre']; ?>
					</span>					
				  </li>			
	    <?php }
		}else{ 
	          echo "<h2>No se encontraron resultados</h2>";
	        }
		?>
		 </ul>
		<?php include("generales/footer.php"); ?>

		</main>
	</div>
</body>
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>