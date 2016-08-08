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

                    <a href="#"><i class="fa fa-male"></i> <span class="nav-label">Peticiones</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_contactado"><i class="fa fa-phone"></i> <span class="nav-label">Contactados</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_na"><i class="fa fa-times"></i> <span class="nav-label">N/A</span></a><?php }?>
                    <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>

                    <a href="<?php echo base_url();?>index.php/agenda/"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda</span></a>
<?php }?>
                                  <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>

                    <a href="<?php echo base_url();?>index.php/registro/goAudiencias"><i class="fa fa-university"></i> <span class="nav-label">Audiencias</span></a>
<?php }?>
                    
                     <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)){?>

            <a href="<?php echo base_url();?>index.php/registro/goAdministracion"><i class="fa fa-folder-o"></i> <span class="nav-label">Administración</span></a>
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
                    <h2>Peticiones</h2>
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
                            <h5>Consulta de peticiones</h5>
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
                                        <label class="col-sm-2 control-label">Numero de Registro:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="numero_registro" name="numero_registro"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" readonly>
                                        </div>
                                  
                                                    </div></div>
                                                    <br>
    <div class="row">
    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Turno:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="turno" name="turno"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" readonly>
                                        </div>
                                        <label class="col-sm-2 control-label">Estatus:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="estatus" name="estatus" class="form-control"  onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" readonly>
                                        </div>
                                    </div>
        </div>
         
                                    <div class="hr-line-dashed"></div>
                                    <div class="row">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Avance:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="avance" name="avance" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>   
             </div>
            <br>
            <div class="row">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Observaciones:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="observaciones" name="observaciones" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                          <label class="col-sm-2 control-label">Nombre:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="nombre" name="nombre" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>   
             </div>
                        <br>                <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Apellido Paterno:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="apellido_p" name="apellido_p"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
       
                                    </div>
        </div>
              <br>  
                                          <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Apellido Materno:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="apellido_m" name="apellido_m"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
             <label class="col-sm-2 control-label">Pertenece a:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="pertenece_a" name="pertenece_a" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
            
                                    </div>
        </div>
         <br>
                                                                                        <div class="row">
    <div class="form-group has-success">
                            <label class="col-sm-2 control-label">Municipio:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="municipio" name="municipio" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                   <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Teléfono Celular:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="tel_cel" name="tel_cel"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Fecha de Petición:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="fecha_peticion" name="fecha_peticion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                             
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Fecha Recibido:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="fecha_recibido" name="fecha_recibido"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Tipo de organización:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="tipo_organizacion" name="tipo_organizacion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                          
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Petición:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="peticion" name="peticion"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Cantidad 1:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cantidad_1" name="cantidad_1" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Cantidad 2:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cantidad_2" name="cantidad_2"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Cantidad Entregada:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cantidad_entregada" name="cantidad_entregada" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Apoyo Entregado:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="apoyo_entregado" name="apoyo_entregado"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Fecha de Agradecimiento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="fecha_agradecimiento" name="fecha_agradecimiento" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">No. de Beneficiarios:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="no_beneficiarios" name="no_beneficiarios"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Fecha de Vencimiento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="fecha_vencimiento" name="fecha_vencimiento" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Sexo:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="sexo" name="sexo"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Día de nacimiento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="dia_nac" name="dia_nac" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Mes de Nacimiento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="mes_nac" name="mes_nac"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Año de Nacimiento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="año_nac" name="año_nac" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Edad:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="edad" name="edad"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Clave de Elector:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="clave_elector" name="clave_elector" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">folio:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="folio" name="folio"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Vigente:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="vigente" name="vigente" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Seccional:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="seccional" name="seccional"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Calle y Numero:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="calle_y_numero" name="calle_y_numero" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
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
            <label class="col-sm-2 control-label">Codigo Postal:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="codigo_postal" name="codigo_postal" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Teléfono de casa:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="tel_casa" name="tel_casa"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Email:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="email" name="email" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
                   
                                        </div>
                                              <br>
                                              <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Origen de recurso:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="origen_recurso" name="origen_recurso"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
        
                                    </div>
                   
                                        </div>
                                              
                               
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
					url:"<?php echo base_url(); ?>" + "index.php/registros/getPeticiones",
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
                colNames:['ID','Numero de registro','Turno', 'Status', 'Avance','Observaciones','Nombre','Apellido paterno','Apellido materno','Pertenece a:','Municipio','Telefono celular','Fecha de peticion','Fecha de recibido','Tipo de orgnanización','Petición','Cantidad 1','Cantidad 2','Cantidad entregada','Apoyo entregado','Fecha de agradecimiento','No de beneficiario','Fecha de vencimiento','Sexo','Dia de nacimiento','Mes de nacimiento','Año de nacimiento','edad','Clave elector','Folio','Vigente','Seccional','Cale y numero','Colonia','Codigo postal','Teléfono casa','Correo electronico','Origen recurso'],
                colModel:[
                    {name:'id_registros',index:'id_registros', editable: true, width:60, sorttype:"int",search:true,hidden: true},
                    {name:'numero_registro',index:'numero_registro', editable: true, width:60, sorttype:"int",search:true,hidden: false},
                    {name:'turno',index:'turno', editable: true, width:100,hidden: false},
                    {name:'estatus',index:'estatus', editable: true, width:100,hidden: true},
                    {name:'avance',index:'avance', editable: true, width:100,hidden: false,formatter:"select",edittype: 'select',editoptions: { value: 'CUMPLIDO:CUMPLIDO;ATENDIDO:ATENDIDO;CERRADO:CERRADO;EN PROCESO:EN PROCESO', defaultValue: 'IN' },
                        stype: 'select', searchoptions: { sopt: ['eq', 'ne'], value: ':TODOS;CUMPLIDO:CUMPLIDO;ATENDIDO:ATENDIDO;CERRADO:CERRADO;EN PROCESO:EN PROCESO' }},
                    {name:'observaciones',index:'observaciones', editable: true, width:100,hidden: true}, 
                    {name:'nombre',index:'nombre', editable: true, width:100,hidden: false},
                    {name:'apellido_p',index:'apellido_p', editable: true, width:100,hidden: false},
                    {name:'apellido_m',index:'apellido_m', editable: true, width:100,hidden: true},
                    {name:'pertenece_a',index:'pertenece_a', editable: true, width:100,hidden: true},
                    {name:'municipio',index:'municipio', editable: true, width:100,hidden: true},
                    {name:'tel_cel',index:'tel_cel', editable: true, width:100,hidden: true},
                    {name:'fecha_peticion',index:'fecha_peticion', editable: false, width:80,align:"right",sorttype:"date",formatter:"date",formatoptions: {srcformat: 'Y-m-d', newformat:'d/m/Y'},hidden:false},
                    {name:'fecha_recibido',index:'fecha_recibido', editable: true, width:80,align:"right",sorttype:"date",formatter:"date",formatoptions: {srcformat: 'Y-m-d', newformat:'d/m/Y'},hidden:true},
                    {name:'tipo_organizacion',index:'tipo_organizacion', editable: true, width:100,hidden: true},
                    {name:'peticion',index:'peticion', editable: true, width:100,hidden: true},

                    {name:'cantidad_1',index:'cantidad_1', editable: true, width:100,hidden: true},
                    {name:'cantidad_2',index:'cantidad_2', editable: true, width:100,hidden: true},
                    {name:'cantidad_entregada',index:'cantidad_entregada', editable: true, width:100,hidden: true},
                    {name:'apoyo_entregado',index:'apoyo_entregado', editable: true, width:100,hidden: true},
                    {name:'fecha_agradecimiento',index:'fecha_agradecimiento', editable: true, width:80,align:"right",sorttype:"date",formatter:"date",formatoptions: {srcformat: 'Y-m-d', newformat:'d/m/Y'},hidden:true},
                    {name:'no_beneficiarios',index:'no_beneficiarios', editable: true, width:100,hidden: true},
                    {name:'fecha_vencimiento',index:'fecha_vencimiento', editable: true, width:80,align:"right",sorttype:"date",formatter:"date",formatoptions: {srcformat: 'Y-m-d', newformat:'d/m/Y'},hidden:true},          
                    {name:'sexo',index:'sexo', editable: true, width:100,hidden: true},
                    {name:'dia_nac',index:'dia_nac', editable: true, width:100,hidden: true},
                    {name:'mes_nac',index:'mes_nac', editable: true, width:100,hidden: true},
                    {name:'año_nac',index:'año_nac', editable: true, width:100,hidden: true},
                    {name:'edad',index:'edad', editable: true, width:100,hidden: true},
                    {name:'clave_elector',index:'clave_elector', editable: true, width:100,hidden: true},
                    {name:'folio',index:'folio', editable: true, width:100,hidden: true},
                    {name:'vigente',index:'vigente', editable: true, width:100,hidden: true},
                    {name:'seccional',index:'seccional', editable: true, width:100,hidden: true},
                    {name:'calle_y_numero',index:'calle_y_numero', editable: true, width:100,hidden: true},
                    {name:'colonia',index:'colonia', editable: true, width:100,hidden: true},
                    {name:'codigo_postal',index:'codigo_postal', editable: true, width:100,hidden: true},
                    {name:'tel_casa',index:'tel_Casa', editable: true, width:100,hidden: true},
                    {name:'email',index:'email', editable: true, width:100,hidden: true},
                    {name:'origen_recurso',index:'origen_recurso', editable: true, width:100,hidden: true},

                  
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
              if(contador!=0) {
                    var rowData = jQuery(this).getRowData(rowId);

                    $("#numero_registro").val(rowData["numero_registro"]);
                    $("#turno").val(rowData["turno"]);
                    $("#estatus").val(rowData["estatus"]);
                    $("#avance").val(rowData["avance"]);
                    $("#observaciones").val(rowData["observaciones"]);
                    $("#nombre").val(rowData["nombre"]);
                    $("#apellido_p").val(rowData["apellido_p"]);
                    $("#apellido_m").val(rowData["apellido_m"]);
                    $("#pertenece_a").val(rowData["pertenece_a"]);
                    $("#municipio").val(rowData["municipio"]);
                    $("#fecha_recibido").val(rowData["fecha_recibido"]);
                    $("#fecha_peticion").val(rowData["fecha_peticion"]);
                    $("#tipo_organizacion").val(rowData["tipo_organizacion"]);
                    $("#peticion").val(rowData["peticion"]);
                    $("#cantidad_1").val(rowData["cantidad_1"]);
                    $("#cantidad_2").val(rowData["cantidad_2"]);
                    $("#cantidad_entregada").val(rowData["cantidad_entregada"]);
                    $("#apoyo_entregado").val(rowData["apoyo_entregado"]);
                    $("#no_beneficiarios").val(rowData["no_beneficiarios"]);
                    $("#fecha_vencimiento").val(rowData["fecha_vencimiento"]);
                    $("#sexo").val(rowData["sexo"]);
                    $("#dia_nac").val(rowData["dia_nac"]);
                    $("#mes_nac").val(rowData["mes_nac"]);
                    $("#año_nac").val(rowData["año_nac"]);
                    $("#edad").val(rowData["edad"]);
                    $("#clave_elector").val(rowData["clave_elector"]);
                    $("#folio").val(rowData["folio"]);
                    $("#vigente").val(rowData["vigente"]);
                    $("#seccional").val(rowData["seccional"]);
                    $("#calle_y_numero").val(rowData["calle_y_numero"]);     
                    $("#colonia").val(rowData["colonia"]);
                    $("#codigo_postal").val(rowData["codigo_postal"]);
                    $("#tel_casa").val(rowData["tel_casa"]);
                    $("#email").val(rowData["email"]);
                    $("#origen_recurso").val(rowData["origen_recurso"]);


                    $('#datos_peticion').modal('show');
                }
                contador=contador+1;

        },    dataInit: function (elem) {
                    $(elem).datepicker({
                        dateFormat: 'dd/mm/yy',
                        changeYear: true,
                        changeMonth: true,                            
                        showWeek: true,
                        onSelect: function (dateText, inst) {
                            setTimeout(function () {
                                $('#jQGridapproval')[0].triggerToolbar();
                            }, 100);
                        }
                    });
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


                    

                }else{
                alert("Ocurrio un error al actualizar, intente de nuevo mas tarde.");
                $("#datos_peticion").modal('hide');

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
         
        $("#form_datos_peticion").submit();                        
                     
                     }
          else{
                            
                alert('Se cancelo la actualización de los datos');
                $('#datos_peticion').modal('hide');



        
    }
           
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


        
 
        
        
