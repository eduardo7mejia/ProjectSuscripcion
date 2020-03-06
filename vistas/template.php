
<?php 
$ruta = ControladorRuta::ctrRuta();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cursos Educativos</title>
	<!--En esta parte vamos a cargar los modulos-->
	<base href="vistas/">
	<link rel="shortcut icon" type="img/" href="moleskine-icon-50.png">
	<!--=====================================
	VÍNCULOS CSS
	======================================-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Fuente Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,800i&display=swap" rel="stylesheet">

	<!-- Hoja Estilo Personalizada -->
	<link rel="stylesheet" href="css/style.css">

	<!--=====================================
	VÍNCULOS JAVASCRIPT
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- https://easings.net/es# -->
	<script src="js/plugins/jquery.easing.js"></script>

	<!-- https://markgoodyear.com/labs/scrollup/ -->
	<script src="js/plugins/scrollUP.js"></script>

	<!-- https://www.jqueryscript.net/loading/Handle-Loading-Progress-jQuery-Nite-Preloader.html -->
	<script src="js/plugins/jquery.nite.preloader.js"></script>

</head>

<body>
	<?php 
	if(isset($_GET["pagina"])){

		if( $_GET["pagina"] == "inicio"){
	
			include "paginas/inicio.php";
	
		}
	
		if( $_GET["pagina"] == "ingreso"){
	
			if(isset($_POST["idioma"])){
	
				if($_POST["idioma"] == "es"){
	
					include "paginas/ingreso.php";
				
				}else{
	
					include "paginas/ingreso_en.php";
				}
	
			}else{
	
				include "paginas/ingreso.php";
			
			}
	
		}
	
		if( $_GET["pagina"] == "registro"){
	
			if(isset($_POST["idioma"])){
	
				if($_POST["idioma"] == "es"){
	
					include "paginas/registro.php";
				
				}else{
	
					include "paginas/registro_en.php";
				}
	
			}else{
	
				include "paginas/registro.php";
			
			}
	
		}
	
	}else{
	
		include "paginas/inicio.php";
	
	}
	
	?>

<script src="js/script.js"></script>

</body>

</html>
