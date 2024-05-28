var usu_id = $('#usu_idx').val();

function init(){
    $("social_media_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#social_media_form")[0]);

    $.ajax({
        url:"../../controller/social_media.php?opc=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(data){
            console.log(data);
            $('#social_media_data').DataTable().ajax.reload();
            $('#modalcrearRedes').modal('hide');

            SVGFEDropShadowElement.fire({
                title: 'Correcto',
                text: 'Se registro Correctamente',
                icon: 'sucess',
                confirmButtonText: 'Aceptar'
            })
        }
    });
}

$(document).ready(function(){
    $('social_media_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url: "../../controller/social_media.php?opc=listar",
            type:"post"
        },
    })
});