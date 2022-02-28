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
                            <h3 id="lblnomidticket">Detalle Ticket</h3>
                            <span id="lblestado"></span>
                            <span class="label label-pill label-primary" id="lblnomusuario"></span>
                            <span class="label label-pill label-info" id="lblfechcrea"></span>

                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#">Home</a></li>
                                <li class="active">Detalle Ticket</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

            <div class="box-typical box-typical-padding">
				<div class="row">
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="cat_nom">Categoria</label>
								<input type="text" class="form-control" name="cat_nom" id="cat_nom" readonly>
							</fieldset>
						</div>
						
                        <div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Titulo</label>
								<input type="text" class="form-control" name="tick_titulo" id="tick_titulo" readonly>
							</fieldset>
						</div>

                        <div class="col-lg-12">
                <fieldset class="form-group">
                  <label class="form-label semibold" for="tickd_descripusu">Descripción</label>
                  <div class="summernote-theme-1">
                    <textarea id="tickd_descripusu" name="tickd_descripusu" class="summernote" name="name"></textarea>
                  </div>

                </fieldset>
              </div>
				</div>

			</div>

            <section class="activity-line" id="lbldetalle"> 
            </section>


            <div class="box-typical box-typical-padding">
				
                <h6>Agregar Respuesta:</h6>
				<div class="row">
						<div class="col-lg-12">
							<fieldset class="form-group">
								<div class="summernote-theme-3">
									<textarea id="tickd_descrip" name="tickd_descrip" class="summernote"></textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-success">Enviar</button>
                            <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-danger">Cerrar Ticket</button>
						</div>
				</div>

			</div>

            
        </div>
    
    </div>
    <!--.page-content-->
    <?php require_once("../MainJs/js.php"); ?>
    <script src="detalleticket.js"></script>
</body>

</html>
<?php 
	}else {
		header("Location:".conectar::ruta()."/index.php");
	}
?>