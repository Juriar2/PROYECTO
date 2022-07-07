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

$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        
        usu_correo: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          usu_correo: true
        },
        usu_pass: {
          required: true,
          minlength: 15
        }
      },
      // Specify validation error messages
      messages: {
        usu_pass: {
          required: "Por favor proporcione una contraseña",
          minlength: "Su contraseña debe tener al menos 15 caracteres."
        },
        usu_correo: "correo electrónico no válido"
      },
      submitHandler: function(form) {
        hidden.submit();
      }
    });
  });
