var usu_id = $('#usu_idx').val();

$(document).ready(function(){
    $.post("../../controller/usuario.php?op=mostrar_perfil", {usu_id:usu_id }, function (data) {
        data = JSON.parse(data);
        $('#usu_nom').val(data.usu_nom);
        $('#usu_apep').val(data.usu_apep);
        $('#usu_apem').val(data.usu_apem);
        $('#usu_correo').val(data.usu_correo);
        $('#usu_pass').val(data.usu_pass);
        $('#usu_sex').val(data.usu_sex).trigger("change");
        $('#usu_telf').val(data.usu_telf);
        $('#usu_gra').val(data.usu_gra).trigger("change");
        $('#usu_grup').val(data.usu_grup).trigger("change");
        $('#usu_gef').val(data.usu_gef).trigger("change");

    });
}); 

$(document).on("click","#btnactualizar", function(){

    $.post("../../controller/usuario.php?op=update_perfil", { 
        usu_id : usu_id,
        usu_nom : $('#usu_nom').val(),
        usu_apep : $('#usu_apep').val(),
        usu_apem : $('#usu_apem').val(),
        usu_pass : $('#usu_pass').val(),
        usu_sex : $('#usu_sex').val(),
        usu_telf : $('#usu_telf').val(),
        usu_gra : $('#usu_gra').val(),
        usu_grup: $('#usu_grup').val(),
        usu_gef: $('#usu_gef').val()
     }, function (data) {
    });

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
        text: 'Se actualizo Correctamente sus datos',
      })
    
});


$(function(){
    $(".usu_telf").keydown(function(event){
        //alert(event.keyCode);
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
});
