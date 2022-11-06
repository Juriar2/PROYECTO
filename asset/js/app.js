/*========================================
Mostrar contraseña
==========================================*/
const mostrarClave=document.querySelectorAll('.mostrarClave');
const inputPass=document.querySelectorAll('.clave');

for (let i = 0; i < mostrarClave.length; i++) {
    
    mostrarClave[i].addEventListener('click',()=>{

        if(inputPass[i].type==="password"){

            //cambiamos el tipo password a text
            inputPass[i].setAttribute('type','text');


            //le agregamos la clase active
            mostrarClave[i].classList.add('active');

        }else{
            //si el tipo de input es text

            //cambiamos el tipo text a password
            inputPass[i].setAttribute('type','password');

             //removemos la clase del icono
            

             
 
             //le agregamos la clase active
             mostrarClave[i].classList.remove('active');
 
        }

    });
}



$(document).ready(function() {
    $('#login02').click(function() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6LddbUkhAAAAABS6nf9K7K4SKbC_ResEqfWBaGmD', {
                
                }).then(function(token) {
                $('#formLogin').prepend('<input type="hidden" name="token" value="' + token + '" >');
                $('#formLogin').prepend('<input type="hidden" name="action" value="validarUsuario" >');
                $('#formLogin').submit();
            });
        });
    });
});

$(function() {
    setTimeout(function(){
      $('body').addClass('loaded');
    },2000);




function loaderF(statusLoader){
  if(statusLoader){
    $("#loaderFiltro").show();
    $("#loaderFiltro").html('<img class="img-fluid" src="asset/images/cargando.svg" style="left:50%; right: 50%; width:50px;">');
  }else{
    $("#loaderFiltro").hide();
    
  }
}
});

