<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BackOffice | Cursos</title>
    <link rel="shortcut icon" type="img/" href="moleskine-icon-50.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Vinculos Css -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/css/plugins/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="vistas/css/plugins/OverlayScrollbars.min.css">
     <!-- Theme jdSlider -->
    <link rel="stylesheet" href="vistas/css/plugins/jdSlider.css">
     <!--Select 2-->
    <link rel="stylesheet" href="vistas/css/plugins/select2.min.css">
     <!-- estilo personalizado -->
  	<link rel="stylesheet" href="vistas/css/style.css">
     <!--=====================================
	VÍNCULOS JAVASCRIPT
	======================================-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="vistas/js/plugins/adminlte.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="vistas/js/plugins/jquery.overlayScrollbars.min.js"></script>
     <!-- jdSlider -->
     <script src="vistas/js/plugins/jdSlider.js"></script>
     <!--Select2 -->
     <script src="vistas/js/plugins/select2.full.min.js"></script>
      <!--InputMask -->
      <script src="vistas/js/plugins/jquery.inputmask.js"></script>
      <!--jSignature-->
      <script src="vistas/js/plugins/jSignature.js"></script>
      <script src="vistas/js/plugins/jSignature.CompressorSVG.js"></script>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
    
    <?php 
    include "paginas/modulos/header.php";
    include "paginas/modulos/menu.php";
    if (isset($_GET['pagina'])) {
        if ($_GET['pagina']=="inicio" || 
            $_GET['pagina']=="perfil" ||
            $_GET['pagina']=="usuarios"||
            $_GET['pagina']=="runinivel" ||
            $_GET['pagina']=="rbinaria" ||
            $_GET['pagina']=="rmatriz" ||
            $_GET['pagina']=="ingresos-runinivel" ||
            $_GET['pagina']=="ingresos-rbinaria" ||
            $_GET['pagina']=="ingresos-rmatriz" ||
            $_GET['pagina']=="plan-compensacion" ||
            $_GET['pagina']=="soporte" ||
            $_GET['pagina']=="salir") {

            include "paginas/".$_GET["pagina"].".php";
            }

           else if ($_GET['pagina']=="cursitos-web" ||
                $_GET['pagina']=="cursitos-redes" ||
                $_GET['pagina']=="cursitos-datos") {

                    include "paginas/cursitos.php";
                }
                else {
                    include "paginas/error404.php";
                }
    } else {
        include "paginas/inicio.php";
    }
    // paginas del sitio //
   
    include "paginas/modulos/footer.php";
    ?>
</div>

   <script src="vistas/js/inicio.js"></script>
   <script src="vistas/js/usuarios.js"></script>
</body>

</html>