<?php 
	require_once("../../config/conexion.php");
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
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>Consultar Ticket</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#">Home</a></li>
                                <li class="active">Consultar Ticket</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

            <div class="box-typical box-typical-padding">
				<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width:3%;">No. Ticket</th>
							<th style="width:5%;">Categoria</th>
							<th class="text-center" style="width:8%;">Titulo</th>
                            <th class="text-center" style="width:10%;">Fecha Creación</th>
							<th class="text-center" style="width:5%;"></th>
							
						</tr>
					</thead>
				</table>
			</div>
        </div>
        <!--.container-fluid-->
    </div>
    <!--.page-content-->
    <?php require_once("../MainJs/js.php"); ?>
    <script src="consultarticket.js"></script>
</body>

</html>
<?php 
	}else {
		header("Location:".conectar::ruta()."/index.php");
	}
?>