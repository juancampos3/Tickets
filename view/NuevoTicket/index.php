<?php 
	require_once("../../config/conexion");
	if (isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
<head lang="es">
	<?php require_once("../MainHead/head.php"); ?>
</head>
<body class="with-side-menu">

	<?php require_once("../MainHeader/header.php"); ?>

	<div class="mobile-menu-left-overlay"></div>
	
	<?php require_once("../MainNav/nav.php"); ?>

	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php require_once("../MainJs/js.php"); ?>
	<script src="nuevoticket.js"></script>
</body>
</html>
<?php 
	}else {
		header("Location:".conectar::ruta()."/index.php");
	}
?>