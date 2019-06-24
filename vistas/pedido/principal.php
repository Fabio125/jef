<?php
include("../../clases/Usuario.php");
include("../validar/sesion.php");
?>
<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Basic Form</title>

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
                            <span class="block m-t-xs font-bold">David Williams</span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                    </ul>
                </li>  
                <li class="special_link">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                </li>
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
                    <a href="#">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="row">
            <div class="col-lg-12" >                
              
                <ol class="breadcrumb flex-row flex-nowrap" style="overflow: scroll;" >
                    <button class="btn btn-outline btn-primary dim" id="referencia" data-id-referencia="F1" type="button"><i class="fa fa-check"></i> F1</button>
                    <button class="btn btn-outline btn-success  dim" id="referencia" data-id-referencia="F2" type="button"><i class="fa fa-upload"></i> F2</button>
                    <button class="btn btn-outline btn-info  dim" id="referencia" data-id-referencia="F3" type="button"><i class="fa fa-paste"></i> F3</button>
                    <button class="btn btn-outline btn-warning  dim" id="referencia" data-id-referencia="F4" type="button"><i class="fa fa-warning"></i> F4</button>
                    <button class="btn btn-outline btn-danger  dim "id="referencia" data-id-referencia="F5"  type="button"><i class="fa fa-heart"></i> F5</button>
                    <button class="btn btn-outline btn-primary dim" id="referencia" data-id-referencia="F6" type="button"><i class="fa fa-check"></i> F6</button>
                    <button class="btn btn-outline btn-success  dim" id="referencia" data-id-referencia="F7" type="button"><i class="fa fa-upload"></i> F7</button>
                    <button class="btn btn-outline btn-info  dim" id="referencia" data-id-referencia="F8" type="button"><i class="fa fa-paste"></i> F8</button>
                    <button class="btn btn-outline btn-warning  dim" id="referencia" data-id-referencia="F9" type="button"><i class="fa fa-warning"></i> F9</button>
                    <button class="btn btn-outline btn-danger  dim "id="referencia" data-id-referencia="F10"  type="button"><i class="fa fa-heart"></i> F10</button>
                    <button class="btn btn-outline btn-warning  dim" id="referencia" data-id-referencia="F11" type="button"><i class="fa fa-warning"></i> F11</button>
                    <button class="btn btn-outline btn-danger  dim "id="referencia" data-id-referencia="F12"  type="button"><i class="fa fa-heart"></i> F12</button>                    
                    <button class="btn btn-outline btn-success  dim" id="referencia" data-id-referencia="R" type="button"><i class="fa fa-upload"></i> R</button>
                    <button class="btn btn-outline btn-info  dim" id="referencia" data-id-referencia="G" type="button"><i class="fa fa-paste"></i> G</button>
                    <button class="btn btn-outline btn-warning  dim" id="referencia" data-id-referencia="B" type="button"><i class="fa fa-warning"></i> B</button>
                    <button class="btn btn-outline btn-danger  dim "id="referencia" data-id-referencia="H"  type="button"><i class="fa fa-heart"></i> H</button>
                    <button class="btn btn-outline btn-warning  dim" id="referencia" data-id-referencia="P" type="button"><i class="fa fa-warning"></i> P</button>
                    <button class="btn btn-outline btn-danger  dim "id="referencia" data-id-referencia="Q"  type="button"><i class="fa fa-heart"></i> Q</button>

                </ol>
            </div>
          
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="tabs-container">
                <form id="fmrPedido" name="frmPedido" method="post">
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-6"> Pedidos</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-7">Datos adicionales</a></li>
                        </ul>
                        <div class="tab-content ">
                            <div id="tab-6" class="tab-pane active fadeInRight">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ibox ">                                           
                                                <div class="row">
                                                    <div class="col-sm-12 b-r">
                                                        <div class="table-responsive">
                                                            <table  id="example" class="table table-striped table-bordered table-hover dataTables-example" >
                                                        
                                                        
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover" id="tablaDetalle">
                                                                <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Descripci&oacute;n</th>
                                                                    <th>IdUnidad</th>
                                                                    <th>Unidad</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Precio</th>
                                                                    <th>Total</th>
                                                                    <th>#</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>                                           
                                            </div>
                                        </div>               
                                    </div>
                                    <div class="text-center">
                                        <a href="#" id="form-submit" class="btn btn-primary btn-lg ladda-button" data-style="slide-up" data-size="l"><span class="ladda-label">Guardar</span></a>
                                        <button type="reset"  class="btn btn-danger btn-lg ">Cancelar</button>
                                    </div> 
                                </div>
                            </div>
                            <div id="tab-7" class="tab-pane fadeInRight">
                                <div class="panel-body">
                                   <div class="row">
                                        <div class="form-group">
                                            <label>Documento</label> 
                                            <div class="input-group number">
                                                <input type="text" autocomplete="false" id="doccliente" name="doccliente" placeholder="00000000" class="form-control" required>
                                                <div class="input-group-append">
                                                    <a href="#" id="buscaCliente" class="btn btn-primary btn-lg ladda-button" data-style="slide-up" data-size="l"><span id="icono" class="fa fa-search"></span></a>
                                                    &nbsp;<a href="#" id="guardaCliente" style="display:none" class="btn btn-info btn-lg ladda-button" data-style="slide-up" data-size="l"><span id="icono" class="fa fa-save"></span></a>                                                                                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label>Cliente </label> <input type="text" autocomplete="false" placeholder="Cliente" class="form-control col-md-12" name="cliente" id="cliente" required>
                                        <input type="hidden" class="form-control" name="codcliente" id="codcliente" >
                                        </div>
                                        <div class="form-group"><label>Direcci&oacute;n</label> <input type="text"  autocomplete="false" placeholder="Dirección" class="form-control" id="direccion"name="direccion"></div>                                        
                                        <div class="form-group"><label>Fecha Recojo</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" readonly class="form-control" id="fpedido" value="<?php echo date("d/m/Y")?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Hora Recojo</label>    
                                            <div class="input-group clockpicker" data-autoclose="true">
                                                <input type="text" readonly class="form-control" value="09:30" >
                                                <span class="input-group-addon">
                                                    <span class="fa fa-clock-o"></span>
                                                </span>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                   <div class="form-group"><label>Dato Adicional</label><textarea id="descripcion" name="descripcion"  class="form-control col-xs-12" rows="7" cols="50" maxlength="255"></textarea></div>    
                                   </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
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
    <script src="../../js/pedidos.js"></script>
    
    <script>
        $(function(){
           

            $('#form-submit').click(function(e){
                e.preventDefault();
                var l = Ladda.create(this);
                l.start();
                setTimeout(function(){
                    l.stop();
                },2000)
                /*$.post("your-url", 
                    { data : data },
                function(response){
                    console.log(response);
                }, "json")
                .always(function() { l.stop(); });
                return false;*/
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

