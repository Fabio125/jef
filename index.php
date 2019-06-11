<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>Servicio de Pedido</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <script src="js/jquery-3.4.1.min.js"></script>
   <script src="js/sweetalert2.all.min.js"></script>
   <script src="js/usuario.js"></script>
</head>

<body onload="listar_usuarioxempresa()">
   <div class="container animated fadeInLeft">
      <div class="row text-center login-page">
         <div class="col-md-12 login-form">

            <div class="row">

            <div class="col-md-12 login-form-header">
                  <p class="login-form-font-header">Panaderia<p>
               </div>

             <div class="col-md-12 login-form-header">
                  <img src="img/panes.png" class="img-circle img-fluid">
               </div>
               
               <div class="col-md-12 login-form-header">
                  <p class="login-form-font-header"><span> "Cacho Rico"</span>
                     <p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 login-from-row">
                  <div class="container-fluid">
                     <select id="id_usuario" class="form-control">
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 login-from-row">
                  <div class="container-fluid">
                     <input class="form-control" id="id_clave" type="password" placeholder="Contraseña" required />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 login-from-row">
                  <button class="btn btn-info" onclick="buscar_usuarioxcuentaclave()">Entrar</button>
               </div>
            </div>

         </div>
      </div>
   </div>
</body>

</html>