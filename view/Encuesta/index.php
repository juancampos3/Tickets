<!DOCTYPE html>
<html>

<head>
    <title>Soporte en Casa S.A.S</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <link rel="stylesheet" href="../../public/css/lib/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="../../public/css/separate/vendor/sweet-alert-animations.min.css">
</head>

<body>

    <div class="container">
        <section class="row">
            <div class="col-md-12">
                <h1 class="text-center">Calificación de Nuestro Servicio</h1>
            </div>
        </section>
        <hr>
        <section class="row">
            <section class="col-md-12">
                <h3>Datos basicos</h3>
                <p></p>
            </section>
        </section>
        <section class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="nombreCompleto">No. Ticket</label>
                    <input type="text" class="form-control" name="lblnomidticket" id="lblnomidticket" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombreCompleto">Titulo</label>
                    <input type="text" class="form-control" name="tick_titulo" id="tick_titulo" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="fechaActual">Fecha Creación</label>
                    <input type="text" class="form-control" name="lblfechcrea" id="lblfechcrea" readonly>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nombreCompleto">Descripción</label>
                    <input type="text" class="form-control" name="tickd_descripusu" id="tickd_descripusu" readonly>
                </div>
            </div>
        </section>

        <section class="row">
            <section class="col-md-12">
                <section class="row">
                    <div class="col-md-4">
                        <label for="tipoAtencion">Categoria</label>
                        <input type="text" class="form-control" name="cat_nom" id="cat_nom" readonly>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fechaActual">Sub Categoria</label>
                            <input type="text" class="form-control" name="cats_nom" id="cats_nom" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fechaActual">Prioridad</label>
                            <input type="text" class="form-control" name="prio_nom" id="prio_nom" readonly>
                        </div>
                    </div>
                </section>

                <section class="row">
                    <div class="col-md-4">
                        <label for="tipoAtencion">Usuario</label>
                        <input type="text" class="form-control" name="lblnomusuario" id="lblnomusuario" readonly>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fechaActual">Estado</label>
                            <input type="text" class="form-control" name="lblestado" id="lblestado" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fechaActual">Fecha Cierre</label>
                            <input type="text" class="form-control" name="lblfechcierre" id="lblfechcierre" readonly>
                        </div>
                    </div>
                </section>

            </section>
        </section>
        <hr />


        <div id="panel1">
            <section class="row">
                <div class="col-md-12 text-center">
                    <input id="tick_estre" name="tick_estre" class="rating rating-loading" data-min="0" data-max="5"
                        data-step="1" value="0">
                </div>
            </section>
            <!--  Comentarios  -->
            <section class="row">
                <div class="col-md-12">
                    <h3>Comentarios.</h3>
                    <p></p>
                </div>
            </section>
            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">Comentarios:</label>
                        <textarea class="form-control" rows="3" id="tick_coment" name="tick_coment"></textarea>
                    </div>
                </div>
            </section>
            <section class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-info" id="btnguardar">Enviar</button>
                </div>
            </section>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <script src="../../public/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
    <script src="encuesta.js"></script>
    <script>
    $("#tick_estre").rating({
        showCaption: false
    });


    $('#tick_estre').on('rating.change', function() {
        console.log($('#tick_estre').val());
    });
    </script>
</body>

</html>