
var usu_id = $('#usu_idx').val();

function init(){
    $("#instructor_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#instructor_form")[0]);
    $.ajax({
        url: "../../controller/instructor.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){

            $('#instructor_data').DataTable().ajax.reload();
            $('#modalmantenimiento').modal('hide');

            Swal.fire({
                title: 'Correcto!',
                text: 'Se Registro Correctamente',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            })
        }
    });
}

$(document).ready(function(){
    

    $('#instructor_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"../../controller/instructor.php?op=listar",
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

function editar(inst_id){
    $.post("../../controller/instructor.php?op=mostrar",{inst_id : inst_id}, function (data) {
        data = JSON.parse(data);
        $('#inst_id').val(data.inst_id);
        $('#inst_nom').val(data.inst_nom);
        $('#inst_apep').val(data.inst_apep);
        $('#inst_apem').val(data.inst_apem);
        $('#inst_correo').val(data.inst_correo);
        $('#inst_sex').val(data.inst_sex).trigger('change');
        $('#inst_telf').val(data.inst_telf);
    });
    $('#lbltitulo').html('Editar Registro');
    $('#modalmantenimiento').modal('show');
}

function eliminar(inst_id){
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
        if(result.value){
            $.post("../../controller/instructor.php?op=eliminar",{inst_id : inst_id}, function (data) {
                $('#instructor_data').DataTable().ajax.reload();
            });
        }
        if (result.isConfirmed) {
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Su el resgistro ha sido eliminado con exito.',
            'success'
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'info',
            'ha cancelado',
            'question'
          )
        }
      })
}

function nuevo(){
    $('#inst_id').val('');
    $('#inst_sex').val('').trigger('change');
    $('#lbltitulo').html('Nuevo Registro instructor');
    $('#instructor_form')[0].reset();
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