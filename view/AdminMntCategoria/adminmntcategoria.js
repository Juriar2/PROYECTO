
var usu_id = $('#usu_idx').val();

function init(){
    $("#categoria_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#categoria_form")[0]);
    $.ajax({
        url: "../../controller/categoria.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){

            $('#categoria_data').DataTable().ajax.reload();
            $('#modalmantenimiento').modal('hide');

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'success',
                text: 'Se ha registrado correctamente',
              })
        }
    });
}

$(document).ready(function(){

    $('#categoria_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"../../controller/categoria.php?op=listar",
            type:"post"
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
        "order": [[ 0, "desc" ]],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
    });

});

function editar(cat_id){
    $.post("../../controller/categoria.php?op=mostrar",{cat_id : cat_id}, function (data) {
        data = JSON.parse(data);
        $('#cat_id').val(data.cat_id);
        $('#cat_nom').val(data.cat_nom);
    });
    $('#lbltitulo').html('Editar Registro');
    $('#modalmantenimiento').modal('show');
}

function eliminar(cat_id){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: true
      })
      
      swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No podrás revertir esto.!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'si, eliminarlo!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
            if (result.value) {
                $.post("../../controller/categoria.php?op=eliminar",{cat_id : cat_id}, function (data) {
                    $('#categoria_data').DataTable().ajax.reload();
    
                    
                });
            }
        }
        if (result.isConfirmed) {
          swalWithBootstrapButtons.fire(
            'Eliminado!',
            'Su el resgistro ha sido elimindo.',
            'success'
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelar',
            'Se cancelo la elminacion :)',
            'info'
          )
        }
      })
}

function nuevo(){
    $('#cat_id').val('');
    $('#lbltitulo').html('Nuevo Registro');
    $('#categoria_form')[0].reset();
    $('#modalmantenimiento').modal('show');
}

init();

$(document).ready(function(){  
    //Para mostrar un modal
    shortcut.add("Ctrl+Q",function() {
         $('#modalmantenimiento').modal('show');
    });

    shortcut.add("Esc",function() {
        $('#modalmantenimiento').modal('hide');
   });
  
});