<?php
include("../../clases/Usuario.php");
include("../validar/sesion.php");
?>
<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PASTER PAN | CARGA IMAGEN</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="../../css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="../../css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="../../css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="../../css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
     <!-- Ladda style -->
    <link href="../../css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="../../css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- File input -->
    <link href="../../css/fileinput.min.css" rel="stylesheet">

    <!--<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">-->

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <!--<img alt="image" class="rounded-circle" src=""/>-->
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php $usu=$_SESSION["usuario"]; echo $usu->getNombreapellido();?></span>
                            
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">                          
                            <li><a class="dropdown-item" href="../validar/cerrarsesion.php">Salir</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                       Master Pan
                    </div>
                </li>
                <li>
                    <a href="principal.php"><i class="fa fa-th-large"></i> <span class="nav-label">Entidades</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                       <li><a href="imagenes.php">Imagenes</a></li>
                        <!--<li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 </a></li>-->
                    </ul>
                </li>  
                <li class="special_link">
                    <a href="principal.php"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Pedidos</span></a>
                </li>
                <!--<li class="special_link">
                    <a href="listapedido.php"><i class="fa fa-clipboard"></i> <span class="nav-label">Lista Pedidos</span></a>
                </li>-->
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>           
            </div>
            <ul class="nav navbar-top-links navbar-right">  
                <li>
                    <a href="../validar/cerrarsesion.php">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="row">
            <div class="col-lg-12" >               
              
               
            </div>
          
        </div>
        <div class="wrapper wrapper-content ">
            <div class="tabs-container">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Registrar imagen
                </button>
                <hr>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cargar imagen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form id="fmrImagen" name="fmrImagen" enctype="multipart/form-data" method="post"> 
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" autocomplete="false" required id="nombre" name="nombre" placeholder="Nombre">
                                </div>   
                                <input id="file"  data-show-upload="false" data-show-caption="true" name="file" type="file" class="file" data-browse-on-zone-click="true" data-show-preview="true">
                            </form>
                        </div>
                        <div class="modal-footer">
                        <a href="#" id="form-submit" class="btn btn-primary btn-lg ladda-button" data-style="slide-up" data-size="l"><span class="ladda-label">Guardar</span></a>
                        </div>
                    </div>
                    </div>
                </div>
                <b>Listado de fotos</b>
                <br>
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <div class="table-responsive">
                            <table  id="example" class="table table-striped table-bordered table-hover dataTables-example" >
                        
                        
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">            
            <div>
                <strong>Copyright</strong> Master Pan &copy; <?php echo date("Y");?>
            </div>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="../../js/jquery-3.1.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../../js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
    <script src="../../js/spinner.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="../../js/inspinia.js"></script>
    <script src="../../js/plugins/pace/pace.min.js"></script>
    <script src="../../js/plugins/toastr/toastr.min.js"></script>
     <!-- Ladda -->
     <script src="../../js/plugins/ladda/spin.min.js"></script>
    <script src="../../js/plugins/ladda/ladda.min.js"></script>
    <script src="../../js/plugins/ladda/ladda.jquery.min.js"></script>
     <!-- Data picker -->
    <script src="../../js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <!-- Clock picker -->
    <script src="../../js/plugins/clockpicker/clockpicker.js"></script>
    <!-- iCheck -->
    <script src="../../js/plugins/iCheck/icheck.min.js"></script>
    <!--<script src="../../js/pedidos.js"></script>-->
    <!-- Sweet alert -->
    <script src="../../js/plugins/sweetalert/sweetalert.min.js"></script>
     <!-- File input -->
     <script src="../../js/fileinput.min.js"></script>
    
    <script>
        $(function(){
           

            table=$('#example').DataTable({
                pageLength: 15,
                responsive: true,
                scrollY:        '50vh',
                scrollCollapse: true,
                "bPaginate": true,
                "bLengthChange": true,
                "sAjaxSource"   : "../listarimagen.php",
                "aaSorting": [[ 0, 'asc' ]],
                "aoColumns": [
                
                    { "sTitle": "ID"},
                    { "sTitle": "Nombre"},
                    { "sTitle": "Imagen",
                        
                        "render": function (data, type, full, meta) {
                            /*if(type === "display"){
                            return '<img src="' + data + '">';
                            } else {
                            return data;  
                            }*/
                            return '<img src="'+data+'" style="height:100px;width:100px;"/>';
                        }
                    },                    
                    { "sTitle": "Opción","sWidth": "50px" , "sClass": "center"}
                ]
            
                

            });
        
            $('#form-submit').click(function(e){
                e.preventDefault();
                var l = Ladda.create(this);
              

                var formData = new FormData($('#fmrImagen')[0]);

                $.ajax({                   

                    type: 'post',
                    url: '../registrarimagen.php',
                    data: formData ,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,             
                    beforeSend: function(){
                        l.start();              
                        
                    },

                    success: function(response){
                        if(response != null){
                            l.stop();
                            swal("Mensaje!", "Imagen registrada...!", "success");
                            $("#exampleModal").modal('hide');
                            $('#fmrImagen')[0].reset();
                      
                        }else{
                            alert('file not uploaded');
                        }
                    },
                });
               

                
                
            });

           
            /**
            * Carga imagen  
            */ 
            $("#file").fileinput({
                showPreview: false,
                showUpload: false,
                elErrorContainer: '#kartik-file-errors',
                allowedFileExtensions: ["jpg", "png", "gif"]
                //uploadUrl: '/site/file-upload-single'
            });
            

        });

       
      
    </script>
    <style>
       div.dataTables_filter {
          width: 100%;
          float: none;
          text-align: center;
        }
    </style>
</body>

