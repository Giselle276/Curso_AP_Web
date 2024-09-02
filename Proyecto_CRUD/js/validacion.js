
$(document).ready(function () {
    // aquí pon el código que te proporciono de el plugin validator, al tiempo que le poner comentarios explicando lo que entiendas
     $("#form_registro").validate(
        {
            rules: {
                email:{
                    required:true,
                    email:true,
                },
                password:{
                    required:true,
                    minlength: 8,
                    maxlength: 16,
                    
                  
                },
                // confirma:{
                //     equalTo:"#password"
                     
                // }
                // ,
                nombre:{
                    required:true
                }
                ,
                celular:{
                    required:true,
                    minlength: 9,
                    maxlength: 9,
                }
                ,
                apellido:{
                    required:true
                }

            },
            messages:{
                email:{
                    required:"<br>Introduce E_mail,por favor"
                },
                password:{
                    equalTo:"<br>No coinciden las contraseñas",
                    required:"<br>Por favor ingrese su contraseña",
                    minlength: "<br>Tu contraseña debe tener mínimo 8 caracteres.",
                    maxlength: "<br>Tu contraseña debe tener máximo 16 caracteres."
                },
                // confirma:{
                //     equalTo:"<br>La contraseña no es igual a la ingresada, verificar",
                // }
                // ,
                // errorplacement:function(error,element){
                //     if(element.is(":radio")|| element.is(":checkbox")){
                //         error.appendTo(element.parent());
                   
                //     }else{
                //         error.insertAfter(element);

                //     }
                // }
                // ,
              
                nombre:{
                    required:"<br>Ingrese su nombre<br>"
                }
                ,
                celular:{
                    required:"<br>Ingrese su celular<br>",
                    minlength: "<br>El celular debe tener mínimo 9 caracteres.",
                    maxlength: "<br>El celular debe tener máximo 9 caracteres."
                }
                ,
                apellido:{
                    required:"<br>Ingrese su apellido<br>"
                }
            }
        }
     )  
});

