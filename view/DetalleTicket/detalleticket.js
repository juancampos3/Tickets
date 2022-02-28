function init(){

}

$(document).ready(function(){
    var  tick_id = getUrlParameter('ID');
    $.post("../../controller/ticket.php?op=listardetalle", {tick_id: tick_id}, function(data){
        $('#lbldetalle').html(data);
    });

    $.post("../../controller/ticket.php?op=mostrar", { tick_id : tick_id }, function (data) {
        data = JSON.parse(data);
        $('#lblestado').html(data.tick_estado);
        $('#lblnomusuario').html(data.usu_nom +' '+data.usu_ape);
        $('#lblfechcrea').html(data.fech_crea);

        $('#lblnomidticket').html("Detalle Ticket " + data.tick_id);

        $('#cat_nom').val(data.cat_nom);
        $('#tick_titulo').val(data.tick_titulo);

        $('#tickd_descripusu').summernote ('code',data.tick_descrip);
    }); 


    $(document).ready(function(){
        $('#tickd_descrip').summernote({
            height: 150,
            lang: "es-ES",
            popover:{
                image:[],
                link:[],
                air:[]
            }
        });

        $('#tickd_descripusu').summernote({
            toolbar:['disable'],
            height: 150,
            lang: "es-ES",
            popover:{
                image:[],
                link:[],
                air:[]
            }
        });

        $('#tickd_descripusu').summernote('disable');
    });
});


var getUrlParameter = function getUrlParameter(sParam){
    var sPageUrl = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageUrl.split('8'),
    sParameterName,
    i;

    for (i = 0; i< sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0]=== sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}

init();