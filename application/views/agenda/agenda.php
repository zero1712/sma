<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atención de la demanda ciudadana | Registro</title>

  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>

    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <!-- Mainly scripts -->
<script src="<?php echo base_url();?>js/plugins/fullcalendar/moment.min.js"></script>
<script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url();?>js/inspinia.js"></script>
<script src="<?php echo base_url();?>js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI custom -->
<script src="<?php echo base_url();?>js/jquery-ui.custom.min.js"></script>

<!-- iCheck -->
<script src="<?php echo base_url();?>js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar -->
<script src="<?php echo base_url();?>js/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins/lang/es.js"></script>

<link href="<?php echo base_url();?>css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

    <!-- Color picker -->
<script src="<?php echo base_url();?>js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
<script src="<?php echo base_url();?>js/plugins/clockpicker/clockpicker.js"></script>
<script src="<?php echo base_url();?>js/plugins/cropper/cropper.min.js"></script>

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
<!-- ------------------------------------Validaciones------------------------------- -->       
<script>
$(document).ready(function(){
var titleDialog='';
var data2;   

    $('.clockpicker').clockpicker();
                 var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

    var data2;   
    iniciarComponents();
         
    function iniciarComponents(){  
           
            $.ajax({
					url:"<?php echo base_url(); ?>" + "index.php/agenda/getAgenda",
                    type:"POST",
                    //dataType: 'json',
                    
					success: function(datos){
                  
                      
				   var datos = $.parseJSON(datos);
                        
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

        /* initialize the external events
         -----------------------------------------------------------------*/


        $('#external-events div.external-event').each(function() {
            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
                
            });
            
        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
                
        $('#calendar').fullCalendar({
            
            lang: 'es',

            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    
                    $(this).remove();
                }
            },
            events: datos,
    eventClick: function(calEvent, jsEvent, view) {
        $(this).css('border-color', 'red');

        var fecha =new Date(calEvent.start);
        var dia= fecha.getDate()+1;
        var mes= fecha.getMonth()+1;
        var año= fecha.getFullYear();
        if(dia<10){
            dia='0'+dia;
        }
         if(mes<10){
            mes='0'+mes;
        }
        var fecha_completa= año+'/'+mes+'/'+dia;
        $("#fecha_evento").val(fecha_completa);
        $("#hora_evento").val(calEvent.hora);
        $("#calle_y_numero").val(calEvent.calle_y_numero);
        $("#colonia_evento").val(calEvent.colonia_evento);
        $("#municipio_evento").val(calEvent.municipio);
        $("#asistentes_evento").val(calEvent.asistentes_aproximados);
        $("#remitente_evento").val(calEvent.remitente);
        $("#cargo_evento").val(calEvent.cargo);
        $("#dependencia_evento").val(calEvent.dependencia);
        $("#telefono_contacto").val(calEvent.telefono_contacto);
        $("#tipo_evento").val(calEvent.tipo_de_evento);
        $("#descripcion_evento").val(calEvent.descripcion_evento);
        $("#nombre_evento2").val(calEvent.title);
        $("#id_evento").val(calEvent.id_agenda_eventos);
        titleDialog=calEvent.title;
        $("span.ui-dialog-title").text(titleDialog); 
        $("#datos_agenda").dialog('open');

    },
    editable: true,   eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
        
     if (confirm('Desea cambiar la fecha del evento?\n ')) { 
         
         
        var fechaNueva =new Date(event.start);
        var diaNueva= fechaNueva.getDate()+1;
        var mesNueva= fechaNueva.getMonth()+1;
        var añoNueva= fechaNueva.getFullYear();
        if(diaNueva<10){
            diaNueva='0'+diaNueva;
        }
         if(mesNueva<10){
            mesNueva='0'+mesNueva;
        }
        var fecha_completa_nueva= añoNueva+'-'+mesNueva+'-'+diaNueva;
                  
          $.ajax({
            url: "<?php echo base_url();?>index.php/agenda/updateAgendaById",
            type: "POST", 
            data:{
                id_agenda_eventos: event.id_agenda_eventos,fecha_de_evento: fecha_completa_nueva
					},
            success: function(data){
                 if(bandera==true){
                     alert("Se actualizo correctamente");
                     actualizarCalendario();         
                 }else{
                     alert("Oops ocurrio un error, intentalo mas tarde");
                 }
                                }

                    });
                        }
                        else{
                            
                            alert('Se cancelo la actualización de la agenda');
                            actualizarCalendario();


        
    }
        }
        });

                        
						
					}
                    
				});
             
                          
    }
         
    $("#datos_agenda").dialog({
    autoOpen: false,
    width: 'auto', // overcomes width:'auto' and maxWidth bug
    maxWidth: 600,
    height: 'auto',
    modal: true,
    fluid: true, //new option
    resizable: false,     
                buttons:[{
                    id:"btnGuardar",
                    text:"Cambiar datos",
                    click:function(){
                        if (confirm('Desea cambiar los datos del evento '+$("#nombre_evento2").val()+'?\n ')) { 
                       $("#form_datos_evento").submit();
                        }
                        else{
                            
                            alert('Se cancelo la actualización del evento');
                        }
                                              $(this).dialog('close');

                                }
                        		
                    
                },{
                  id:"btnCerrar",
                  text:"Cerrar",
                  click:function(){
                      $(this).dialog('close');
                  }  
                } ]
    });
    
         $("#form_datos_evento").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/agenda/updateEventoById"; 

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
                actualizarCalendario();
       
                }else{
                alert("Ocurrio un error al actualizar, intente de nuevo mas tarde.");

                }
         
           }, 
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                } 
         });

    return false; // evitar la ejecucion del form si algo falla
           });
    
// on window resize run function
$(window).resize(function () {
    fluidDialog();
});

// catch dialog if opened within a viewport smaller than the dialog width
$(document).on("dialogopen", ".ui-dialog", function (event, ui) {
    fluidDialog();
});

function fluidDialog() {
    var $visible = $(".ui-dialog:false");
    // each open dialog
    $visible.each(function () {
        var $this = $(this);
        var dialog = $this.find(".ui-dialog-content").data("ui-dialog");
        // if fluid option == true
        if (dialog.options.fluid) {
            var wWidth = $(window).width();
            // check window width against dialog width
            if (wWidth < (parseInt(dialog.options.maxWidth) + 50))  {
                // keep dialog from filling entire screen
                $this.css("max-width", "90%");
            } else {
                // fix maxWidth bug
                $this.css("max-width", dialog.options.maxWidth + "px");
            }
            //reposition dialog
            dialog.option("position", dialog.options.position);
        }
    });

}

function actualizarCalendario(){
         $.ajax({
					url:"<?php echo base_url(); ?>" + "index.php/agenda/getAgenda",
                    type:"POST",
                    //dataType: 'json',
                    
					success: function(datos){
                  
                      
				   var datos = $.parseJSON(datos);
                     $("#calendar").fullCalendar('removeEvents');
            
                    $("#calendar").fullCalendar('addEventSource',datos);
						
					}
                    
				});
}
   
     });
    
 function aMays(e, elemento) {
                        tecla=(document.all) ? e.keyCode : e.which; 
                        elemento.value = elemento.value.toUpperCase();
                        }
    
</script>
<style> 
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
                    <a href="<?php echo base_url();?>index.php/registro/goIndex"><i class="fa fa-th-large"></i> <span class="nav-label">Registro</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros"><i class="fa fa-th-large"></i> <span class="nav-label">Peticiones</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_contactado"><i class="fa fa-th-large"></i> <span class="nav-label">Contactados</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_na"><i class="fa fa-th-large"></i> <span class="nav-label">N/A</span></a>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Agenda</span></a>




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
    <div class="col-lg-8">
        <h2>Agenda de eventos</h2>
      
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
                <div class="col-lg-2">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Menú</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <p>
                  
                    </p>
             <p><span class="label label-primary">Agenda [activa] </span></p>

             <p><span class="label label-danger">Existen eventos</span></p>
                    

                </div>
            </div>
         
        </div>
        <div class="col-lg-10">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Agenda</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="calendar"></div>
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
     <div id="datos_agenda" class="form-group" style="display:none">
    <form enctype="multipart/form-data" method="post" id="form_datos_evento" name="form_datos_evento" class="form-vertical">
    
    <div class="row" style="display:none">
        
    
    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">ID:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="id_evento" name="id_evento"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
           <div class="col-sm-4">
                                            <input type="text" id="nombre_evento2" name="nombre_evento2"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                 
        </div>
         </div>
    <div class="row">
        
    
    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Fecha:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="fecha_evento" name="fecha_evento"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" readonly>
                                        </div>
                                        <label class="col-sm-2 control-label">Hora:</label>

                                        <div class="col-sm-4">
                                                        <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" id="hora_evento" name="hora_evento" class="form-control" value="09:30" >
                      
                            </div>
                                        </div>
                                    </div>
        </div>
         
                                                  <div class="hr-line-dashed"></div>

            <div class="row">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Remitente:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="remitente_evento" name="remitente_evento" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>   
             </div>
         <br>
                 <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Cargo:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cargo_evento" name="cargo_evento"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Dependencia:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="dependencia_evento" name="dependencia_evento" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
        </div>
                                                  <div class="hr-line-dashed"></div>

                <div class="row">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label">Calle y numero:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="calle_y_numero" name="calle_y_numero" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>   
             </div>
             <div class="row">
    <div class="form-group has-success">
                                        
                                        <label class="col-sm-2 control-label">Municipio:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="municipio_evento" name="municipio_evento"  class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
            <label class="col-sm-2 control-label">Colonia:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="colonia_evento" name="colonia_evento" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                    </div>
        </div>
         <br>
         
              <div class="row">
    <div class="form-group has-success">
                                    
                                        <label class="col-sm-2 control-label">Asistentes aproximados:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="asistentes_evento" name="asistentes_evento" class="form-control"  onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
        
                   <label class="col-sm-2 control-label">Teléfono contacto:</label>

                                        <div class="col-sm-4">
                                       
                                            <input type="text" id="telefono_contacto" name="telefono_contacto" class="form-control"  onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                       </div>
        
                                    </div>
                            
                            
        </div>
         
          <div class="row">
         
             <div class="form-group has-success">
                    <label class="col-sm-2 control-label">Descripción:</label>

                                        <div class="col-sm-4">
                                                <textarea class="form-control" id="descripcion_evento" name="descripcion_evento" rows="3" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
                            <label class="col-sm-2 control-label">Tipo de evento:</label>
                                <div class="col-sm-4">
                                       <select class="form-control" name="tipo_evento" id="tipo_evento">
                                           <option value="1">Municipal</option>
                                           <option value="2">Estatal</option>
                                           <option value="3">Federal</option>
                                           <option value="4">Personal</option>
                                        </select>
                 </div>
                                      
                                        </div>
         </div>
         </form>
    </div>   
        

    </div>
</div>

 
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />

</body>
    




</html>
