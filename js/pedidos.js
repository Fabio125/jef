var objPedido;
var table,dato="F1";

objPedido={

    /**
     * Carga productos según familias
     */
    CargaProductos: function (){
        table=$('#example').DataTable({
            pageLength: 15,
            responsive: true,
            scrollY:        '50vh',
            scrollCollapse: true,
            "bPaginate": true,
            "bLengthChange": true,
            "sAjaxSource"   : "../listarproductospordepartamento.php?refdepa="+dato,
            "aaSorting": [[ 0, 'asc' ]],
            "aoColumns": [
            
                { "sTitle": "ID"},
                { "sTitle": "Referencia"},
                { "sTitle": "Descipción","sWidth": "auto" ,},  
                { "sTitle": "IdUnidadMedida"},            
                { "sTitle": "Und"},  
                { "sTitle": "Unidad","sWidth": "20px" , }, 
                { "sTitle": "Precio","sWidth": "20px" ,},
                { "sTitle": "Cantidad","sWidth": "20px" ,},
                { "sTitle": "TipoImpuesto"},  
                { "sTitle": "TipoArticulo"},            
                { "sTitle": "UnidadBase"},  
                { "sTitle": "Total","sWidth": "20px" , }, 
                { "sTitle": "Opción","sWidth": "50px" , "sClass": "center"}
            ], "columnDefs": [
                {
                    "targets": [ 0,1,3,4,8,9,10 ],
                    "visible": false,
                    "searchable": false
                }
            ]
          
            

        });
    },
    /**
     * 
     * @param {} event 
     */
    AgregaDetalle: function(event){

        var fila="";
        var table1=$('#example').DataTable();

        var data = table1.row(event.parents('tr')).data();
        var currentRow=event.closest("tr");  //Para capturar el input
        var tTotal=currentRow.find("td:eq(4)").text();
        fila='<tr><td>'+data[0]+'</td>';
        fila+='<td>'+data[2]+'</td>';
        fila+='<td>'+data[3]+'</td>';
        fila+='<td>'+data[5]+'</td>';
        fila+='<td><b>'+data[6]+'</b></td>';
        fila+='<td><b>'+currentRow.find("input").val()+'</b></td>';
        fila+='<td><b>'+parseFloat(tTotal)+'</b></td>'; //Captura total
        fila+='<td><button class="btn btn-outline btn-danger  btn-xs" id="borrarDetalle" type="button"><i class="fa fa-minus-circle"></i> </button></td>';
        fila+='</tr>';
       
       if(parseFloat(tTotal)<=0){
            toastr.options.progressBar = true; 
            toastr.options.positionClass = "toast-top-left"; 
            toastr.error('Ingrese cantidad correcta');
            return;
       }{
            $('#tablaDetalle tbody ').append(fila);
            $('#tablaDetalle td:nth-child(3),#tablaDetalle th:nth-child(3)').hide();
       }
        
    },

    /**
     *Busca cliente por numero de documento 
     */
    BuscaCliente: function(){
        $.ajax({
            url:"../vistas/listarclientepordocumento.php",
            type:"post",
            data:{"documento":00000000},   
           
            beforeSend:function(){
               //Esperar();
            },
            success:function(data){                 
                //$.unblockUI();
                data = eval("("+data+")"); 
                                           
                if(typeof data.success2 != "undefined"){                     
                    if(data.errors==0){  
                        
                      
                        
                    }else{
                        /*swal("Error", "Whoops! Ocurrió un error durante el proceso..!", "error");               
                        $.unblockUI();
                        console.log(data); */ 
                    }
                }else{
                    /*swal("Error", "Whoops! Ocurrió un error durante el proceso..!", "error");               
                    $.unblockUI();
                    console.log(data);  */
                }
                
               

             },
             error:function(data){
                swal("Error", "Whoops! Ocurrió un error durante el proceso..!", "error");               
                $.unblockUI();
                console.log(data);         
                  
             }


        }); 
    
    }
};

$(document).ready(function(){
    jQuery('.breadcrumb').css("overflow-x", "scroll");
    
    $("body input[type='number']").ready().inputSpinner();


    $('#fpedido').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });

    $('.clockpicker').clockpicker();

    /*
    *Carga productos
    */
    objPedido.CargaProductos();

    /**
     * Calcula totales
     */
    $('#example tbody ').on('keyup','#cantidad',function(e){
        var cantidad=parseFloat($(this).val()),
        precio=parseFloat($(this).attr("data-id-precio"));
        calculaTotal(cantidad,precio,$(this));                
       
    });

    $('#example tbody ').on('change','#cantidad',function(e){
        var cantidad=parseFloat($(this).val()),
        precio=parseFloat($(this).attr("data-id-precio"));
        calculaTotal(cantidad,precio,$(this));                
       
    });

    /**
     * Filtra productos según familia
     */
    $('body').on('click','#referencia',function(e){
        var dato=$(this).attr("data-id-referencia");
        table.ajax.url("../listarproductospordepartamento.php?refdepa="+dato ).load();
    });

    /**
     * Agregar producto al detalle de pedido
     */
    $('#example tbody ').on('click','#agregaDetalle',function(e){
        e.preventDefault();
        
        objPedido.AgregaDetalle($(this));
       
    });
    /**
     * Borrar item del detalle
     */
    $(document).on('click', '#borrarDetalle', function (event) {
        event.preventDefault();  
        $(this).closest('tr').remove();
        toastr.options.progressBar = true; 
        toastr.options.positionClass = "toast-top-left"; 
        toastr.success('Registro eliminado');
      

    });

    /**
     * Buscar cliente por tipo documento
     */
    $("#buscaCliente").on("click",function(e){
        e.preventDefault();

        objPedido.BuscaCliente();
    });
   
});

/**
 * 
 * @param {float} cantidad 
 * @param {float} precio 
 * @param {*} dato 
 * Calcula total
 */
function calculaTotal(cantidad,precio,dato){
    var total=0;
    total= parseFloat(cantidad * precio);
    
    var cells = dato.closest('tr').children('td');
    if(isNaN(total)){
        cells.eq(4).text("0.00");
    }else{
        cells.eq(4).text((total.toFixed(2)));
    }
    
}

/*
 toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": true,
        "preventDuplicates": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "7000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }

        // for success - green box
toastr.success('Success messages');

// for errors - red box
toastr.error('errors messages');

// for warning - orange box
toastr.warning('warning messages');

// for info - blue box
toastr.info('info messages');
*/