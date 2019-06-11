function listar_usuarioxempresa(){

    $.ajax({
        data:  {},
        url:   'vistas/listarusuario.php',
        dataType: 'json',
        type:  'post',       
        success:  function (response) {
            
            var arreglo_usuario=response;          
       
            if(arreglo_usuario!=null){

                if(arreglo_usuario.length>0){

                    for(var i=0;i<arreglo_usuario.length;i++){

                        $("#id_usuario").append($("<option>",
                        {
                           value: arreglo_usuario[i].cuenta,
                           text : arreglo_usuario[i].cuenta
                       }));
                    }
                }
            }           
        }
    });

}

function buscar_usuarioxcuentaclave(){
  
    var cuenta="";
    var clave="";    

    cuenta=$("#id_usuario").val();
    clave=$("#id_clave").val();   

    if(cuenta.length>0 && clave.length>0){
   
            $.ajax({
                data:  {cuenta:cuenta,clave:clave},
                url:   'vistas/ingreso.php',
                dataType: 'json',
                type:  'post',       
                success:  function (response) {
                    
                    var usuario=response;          

                    if(usuario!=null){
                        
                        if(usuario.length>0){

                           if(usuario[0].idusuario>0){

                                window.location.href = 'vistas/pedido/principal.php';
                           }
                           else{

                                Swal(
                                    'Error de usuario y contraseña',
                                    'Por favor intente nuevamente...',
                                    'error'
                                );
                           }
                           
                        }else{

                            Swal(
                                'Error de usuario y contraseña',
                                'Por favor intente nuevamente...',
                                'error'
                            );

                        }

                    }else{

                        Swal(
                            'Error de usuario y contraseña',
                            'Por favor intente nuevamente...',
                            'error'
                        );

                    }           
                }
            });

     }else{

        Swal(
            'Error de usuario y contraseña',
            'Por favor intente nuevamente...',
            'error'
        );
     }
}