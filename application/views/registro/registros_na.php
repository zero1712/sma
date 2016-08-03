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
        
        .ui-dialog
{
background: #0489B1;
}
.ui-dialog .ui-widget-header
{

background: #1ab394;
color: #FFFFFF;
font-family: arial;


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
                    <a href="#"><i class="fa fa-times"></i> <span class="nav-label">N/A</span></a>
                        <?php }?>
                         <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>

                    <a href="<?php echo base_url();?>index.php/agenda/"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda</span></a>

 <?php }?>
                                              <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)){?>

                    <a href="<?php echo base_url();?>index.php/registro/goAudiencias"><i class="fa fa-university"></i> <span class="nav-label">Audiencias</span></a>
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
                    <h2>Contactados</h2>
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
                            <h5>Consulta de registros</h5>
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
                                            <h4 class="modal-title">Datos de la petición</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form enctype="multipart/form-data" method="post" id="form_datos_peticion" name="form_datos_peticion" class="form-vertical">

                                                <div class="row">
    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Fecha del documento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="fecha_documento" name="fecha_documento"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" readonly>
                                        </div>
                                  
                                                    </div></div>
                                                    <br>
    <div class="row">
    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Numero del documento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="numero_documento" name="numero_documento"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" readonly>
                                        </div>
                                        <label class="col-sm-2 control-label">Folio del documento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="folio_documento" name="folio_documento" class="form-control"  onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" readonly>
                                        </div>
                                    </div>
        </div>
         
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
                                           <b>  <small><p> Datos de la petición</p></small> </b>
                                <div class="hr-line-dashed"></div>

                                                

              <div class="row">
    <div class="form-group has-success">
                                    
                                
          <label class="col-sm-2 control-label">Observaciones:</label>
                                                       <div class="col-sm-4">
                                                <textarea class="form-control" id="observaciones" name="observaciones" rows="3" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
                        <label class="col-sm-2 control-label">Petición:</label>

                                        <div class="col-sm-4">
                                                <textarea class="form-control" id="peticion" name="peticion" rows="3" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
        
                                    </div>
                            
                            
        </div>
                                              <br>
         
            <div id="datos_materiales">
                 <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Unidad de medida:</label>

                                        <div class="col-sm-4">
                                            <select id="unidad_de_medida" name="unidad_de_medida"  class="form-control">
                                                <option  value="">Seleccione</option>
                                                <option  value="Kilogramos">Kilogramos</option>
                                                <option  value="Tonelada">Tonelada</option>
                                                <option  value="Pieza">Pieza</option>
                                                <option  value="Litros">Litros</option>
                                                <option  value="Metros">Metros</option>
                                            </select>  
                                        </div>
            <label class="col-sm-2 control-label">Rubro:</label>

                                        <div class="col-sm-4">
                                             <select id="rubro" name="rubro" class="form-control">
                                               <option  value="">Seleccione</option>
                                                <option  value="Calles/Servicios">Ciudadano</option>
                                                <option  value="Educación">Educación</option>
                                                <option  value="Religioso">Religioso</option>
                                                <option  value="Salud">Salud</option>
                                                <option  value="Seguridad">Seguridad </option>
                                                <option  value="Calles/Servicios">Calles/Servicios</option>
                                                <option  value="Deportivo">Deportivo</option>

                                            </select>  
                                        </div>
                                    </div>
        </div>
                                                  <div class="hr-line-dashed"></div>

             <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Cantidad:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cantidad" name="cantidad"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
          <label class="col-sm-2 control-label">Concepto:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="concepto" name="concepto" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
          
                                    </div>
        </div>
         <br>
 </div>
         <br>
          <div class="row">
         
             <div class="form-group has-success">
                         <label class="col-sm-2 control-label">Tipo de petición:</label>

                                        <div class="col-sm-4">
                                            <select id="tipo" name="tipo" class="form-control">
                                             <option  value="">Seleccione</option>
                                                <option  value="Materiales/Regalos/Obsequios">Materiales/Regalos/Obsequios</option>
                                                <option  value="Laboral">Laboral</option>
                                                <option  value="Salud">Salud</option>
                                                <option  value="Servicios Federales">Servicios Federales</option>
                                                <option  value="Servicios Estatales">Servicios Estatales</option>
                                                <option  value="Servicios Municipales">Servicios Municipales</option>

                                            </select>
                                        </div>
                             <label class="col-sm-2 control-label">Prioridad:</label>

                                        <div class="col-sm-4">
                                            <select id="prioridad" name="prioridad" class="form-control" >
                                                <option  value="">Seleccione</option>
                                                <option  value="Urgente">Urgente</option>
                                                <option  value="Regular">Regular</option>
                                            </select>
                                        
                                        </div>
                                   
        
                                    </div>
                          
                                      
                                        </div>
                                              <br>
                                                         <div class="row">
    <div class="form-group has-success">
                                        
              <label class="col-sm-2 control-label">Status:</label>

                                        <div class="col-sm-10">
                                               <select class="form-control" id="status" name="status" >
  <option value="" >Seleccione</option>
  <option value="Contactado">Contactado</option>
  <option value="N/A">N/A</option>
  <option value="Atender">Atender</option>
  <option value="Revisar">Revisar</option>
  <option value="No aprobado">No aprobado</option>
  <option value="Tramitar e informar">Tramitar e informar</option>
                                                 
</select>                                                                                     </div>

                                    </div>
        </div>
           
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
                                            <input type="text" id="id_peticiones" name="id_peticiones" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>   
             </div>
                                              </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" id="btt_update" name="btt_update" class="btn btn-primary">Guardar cambios</button>
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
					url:"<?php echo base_url(); ?>" + "index.php/registro/getPeticiones_na",
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
                colNames:['ID','Fecha de registro','Fecha del documento', 'Tipo de documento', 'Numero de documento','Folio','Apellido paterno','Nombre','Apellido materno','peticion','Telefono celular','id_peticiones','id_datos_generales','Rubro','Tipo de peticion','Concepto','Unidad de medida','Cantidad','Prioridad','Observaciones','Cargo','Telefono casa','Calle y numero','Colonia','Municipio','status'],
                colModel:[
                    {name:'id_documento',index:'id_documento', editable: true, width:60, sorttype:"int",search:true,hidden: true},
                    {name:'fecha_entrada',index:'fecha_entrada', editable: true, width:80,align:"right",sorttype:"date",formatter:"date", formatoptions: {srcformat: 'Y-m-d H:i:s', newformat:'d/m/Y - g:i A'},hidden:false},

                    {name:'fecha_documento',index:'fecha_documento', editable: true, width:40, sorttype:"date", formatter:"date",hidden: true},
                    {name:'tipo_documento',index:'tipo_documento', editable: true, width:100,hidden: true},
                    {name:'numero_documento',index:'numero_documento', editable: true, width:40, align:"right",hidden: false},
                    {name:'folio_documento',index:'folio_documento', editable: true, width:40, align:"right",hidden: false},
                    {name:'ap_paterno',index:'ap_paterno', editable: true, width:60,search:true,hidden: false},
                    {name:'nombre',index:'nombre', editable: true, width:60,search:true,hidden: false},
                    {name:'ap_materno',index:'ap_materno', editable: true, width:60,search:true,hidden: true},
                    {name:'peticion',index:'peticion', editable: true, width:100,hidden: true},
                    {name:'tel_celular',index:'tel_celular', editable: true, width:60,search:true,hidden: false},
                    {name:'id_peticiones',index:'id_peticiones', editable: true, width:60, sorttype:"int",search:true,hidden: true},
                    {name:'id_datos_generales',index:'id_datos_generales', editable: true, width:60, sorttype:"int",search:true,hidden: true},
                    {name:'rubro',index:'rubro', editable: true, width:100,hidden: true,formatter:"select",edittype: 'select',editoptions: { value: 'Ciudadano:Ciudadano;Educación:Educación;Religioso:Religioso;Salud:Salud;Seguridad:Seguridad;Calles/Servicios:Calles/Servicios;Deportivo:Deportivo',defaultValue: 'IN' },
                        stype: 'select', searchoptions: { sopt: ['eq', 'ne'], value: ':Todos;Ciudadano:Ciudadano;Educación:Educación;Religioso:Religioso;Salud:Salud;Seguridad:Seguridad;Calles/Servicios:Calles/Servicios;Deportivo:Deportivo' }},

                    {name:'tipo_de_peticion',index:'tipo_de_peticion', editable: true, width:90,hidden: false,formatter:"select", edittype: 'select', editoptions: { value: 'Materiales/Regalos/Obsequios:Materiales/Regalos/Obsequios;Laboral:Laboral;Salud:Salud;Servicios Federales:Servicios Federales;Servicios Estatales:Servicios Estatales;Servicios Municipales:Servicios Municipales', defaultValue: 'IN' },
                        stype: 'select', searchoptions: { sopt: ['eq', 'ne'], value: ':Todos;Materiales/Regalos/Obsequios:Materiales/Regalos/Obsequios;Laboral:Laboral;Salud:Salud;Servicios Federales:Servicios Federales;Servicios Estatales:Servicios Estatales;Servicios Municipales:Servicios Municipales' }},
                    {name:'concepto',index:'concepto', editable: true, width:100,hidden: true},
                    {name:'unidad_de_medida',index:'unidad_de_medida', editable: true, width:100,hidden: true},
                    {name:'cantidad',index:'cantidad', editable: true, width:60, sorttype:"int",search:false,hidden: true},
                    {name:'prioridad',index:'prioridad', editable: true, width:60,search:true,hidden: false,formatter:"select",edittype: 'select',editoptions: { value: 'Urgente:Urgente;Regular:Regular', defaultValue: 'IN' },
                        stype: 'select', searchoptions: { sopt: ['eq', 'ne'], value: ':Todos;Urgente:Urgente;Regular:Regular' }},
                    {name:'observaciones',index:'observaciones', editable: true, width:100,hidden: true},
                    {name:'cargo',index:'cargo', editable: true, width:60,search:true,hidden: true},
                    {name:'tel_casa',index:'tel_casa', editable: true, width:60,search:true,hidden: true},
                    {name:'calle_y_numero',index:'calle_y_numero', editable: true, width:60,search:true,hidden: true},
                    {name:'colonia',index:'colonia', editable: true, width:60,search:true,hidden: true},
                    {name:'municipio',index:'municipio', editable: true, width:60,search:true,hidden: true},
                    {name:'status',index:'status', editable: true, width:60,search:true,hidden: true,formatter:"select",edittype: 'select',editoptions: { value: 'Contactado:Contactado;N/A:N/A;Atender:Atender;Revisar:Revisar;No aprobado:No aprobado;Tramitar e informar:Tramitar e informar', defaultValue: 'IN' },
                        stype: 'select', searchoptions: { sopt: ['eq', 'ne'], value: ':Todos;Contactado:Contactado;N/A:N/A;Atender:Atender;Revisar:Revisar;No aprobado:No aprobado;Tramitar e informar:Tramitar e informar' }}
                  
                ],
                pager: "#pager_list_2",
                viewrecords: true,
                caption: "Peticiones",
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
                    $("#fecha_documento").val(rowData["fecha_documento"]);
                    $("#folio_documento").val(rowData["folio_documento"]);
                    $("#numero_documento").val(rowData["numero_documento"]);
                    $("#concepto").val(rowData["concepto"]);
                    $("#unidad_de_medida").val(rowData["unidad_de_medida"]);
                    $("#rubro").val(rowData["rubro"]);
                    $("#apellido_p").val(rowData["ap_paterno"]);
                    $("#apellido_m").val(rowData["ap_materno"]);    
                    $("#tipo").val(rowData["tipo_de_peticion"]);
                    $("#peticion").val(rowData["peticion"]);
                    $("#observaciones").val(rowData["observaciones"]);
                    var nombre1=rowData["nombre"]+" "+rowData["ap_paterno"]+" "+rowData["ap_materno"];
                    $("#nombre").val(rowData["nombre"]);
                    $("#cargo").val(rowData["cargo"]);
                    $("#cel").val(rowData["tel_celular"]);
                    $("#casa").val(rowData["tel_casa"]);
                    $("#calle").val(rowData["calle_y_numero"]);
                    $("#colonia").val(rowData["colonia"]);
                    $("#municipio").val(rowData["municipio"]);
                    $("#id_peticiones").val(rowData["id_peticiones"]);
                    $("#id_datos_generales").val(rowData["id_datos_generales"]);

                    $("#status").val(rowData["status"]);
                    if(rowData["tipo_de_peticion"]!='Materiales/Regalos/Obsequios'){
                                $("#datos_materiales").attr("style", "display:none");

                    }
                    if(rowData["tipo_de_peticion"]=='Materiales/Regalos/Obsequios'){
                                $("#datos_materiales").attr("style", "display:block");

                    }

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


        
 
        
        
       