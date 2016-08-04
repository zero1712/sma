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
       <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 3)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>
                    <a href="<?php echo base_url();?>index.php/registro/goIndex"><i class="fa fa-plus-square-o"></i> <span class="nav-label">Registro</span></a>
                      <?php }?>
                      <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)){?>
                    <a href="<?php echo base_url();?>index.php/registro/registros"><i class="fa fa-male"></i> <span class="nav-label">Peticiones</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_contactado"><i class="fa fa-phone"></i> <span class="nav-label">Contactados</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_na"><i class="fa fa-times"></i> <span class="nav-label">N/A</span></a>
                      <?php }?>
                           <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>

                    <a href="<?php echo base_url();?>index.php/agenda/"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda</span></a>
                    <?php }?>
                                               <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>

                    <a href="#"><i class="fa fa-university"></i> <span class="nav-label">Audiencias</span></a>
<?php }?>
                                                                 <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)){?>

                    <a href="#"><i class="fa fa-folder-o"></i> <span class="nav-label">Administración</span></a>
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
                    <h2>Consulta administración</h2>
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
                            <h5>Consulta de administracion</h5>
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

               <div class="modal inmodal" id="datos_administracion" tabindex="-1" role="dialog"  aria-hidden="trie">
                                <div class="modal-dialog  modal-lg">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                                            <div id="datos_del_peticionario">
                                            <i class="fa fa-folder-open modal-icon"></i>
                                            </div>
                                            <h4 class="modal-title">Datos de administración</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form enctype="multipart/form-data" method="post" id="form_datos_administracion" name="form_datos_administracion" class="form-vertical">

                               
                                                    

                                                  <div class="hr-line-dashed"></div>
                                                  <div class="row">
         
             <div class="form-group has-success">
                                              
          <label class="col-sm-2 control-label">Fecha de documento:</label>
                                                       <div class="col-sm-10">
                                                <input type="text" class="form-control" id="fecha_documento" name="fecha_documento" rows="3" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)" readonly>                                                                               </div>
             
        
                                    </div>
                          
                                      
                                        </div>
                                                <div class="hr-line-dashed"></div>
                                    <div class="row">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Remintente:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="remitente" name="remitente" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>   
             </div>
            <br>
        
                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Cargo:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cargo" name="cargo"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
          <label class="col-sm-2 control-label">Dependencia:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="dependencia" name="dependencia"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
       
                                    </div>
        </div>
              <br>  
           
                                                                                        <div class="row">
    <div class="form-group has-success">
                            <label class="col-sm-2 control-label">Destinatario:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="destinatario" name="destinatario" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" readonly>
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
            
                             
                                            
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

   <div class="row" style="display:none">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">ID:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="id_administracion" name="id_administracion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>   
             </div>
                                                  <div class="row" style="display:none">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">ID:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="id_documento" name="id_documento" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>   
             </div>
                                              </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            <button id="btt_update" name="btt_update" type="button" class="btn btn-primary" >Guardar</button>

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
					url:"<?php echo base_url(); ?>" + "index.php/registro/getAdministracion",
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
                colNames:['id_documento','id_administracion','Fecha de registro','Fecha documento','Folio', 'Numero de documento', 'Remitente','Asunto','Tipo de escrito','Dependencia','Cargo','Destinatario','seguimiento'],
                colModel:[
                    {name:'id_documento',index:'id_documento', editable: true, width:60, sorttype:"int",search:true,hidden: true},
                    {name:'id_administracion',index:'id_administracion', editable: true, width:60, sorttype:"int",search:true,hidden: true},
                    {name:'fecha_entrada',index:'fecha_entrada', editable: true, width:40, sorttype:"date", formatter:"date",formatoptions: {srcformat: 'Y-m-d H:i:s', newformat:'d/m/Y - g:i A'},hidden:false},
                     {name:'fecha_documento',index:'fecha_documento', editable: true, width:40, sorttype:"date", formatter:"date",formatoptions: {srcformat: 'Y-m-d H:i:s', newformat:'d/m/Y - g:i A'},hidden:true},
                    {name:'folio_documento',index:'folio_documento', editable: true, width:20,hidden: false},
                    {name:'numero_documento',index:'numero_documento', editable: true, width:30, align:"right",hidden: false},
                    {name:'remitente',index:'remitente', editable: true, width:60,search:true,hidden: false},
                    {name:'asunto',index:'asunto', editable: true, width:60,search:true,hidden: false},
                    {name:'tipo_de_escrito',index:'tipo_de_escrito', editable: true, width:25,search:true,hidden: false,formatter:"select",edittype: 'select',editoptions: { value: 'C.C.P:C.C.P;P.M:P.M',defaultValue: 'IN' },
                        stype: 'select', searchoptions: { sopt: ['eq', 'ne'], value: ':Todos;C.C.P:C.C.P;P.M:P.M' }},
                    {name:'dependencia',index:'dependencia', editable: true, width:60,search:true,hidden: true},
                    {name:'cargo',index:'cargo', editable: true, width:60,search:true,hidden: true},
                    {name:'destinatario',index:'destinatario', editable: true, width:60,search:true,hidden: true},
                    {name:'seguimiento',index:'seguimiento', editable: true, width:60,search:true,hidden: true},


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
                    $("#asunto").val(rowData["asunto"]);
                    $("#seguimiento").val(rowData["seguimiento"]);    
                    $("#fecha_documento").val(rowData["fecha_documento"]);
                    $("#cargo").val(rowData["cargo"]);
                    $("#remitente").val(rowData["remitente"]);
                    if(rowData["tipo_de_escrito"]=="C.C.P"){    
                    $("#destinatario").val(rowData["destinatario"]);
                    }
                    if(rowData["tipo_de_escrito"]=="P.M"){
                    $("#destinatario").val("Presidente Municipal");
   
                    }   
                    $("#dependencia").val(rowData["dependencia"]);
                    $("#id_administracion").val(rowData["id_administracion"]);
                    $("#id_documento").val(rowData["id_documento"]);

                 
                    $('#datos_administracion').modal('show');
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

        
            
                                    }


            
                $("#form_datos_administracion").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registro/updateAdministracion"; 

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
                    

                }else{
                alert("Ocurrio un error al actualizar, intente de nuevo mas tarde.");
                $('#datos_administracion').modal('hide');

                }
         
           }, 
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                } 
         });

    return false; // evitar la ejecucion del form si algo falla
           });

 $('#btt_update').click(function() {
          if (confirm('Desea cambiar los datos?\n ')) { 
         
                    $("#form_datos_administracion").submit();
                        }
          else{
                            
                alert('Se cancelo la actualización de la agenda');
                $('#datos_administracion').modal('hide');



        
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


        
 
        
        
       