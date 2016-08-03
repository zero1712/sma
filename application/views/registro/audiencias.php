<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>INSPINIA | jqGrid</title>

    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/jqGrid/ui.jqgrid.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

    <style>
        /* Additional style to fix warning dialog position */
        #alertmod_table_list_2{
            top: 900px !important;
        }
        

}
    </style>
 <!-- -------------------------- chat  ------------------------------ -->
 
 <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?44cPfbnM4alkYMHZG3eSs3f4g7L19VDI";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
    
</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">BuscarV</strong>
                             </span> <span class="text-muted text-xs block">Prueba <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Salir</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                       SMA+
                    </div>
                </li>
                <li class="active">
                        <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>
                    <a href="<?php echo base_url();?>index.php/registro/goIndex"><i class="fa fa-plus-square-o"></i> <span class="nav-label">Registro</span></a>
                      <?php }?>
                      <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 3)){?>
                    <a href="<?php echo base_url();?>index.php/registro/registros"><i class="fa fa-male"></i> <span class="nav-label">Peticiones</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_contactado"><i class="fa fa-phone"></i> <span class="nav-label">Contactados</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_na"><i class="fa fa-times"></i> <span class="nav-label">N/A</span></a>
                      <?php }?>
                           <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>

                    <a href="<?php echo base_url();?>index.php/agenda/"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda</span></a>
                    <?php }?>
                                               <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)){?>

                    <a href="#"><i class="fa fa-university"></i> <span class="nav-label">Audiencias</span></a>
<?php }?>





                </li>

            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
     <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="<?php echo base_url();?>index.php/registro/logout">
                            <i class="fa fa-sign-out"></i> Salir
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Consulta audiencias</h2>
                 <p>
                    <strong>Dar doble click a algún renglón para acceder a toda su información.</strong>
                    </p>
                </div>
            </div>
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Consulta de audiencias</h5>
                        </div>
                        <div class="ibox-content">
                           <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Historial de audiencias</h5>
                </div>
                <div class="ibox-content inspinia-timeline">
                </div>
            </div>
        </div>
                        </div>
                        <div class="ibox-content">
                      
                            <p><strong>
                              Para realizar una búsqueda, ingresar el texto a buscar en los filtros ubicados arriba de cada columna, la búsqueda se realizara por coincidencia y por búsqueda exacta.
                            </strong></p>

                            <div class="jqGrid_wrapper ">
                                <table class="table-striped" id="table_list_2"></table>
                                <div id="pager_list_2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <div class="footer">
            <div class="pull-right">
                <strong>SAN MATEO ATENCO</strong> 
            </div>
            <div>
                <strong>Copyright</strong> BuscarV &copy; 2016
            </div>
        </div>

               <div class="modal inmodal" id="datos_peticion" tabindex="-1" role="dialog"  aria-hidden="trie">
                                <div class="modal-dialog  modal-lg">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                            <div id="datos_del_peticionario">
                                            <i class="fa fa-male modal-icon"></i>
                                            </div>
                                            <h4 class="modal-title">Datos de la audiencia</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form enctype="multipart/form-data" method="post" id="form_datos_peticion" name="form_datos_peticion" class="form-vertical">

                               
                                                    

                                                  <div class="hr-line-dashed"></div>
                                    <div class="row">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Nombre(s):</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="nombre" name="nombre" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>   
             </div>
            <br>
            <div class="row">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Apellido paterno:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="apellido_p" name="apellido_p" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                          <label class="col-sm-2 control-label">Apellido materno:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="apellido_m" name="apellido_m" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>   
             </div>
                        <br>                <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Cargo:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="cargo" name="cargo"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
       
                                    </div>
        </div>
              <br>  
                                          <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Telefono Casa:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="casa" name="casa"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
             <label class="col-sm-2 control-label">Telefono Celular:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cel" name="cel" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
            
                                    </div>
        </div>
         <br>
                                                                                        <div class="row">
    <div class="form-group has-success">
                            <label class="col-sm-2 control-label">Calle y Numero:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="calle" name="calle" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                   <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Colonia:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="colonia" name="colonia"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Municipio:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="municipio" name="municipio" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div> 
                                          
                                 <div class="hr-line-dashed"></div>
                                           <b>  <small><p> Datos de la audiencia</p></small> </b>
                                <div class="hr-line-dashed"></div>

                                                

              <div class="row">
    <div class="form-group has-success">
                                    
                                
          <label class="col-sm-2 control-label">Asunto:</label>
                                                       <div class="col-sm-4">
                                                <textarea class="form-control" id="asunto" name="asunto" rows="3" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
                        <label class="col-sm-2 control-label">Seguimiento:</label>

                                        <div class="col-sm-4">
                                                <textarea class="form-control" id="seguimiento" name="seguimiento" rows="3" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
        
                                    </div>
                            
                            
        </div>
                                              <br>
   
         <br>
          <div class="row">
         
             <div class="form-group has-success">
                                              
          <label class="col-sm-2 control-label">Fecha de audiencia:</label>
                                                       <div class="col-sm-10">
                                                <input type="text" class="form-control" id="fecha_audiencia" name="fecha_audiencia" rows="3" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)">                                                                               </div>
             
        
                                    </div>
                          
                                      
                                        </div>
                                              <br>

           
                                        <div class="hr-line-dashed"></div>

   <div class="row" style="display:none">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">ID:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="id_datos_generales" name="id_datos_generales" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>   
             </div>
                                                  <div class="row" style="display:none">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">ID:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="id_audiencia" name="id_audiencia" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>   
             </div>
                                              </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </div>  
       



            
        </div> 
    </div>
    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url();?>js/plugins/peity/jquery.peity.min.js"></script>

    <!-- jqGrid -->
    <script src="<?php echo base_url();?>js/plugins/jqGrid/i18n/grid.locale-en.js"></script>
    <script src="<?php echo base_url();?>js/plugins/jqGrid/jquery.jqGrid.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>js/inspinia.js"></script>
    <script src="<?php echo base_url();?>js/plugins/pace/pace.min.js"></script>

    <script src="<?php echo base_url();?>js/plugins/jquery-ui/jquery-ui.min.js"></script>


    <script>
        $(document).ready(function () {

        iniciarComponents();
 var contador=0;
 var lastSel;
        function iniciarComponents(){
                     $.ajax({
					url:"<?php echo base_url(); ?>" + "index.php/registro/getAudiencias",
                    type:"POST",
                    //dataType: 'json', 
					success: function(datos){
                    var mydata=$.parseJSON(datos);
                           // Configuracion de la tabla por ajax
            $("#table_list_2").jqGrid({
                data: mydata,
                datatype: "local",
                height: 400,
                autowidth: true,
                shrinkToFit: true,
                rowNum: 20,
                rowList: [10, 20, 30],
                colNames:['id_audiencia','Fecha de audiencia', 'Asunto de audiencia', 'Seguimiento audiencia','Apellido paterno','Nombre','Apellido materno','Telefono celular','id_datos_generales','Cargo','Telefono casa','Calle y numero','Colonia','Municipio'],
                colModel:[
                    {name:'id_audiencia',index:'id_audiencia', editable: true, width:60, sorttype:"int",search:true,hidden: true},
                    {name:'fecha_audiencia',index:'fecha_audiencia', editable: true, width:40, sorttype:"date", formatter:"date",hidden: false},
                    {name:'asunto_de_audiencia',index:'asunto_de_audiencia', editable: true, width:100,hidden: false},
                    {name:'seguimiento',index:'seguimiento', editable: true, width:40, align:"right",hidden: true},
                    {name:'ap_paterno',index:'ap_paterno', editable: true, width:60,search:true,hidden: false},
                    {name:'nombre',index:'nombre', editable: true, width:60,search:true,hidden: false},
                    {name:'ap_materno',index:'ap_materno', editable: true, width:60,search:true,hidden: true},
                    {name:'tel_celular',index:'tel_celular', editable: true, width:60,search:true,hidden: false},
                    {name:'id_datos_generales',index:'id_datos_generales', editable: true, width:60, sorttype:"int",search:true,hidden: true},
                    {name:'cargo',index:'cargo', editable: true, width:60,search:true,hidden: false},
                    {name:'tel_casa',index:'tel_casa', editable: true, width:60,search:true,hidden: true},
                    {name:'calle_y_numero',index:'calle_y_numero', editable: true, width:60,search:true,hidden: true},
                    {name:'colonia',index:'colonia', editable: true, width:60,search:true,hidden: true},
                    {name:'municipio',index:'municipio', editable: true, width:60,search:true,hidden: true},
                    
                  
                ],
                pager: "#pager_list_2",
                viewrecords: true,
                caption: "Audiencias",
                add: false,
                edit: false,
                addtext: 'false',
                edittext: 'Edit',
                hidegrid: false, 
                onSelectRow: function(rowId,status) {
                    if(rowId && rowId!==lastSel && contador!=0) {
                    $('#table_list_2').restoreRow(lastSel); 
                    lastSel=rowId; 
                   
                    var rowData = jQuery(this).getRowData(rowId);
                     $("#asunto").val(rowData["asunto_de_audiencia"]);
                    $("#seguimiento").val(rowData["seguimiento"]);    
                    $("#fecha_audiencia").val(rowData["fecha_audiencia"]);
                    $("#cargo").val(rowData["cargo"]);
                    $("#cel").val(rowData["tel_celular"]);
                    $("#apellido_p").val(rowData["ap_paterno"]);
                    $("#apellido_m").val(rowData["ap_materno"]);    
                    $("#nombre").val(rowData["nombre"]);
                    $("#cargo").val(rowData["cargo"]);
                    $("#cel").val(rowData["tel_celular"]);
                    $("#casa").val(rowData["tel_casa"]);
                    $("#calle").val(rowData["calle_y_numero"]);
                    $("#colonia").val(rowData["colonia"]);
                    $("#municipio").val(rowData["municipio"]);
                    $("#id_peticiones").val(rowData["id_peticiones"]);
                    $("#id_datos_generales").val(rowData["id_datos_generales"]);

                 
                    $('#datos_peticion').modal('show');
                        }
                     contador=contador+1;
        }
                
            });
					
            // Add selection
            $("#table_list_2").setSelection(4, true);
            // ADD FILTER
            $('#table_list_2').jqGrid('filterToolbar',{defaultSearch:'cn', searchOnEnter:false});   

            // Setup buttons
            $("#table_list_2").jqGrid('navGrid', '#pager_list_2',
                    {edit: false, add: false, del: false, search: true},
                    {height: 200, reloadAfterSubmit: true}
            );
    
            // Add responsive to jqGrid
            $(window).bind('resize', function () {
                var width = $('.jqGrid_wrapper').width();
                $('#table_list_2').setGridWidth(width);
            });	
					}
                    
				});
                                            // Ajax call for timeline data

                           $.ajax({
					url:"<?php echo base_url(); ?>" + "index.php/registro/getAudienciasTimeLine",
                    type:"POST",
                    dataType: 'json', 
					success: function(data){
         var timelineDiv = $('.inspinia-timeline');
                    $.each(data, function (i, item) {
                        addTimelineTask(timelineDiv, item);
                    })
					}
                    
				});
                    

            // Simple function to append new timeline element
            function addTimelineTask(timelineDiv, task) {
                switch (task.Type) {
                      
                   /* case 'Meeting': iconType = "coffee";
                        break;
                    case 'Chat': iconType = "comments";
                        break;
                    case 'File': iconType = "file-text";
                        break;
                    default: iconType = "briefcase";*/
                }
                timelineDiv.append($('<div class="timeline-item">').html('<div class="row"> <div class="col-lg-4 date"><i class="fa fa-' + 'fa fa-briefcase' + '"></i> ' + task.fecha_audiencia + ' <br></div> <div class="col-lg-8  content"><p class="m-b-xs"><strong>' + task.nombre+' '+task.ap_paterno+' '+task.ap_materno+'/'+ task.cargo+ '</strong></p> <p> ' + task.asunto_de_audiencia + '</p> </div> </div>'))
            };
        
            
                                    }


            
                $("#form_datos_peticion").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registro/updatePeticionyDatosById"; 

                $.ajax({
                type: "POST",
                url: url,
                data: formData, // de forma seriada los elementos del form
                mimeType:"multipart/form-data",
                contentType: false,
                cache: false,
                processData:false,
                success: function(data)
           {
                var bandera=$.parseJSON(data);
                if(bandera==true){
                alert("Se actulizaron los datos exitosamente!");
                location.reload();


                $("#datos_peticionario").dialog('close');
                    

                }else{
                alert("Ocurrio un error al actualizar, intente de nuevo mas tarde.");
                $("#datos_peticionario").dialog('close');

                }
         
           }, 
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                } 
         });

    return false; // evitar la ejecucion del form si algo falla
           });

 $('#btt_update').click(function() {
           
            $("#form_datos_peticion").submit();
        });
         
$('#tipo').on('change', function() {
    if($("#tipo").val()=='Materiales/Regalos/Obsequios'){
        $("#datos_materiales").attr("style", "display:block");
    }
    if($("#tipo").val()!='Materiales/Regalos/Obsequios'){
        $("#datos_materiales").attr("style", "display:none");
    }
});

 
        });
 function aMays(e, elemento) {
                        tecla=(document.all) ? e.keyCode : e.which; 
                        elemento.value = elemento.value.toUpperCase();
 }
    </script>


</body>

</html>


        
 
        
        
       