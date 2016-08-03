<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atención de la demanda ciudadana | Registro</title>

       <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/chosen/chosen.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/cropper/cropper.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/switchery/switchery.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/select2/select2.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.21.custom.min.js"></script>
      <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>js/inspinia.js"></script>
    <script src="<?php echo base_url();?>js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="<?php echo base_url();?>js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="<?php echo base_url();?>js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="<?php echo base_url();?>js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="<?php echo base_url();?>js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="<?php echo base_url();?>js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="<?php echo base_url();?>js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="<?php echo base_url();?>js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url();?>js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="<?php echo base_url();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="<?php echo base_url();?>js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="<?php echo base_url();?>js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="<?php echo base_url();?>js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="<?php echo base_url();?>js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="<?php echo base_url();?>js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url();?>js/plugins/select2/select2.full.min.js"></script>

    <!-- TouchSpin -->
    <script src="<?php echo base_url();?>js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>


<!-- ------------------------------------Validaciones------------------------------- -->       
 <script>
      function aMays(e, elemento) {
                        tecla=(document.all) ? e.keyCode : e.which; 
                        elemento.value = elemento.value.toUpperCase();
                        }
           function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
     
           function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    
    
 </script>
    
<!-- -------------------------- Script de funcionalidad y validaciones BuscarV  ------------------------------ -->
    <script>
    $(document).ready(function(){
        
         $('#tipo_registro').on('change', function() {
        if($('#tipo_registro').val()==0){
                $('#datos_audiencia_row').attr('style','display: none');  
                $('#datos_documento_row').attr('style','display: none');
            
                                        }
        if($('#tipo_registro').val()==1){
                $('#datos_audiencia_row').attr('style','display: block');  
                $('#datos_documento_row').attr('style','display: none');
            
                                        }
            if($('#tipo_registro').val()==2){
                $('#datos_audiencia_row').attr('style','display: none');  
                $('#datos_documento_row').attr('style','display: block');
            
        }
          
                                                    });
        
             $('#tipo_documento').on('change', function() {
        if($('#tipo_documento').val()==0){
                $('#datos_agenda').attr('style','display: none');  
                $('#datos_administracion').attr('style','display: none');
                $('#datos_peticiones').attr('style','display: none');

            
                                        }
        if($('#tipo_documento').val()==1){
                $('#datos_agenda').attr('style','display: block ');  
                $('#datos_administracion').attr('style','display: none');
                $('#datos_peticiones').attr('style','display: none');
            
                                        }
            if($('#tipo_documento').val()==2){
                $('#datos_agenda').attr('style','display: none');  
                $('#datos_administracion').attr('style','display: block');
                $('#datos_peticiones').attr('style','display: none');

            
                                            }
            if($('#tipo_documento').val()==3){
                $('#datos_agenda').attr('style','display: none');  
                $('#datos_administracion').attr('style','display: none');
                $('#datos_peticiones').attr('style','display: block');

            
                                            }
          
                                                    });
           $('#colonia_evento').on('change', function() {
                if($('#colonia_evento').val()=='99'){
                    $('#label_colonia').attr('style','display: block');  
                    $('#colonia_input').attr('style','display: block');
                    $('#label_municipio_agenda').attr('style','display: block');  
                    $('#municipio_input_agenda').attr('style','display: block');  
             

                                                      }
                if($('#colonia_evento').val()!='99'){
                    $('#label_colonia').attr('style','display: none');  
                    $('#colonia_input').attr('style','display: none');
                    $('#label_municipio_agenda').attr('style','display: none');  
                    $('#municipio_input_agenda').attr('style','display: none');  
                 
            
                                                        }
      
          
                                                    });
             $('#colonia_audiencia').on('change', function() {
                if($('#colonia_audiencia').val()=='99'){
                    $('#label_colonia_audiencia').attr('style','display: block');  
                    $('#colonia_input_audiencia').attr('style','display: block');
                    $('#label_municipio_audiencia').attr('style','display: block');  
                    $('#municipio_input_audiencia').attr('style','display: block');  
            
                                                      }
                if($('#colonia_audiencia').val()!='99'){
                    $('#label_colonia_audiencia').attr('style','display: none');  
                    $('#colonia_input_audiencia').attr('style','display: none');
                    $('#label_municipio_audiencia').attr('style','display: none');  
                    $('#municipio_input_audiencia').attr('style','display: none');  
            
                                                        }
      
          
                                                    });
                   $('#colonia_peticion').on('change', function() {
                if($('#colonia_peticion').val()=='99'){
                    $('#label_colonia_peticion').attr('style','display: block');  
                    $('#colonia_input_peticion').attr('style','display: block');
                      $('#label_municipio_peticion').attr('style','display: block');  
                    $('#municipio_input_peticion').attr('style','display: block');  
            
                                                      }
                if($('#colonia_peticion').val()!='99'){
                    $('#label_colonia_peticion').attr('style','display: none');  
                    $('#colonia_input_peticion').attr('style','display: none');
                      $('#label_municipio_peticion').attr('style','display: none');  
                    $('#municipio_input_peticion').attr('style','display: none');
            
                                                        }
      
          
                                                    });
        
            $('#tipo_peticion').on('change', function() {
                if($('#tipo_peticion').val()=='1'){
                    $('#div_materiales_regalos').attr('style','display: block');  
     
                                                      }
                if($('#tipo_peticion').val()!='1'){
                    $('#div_materiales_regalos').attr('style','display: none');  

            
                                                      }
      
          
                                                    });
            $('input:radio[name="radio_tipo_escrito1"]').change(
            function(){
                if($('input:radio[name="radio_tipo_escrito1"]:checked').val()=='1'){
                    $('#div_destinatario').attr('style','display: block');
                    
                }
                  if($('input:radio[name="radio_tipo_escrito1"]:checked').val()=='2'){
                     $('#div_destinatario').attr('style','display: none');
                }
                    });
        
                  
        
        //---------------------------------------Funcion botones--------------------------------//
        
        //boton registrar audiencia
        $('#btt_registrar_audiencia').click(function() {
            $("#form_datos_audiencia").submit();
        });
            //registrar audiencia
           $("#form_datos_audiencia").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registro/setAudiencia"; 

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
               
                alert("Se registro la audiencia de manera exitosa!"); 
           }, 
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                } 
         });

    return false; // evitar la ejecucion del form si algo falla
           });
        
        //boton registrar agenda_eventos
        $('#btt_registrar_agenda_eventos').click(function() {
            $("#form_documento").submit();
        });
              //registrar documento
           $("#form_documento").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registro/setDocumento"; 

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
               
               
                 var idDocumento= $.parseJSON(data);
                 if(idDocumento=='AQUI ENTRO EN EL ERROR'){
                     alert("Fallo registro debido a que:\nFolio de documento,\nNumero de documento,\nFecha de documento,\n\nSon vacios, llene los respectivos campos.");
                 }else{
                    
                 if($("#tipo_documento").val()==1){
                 $("#idDocumento_hide").val(idDocumento);
                 $("#form_datos_agenda").submit();
                 }
                 if($("#tipo_documento").val()==2){
                 $("#idDocumento_hide1").val(idDocumento);
                 $("#form_datos_administracion").submit();
                 }
                 if($("#tipo_documento").val()==3){
                 $("#idDocumento_hide2").val(idDocumento);
                 $("#form_datos_peticiones").submit();
                 }
         }
           }, 
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                } 
         });

    return false; // evitar la ejecucion del form si algo falla
           });
        
         $("#form_datos_agenda").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registro/setAgenda"; 

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
                alert("Se registro la agenda o evento exitosamente!");
         
           }, 
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                } 
         });

    return false; // evitar la ejecucion del form si algo falla
           });
        //termina boton registrar agenda





        //empieza boton registrar administracion
        $('#btt_registrar_administracion').click(function() {
            $("#form_documento").submit();
        });
         
        
         $("#form_datos_administracion").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registro/setAdministracion"; 

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
                alert("Se registro la administracion exitosamente!");
         
           }, 
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                } 
         });

    return false; // evitar la ejecucion del form si algo falla
           });

        ///termina boton registrar administracion


//empieza boton registrar peticiones
        $('#btt_registrar_peticiones').click(function() {
           
            $("#form_documento").submit();
        });
         
        
         $("#form_datos_peticiones").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registro/setPeticiones"; 

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
                alert("Se registro la peticion exitosamente!");
         
           }, 
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                } 
         });

    return false; // evitar la ejecucion del form si algo falla
           });

        ///termina boton registrar peticiones






         $('.clockpicker').clockpicker();
                 var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#fecha_audiencia .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: "yyyy-mm-dd"
            });
               $('#fecha_documento .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: "yyyy-mm-dd"

            });

                $('#fecha_evento .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: "yyyy-mm-dd"
            });
            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });


            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab','Dom'],
                    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });
                 var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "Enero", "Febrero", "Marzo",
                "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre",
                "Octubre", "Noviembre", "Diciembre"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        
     
        
    });
    </script>
        <script>
       
    
    </script>
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
                    <a href="#"><i class="fa fa-plus-square-o"></i> <span class="nav-label">Registro</span></a>
                       <?php }?>
                      <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 3)){?>
                    <a href="<?php echo base_url();?>index.php/registro/registros"><i class="fa fa-male"></i> <span class="nav-label">Peticiones</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_contactado"><i class="fa fa-phone"></i> <span class="nav-label">Contactados</span></a>
                    <a href="<?php echo base_url();?>index.php/registro/registros_na"><i class="fa fa-times"></i> <span class="nav-label">N/A</span></a>
                     <?php }?>
                           <?php if(($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 1)or($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 2)){?>

                    <a href="<?php echo base_url();?>index.php/agenda/"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda</span></a><?php }?>

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
                    <h2>Registro</h2>
                 
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
     
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                          <div class="ibox-title">
                            <h5>Seleccione el tipo de registro: </h5>
                                <div class="ibox-content">
                                        <form method="get" id="form_tipo_registro" name="form_tipo_registro" class="form-horizontal">
                                    <div class="form-group has-success"><label class="col-sm-2 control-label" for="tipo_registro">Tipo registro:</label>

                                   
                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="tipo_registro" id="tipo_registro">
                                                <option  value="0">Seleccione</option>
                                                <option  value="1">Audiencia</option>
                                                <option  value="2">Documento</option>
                                            </select>
                                        
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                     </div>
                </div>
               
            </div>
            <div class="row" id="datos_audiencia_row" style="display:none">
                <div class="col-lg-12" id="datos_audiencia_div">
                    <div class="ibox float-e-margins">
                          <div class="ibox-title">
                            <h5>Datos de la audiencia<small></small></h5>
                                <div class="ibox-content">
                                      <form enctype="multipart/form-data" method="post" id="form_datos_audiencia" name="form_datos_audiencia" class="form-horizontal">

                                    
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nombre:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="nombre_audiencia" name="nombre_audiencia" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Apellido paterno:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="apellidop_audiencia" name="apellidop_audiencia" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);" >
                                        </div>
                                        <label class="col-sm-2 control-label">Apellido materno:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="apellidom_audiencia" name="apellidom_audiencia" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
                                    </div>
                                        <div class="hr-line-dashed"></div>
                                           <div class="form-group" id="fecha_audiencia"><label class="col-sm-2 control-label" for="tipo_registro">Fecha audiencia: </label>
                                        <div class="col-sm-4">
                                            <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text"  id="fecha_audiencia_input"  name="fecha_audiencia_input" class="form-control">
                                            </div>
                                         </div>
                                           <label class="col-sm-2 control-label">Cargo:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cargo_audiencia" name="cargo_audiencia" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Celular:</label>
                                         <div class="col-sm-4">
                                        <div class="input-group m-b"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span> <input type="text" id="celular_audiencia" name="celular_audiencia" placeholder="722-XXX-XXX" class="form-control" onkeypress="return justNumbers(event);"></div>
                                        </div>
                                          <label class="col-sm-2 control-label">Casa:</label>
                                         <div class="col-sm-4">
                                        <div class="input-group m-b"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span> <input type="text" id="casa_audiencia" name="casa_audiencia" placeholder="722-XXX-XXX" class="form-control" onkeypress="return justNumbers(event);"></div>
                                        </div>
                                          </div>
                                        <div class="hr-line-dashed"></div>
                                          <div class="form-group">
                                        <label class="col-sm-2 control-label">Calle y Numero:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="callenumero_audiencia" name="callenumero_audiencia" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                          </div>
                                                  <div class="form-group"><label class="col-sm-2 control-label" for="tipo_registro">Colonia de audiencia:</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="colonia_audiencia" id="colonia_audiencia">
                                          <option  value="0">Seleccione</option>
                                                    <option  value="La Concepción">La Concepción</option>
                                                  <option  value="San Francisco">San Francisco</option>
                                                  <option  value="Guadalupe">Guadalupe</option>
                                                  <option  value="San Juan">San Juan</option>
                                                  <option  value="San Isidro">San Isidro</option>
                                                  <option  value="San Lucas">San Lucas</option>
                                                  <option  value="La Magdalena">La Magdalena</option>
                                                  <option  value="Santa María">Santa María</option>
                                                  <option  value="San Miguel">San Miguel</option>
                                                  <option  value="San Nicolás">San Nicolás</option>
                                                  <option  value="San Pedro">San Pedro</option>
                                                  <option  value="Santiago">Santiago</option>
                                                  <option  value="Álvaro Obregón">Álvaro Obregón</option>
                                                  <option  value="Buenavista">Buenavista</option>
                                                  <option  value="Emiliano Zapata">Emiliano Zapata</option>
                                                  <option  value="Isidro Fabela">Isidro Fabela</option>
                                                  <option  value="Reforma">Reforma</option>
                                                  <option  value="Alfredo del Mazo">Alfredo del Mazo</option>
                                                  <option  value="Francisco I. Madero">Francisco I. Madero</option>
                                                  <option  value="Santa Elena">Santa Elena</option>
                                                  <option  value="Villas de Atenco">Villas de Atenco</option>
                                                  <option  value="Carlos Hank González">Carlos Hank González</option>
                                                  <option  value="El Fortín">El Fortín</option>
                                                  <option  value="Angel I">Angel I</option>
                                                  <option  value="Angel II">Angel II</option>
                                                  <option  value="Angel III">Angel III</option>
                                                  <option  value="El Rosendal">El Rosendal</option>
                                                  <option  value="Las Magdalenas III">Las Magdalenas III</option>
                                                  <option  value="El Dorado I">El Dorado I</option>
                                                  <option  value="El Dorado II">El Dorado II</option>
                                                  <option  value="Vista Verde">Vista Verde</option>
                                                  <option  value="Las Magdalenas IV">Las Magdalenas IV</option>
                                                  <option  value="Pavitac">Pavitac</option>
                                                  <option  value="Residencial Santa María">Residencial Santa María</option>
                                                  <option  value="Los Perales">Los Perales</option>
                                                  <option  value="Alborada II">Alborada II</option>
                                                  <option  value="Villas La Magdalena">Villas La Magdalena</option>
                                                  <option  value="Villas La Magdalena II">Villas La Magdalena II</option>
                                                  <option  value="Inmobiliaria Libra">Inmobiliaria Libra</option>
                                                  <option  value="Cipreses Residencial">Cipreses Residencial</option>
                                                  <option  value="El Encanto I">El Encanto I</option>
                                                  <option  value="El Encanto II">El Encanto II</option>
                                                  <option  value="Residencial Olmos">Residencial Olmos</option>
                                                  <option  value="99">Otro</option>
                                            </select>
                                        
                                        </div>
                                       <label id="label_colonia_audiencia" class="col-sm-2 control-label " style="display:none">Colonia:</label>

                                        <div id="colonia_input_audiencia" class="col-sm-4" style="display:none">
                                            <input type="text" id="colonia_audiencia2" name="colonia_audiencia2" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                                     <label id="label_municipio_audiencia" class="col-sm-2 control-label " style="display:none">Municipio:</label>

                                        <div id="municipio_input_audiencia" name="municipio_input_audiencia" class="col-sm-4" style="display:none">
                                            <input type="text" id="municipio_audiencia" name="municipio_audiencia" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>
                                           
                                     <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Asunto de la audiencia:</label>

                                        <div class="col-sm-10">
                                                <textarea id="asunto_audiencia" name="asunto_audiencia" class="form-control" rows="5" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)" ></textarea>                                                                                </div>
                                    </div>
                                                                               <div class="hr-line-dashed"></div>

                                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Seguimiento:</label>

                                        <div class="col-sm-10">
                                                <textarea id="seguimiento_audiencia" name="seguimiento_audiencia" class="form-control" rows="5" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)" ></textarea>                                                                                </div>
                                    </div>
                                    </form>
                                                                         <div class="hr-line-dashed"></div>

                                    <div class="row">
                                        <center>
                                        <div class="col-sm-12">
                                            <div clas="col-sm-6"></div>
                                            
                                                <div clas="col-sm-6">
                                                    <div class="form-group">
                                                        <a href="javascript:location.reload()"> <button class="btn btn-info" id="btt_limpiar_audiencia" name="btt_limpiar_audiencia" type="button"><i class="fa fa-paste"></i> Limpiar</button></a>
                                                    <button class="btn btn-primary" id="btt_registrar_audiencia" id="btt_registrar_audiencia"  type="button"><i class="fa fa-check"></i>&nbsp;Registrar</button>
                                                    </div>
                                                </div>        
                                        </div>
                                            </center>
                                    </div>
                                </div>
                            </div>
                     </div>
                </div>
            
            </div>
              <div class="row" id="datos_documento_row" style="display:none">
                <div class="col-lg-12" id="datos_documentos_div">
                    <div class="ibox float-e-margins">
                          <div class="ibox-title">
                            <h3>Datos del documento<small></small></h3>
                                <div class="ibox-content">
                                      <form enctype="multipart/form-data" id="form_documento" name="form_documento" method="post" class="form-horizontal">

                                    
                                                                             <div class="form-group has-success"><label class="col-sm-2 control-label" for="tipo_registro">Tipo de documento:</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="tipo_documento" id="tipo_documento">
                                                <option  value="0">Seleccione</option>
                                                <option  value="1">Agenda/Eventos</option>
                                                <option  value="2">Administración</option>
                                                <option  value="3">Peticiones</option>
                                            </select>
                                        
                                        </div>
                                    </div>
                                             
                                            <div class="form-group" >
                                        <label class="col-sm-2 control-label">Numero de documento:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="numero_documento" name="numero_documento" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                        <label class="col-sm-2 control-label">Folio:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="folio_documento" name="folio_documento" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                 
                                    </div>
                                          
                                    <div class="form-group" id="fecha_documento">
                                               <label class="col-sm-2 control-label">Fecha de documento: </label>
                                        <div class="col-sm-10">
                                            
                                            <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" id="fecha_documento" name="fecha_documento" class="form-control">
                                            </div>
                                         </div>
                                          </div>       
                                                             <div class="hr-line-dashed"></div>
                                    </form>

                                    <div id="datos_agenda" style="display:none">
                                        <form enctype="multipart/form-data" method="post" id="form_datos_agenda" name="form_datos_agenda" class="form-horizontal">
                                    <input type="hidden" id="idDocumento_hide" name="idDocumento_hide" >
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Remitente:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="remitente_agenda" name="remitente_agenda" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>
                                
                                        <div class="hr-line-dashed"></div>
                               <div class="form-group">
                                        <label class="col-sm-2 control-label">Cargo:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="cargo_agenda" name="cargo_agenda" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>
                                                  <div class="hr-line-dashed"></div>
                               <div class="form-group">
                                        <label class="col-sm-2 control-label">Dependencia:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="dependencia_agenda" name="dependencia_agenda" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>
                                          <div class="ibox-title">
                                          <div class="form-group">
                                              
                                                     <h3>Datos del evento<small></small></h3> 
                                            
                                        </div>
                                        </div>
                                                <div class="ibox-title">
                                        </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nombre del evento:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="nombre_evento_agenda" name="nombre_evento_agenda" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>
                                        <div class="hr-line-dashed"></div>
                                          <div class="form-group" id="fecha_evento">
                                       <label class="col-sm-2 control-label">Fecha del evento: </label>
                                        <div class="col-sm-4">
                                            
                                            <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" id="fecha_evento_agenda"  name="fecha_evento_agenda" class="form-control">
                                            </div>
                                         </div>
                                                 <label class="col-sm-2 control-label">Hora del evento: </label>
                                              <div class="col-sm-4">
                                                  <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" id="hora_evento_agenda" name="hora_evento_agenda" class="form-control" value="09:30" >
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                                          </div>
                                        </div>
                                        
                                         <div class="hr-line-dashed"></div>
            
                                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Descripcion del evento:</label>

                                        <div class="col-sm-10">
                                                <textarea id="descripcion_evento_agenda" name="descripcion_evento_agenda" class="form-control" rows="5" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
                                    </div>
                                          <div class="hr-line-dashed"></div>
                                             <div class="form-group">
                                        <label class="col-sm-2 control-label">Calle y Numero:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="callenumero_agenda" name="callenumero_agenda" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                          </div>
                                                <div id="div_select_colonia">
                                                  <div class="form-group"><label class="col-sm-2 control-label" for="tipo_registro">Colonia del evento:</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b"  name="colonia_evento" id="colonia_evento">
                                                   <option  value="0">Seleccione</option>
                                                    <option  value="La Concepción">La Concepción</option>
                                                  <option  value="San Francisco">San Francisco</option>
                                                  <option  value="Guadalupe">Guadalupe</option>
                                                  <option  value="San Juan">San Juan</option>
                                                  <option  value="San Isidro">San Isidro</option>
                                                  <option  value="San Lucas">San Lucas</option>
                                                  <option  value="La Magdalena">La Magdalena</option>
                                                  <option  value="Santa María">Santa María</option>
                                                  <option  value="San Miguel">San Miguel</option>
                                                  <option  value="San Nicolás">San Nicolás</option>
                                                  <option  value="San Pedro">San Pedro</option>
                                                  <option  value="Santiago">Santiago</option>
                                                  <option  value="Álvaro Obregón">Álvaro Obregón</option>
                                                  <option  value="Buenavista">Buenavista</option>
                                                  <option  value="Emiliano Zapata">Emiliano Zapata</option>
                                                  <option  value="Isidro Fabela">Isidro Fabela</option>
                                                  <option  value="Reforma">Reforma</option>
                                                  <option  value="Alfredo del Mazo">Alfredo del Mazo</option>
                                                  <option  value="Francisco I. Madero">Francisco I. Madero</option>
                                                  <option  value="Santa Elena">Santa Elena</option>
                                                  <option  value="Villas de Atenco">Villas de Atenco</option>
                                                  <option  value="Carlos Hank González">Carlos Hank González</option>
                                                  <option  value="El Fortín">El Fortín</option>
                                                  <option  value="Angel I">Angel I</option>
                                                  <option  value="Angel II">Angel II</option>
                                                  <option  value="Angel III">Angel III</option>
                                                  <option  value="El Rosendal">El Rosendal</option>
                                                  <option  value="Las Magdalenas III">Las Magdalenas III</option>
                                                  <option  value="El Dorado I">El Dorado I</option>
                                                  <option  value="El Dorado II">El Dorado II</option>
                                                  <option  value="Vista Verde">Vista Verde</option>
                                                  <option  value="Las Magdalenas IV">Las Magdalenas IV</option>
                                                  <option  value="Pavitac">Pavitac</option>
                                                  <option  value="Residencial Santa María">Residencial Santa María</option>
                                                  <option  value="Los Perales">Los Perales</option>
                                                  <option  value="Alborada II">Alborada II</option>
                                                  <option  value="Villas La Magdalena">Villas La Magdalena</option>
                                                  <option  value="Villas La Magdalena II">Villas La Magdalena II</option>
                                                  <option  value="Inmobiliaria Libra">Inmobiliaria Libra</option>
                                                  <option  value="Cipreses Residencial">Cipreses Residencial</option>
                                                  <option  value="El Encanto I">El Encanto I</option>
                                                  <option  value="El Encanto II">El Encanto II</option>
                                                  <option  value="Residencial Olmos">Residencial Olmos</option>
                                                  <option  value="99">Otro</option>
                                            </select>
                                        
                                        </div>
                            <label id="label_colonia" class="col-sm-2 control-label " style="display:none">Colonia:</label>

                                        <div id="colonia_input" class="col-sm-4" style="display:none">
                                            <input type="text" id="colonia_agenda" name="colonia_agenda" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                                                     <label id="label_municipio_agenda" class="col-sm-2 control-label " style="display:none">Municipio:</label>

                                        <div id="municipio_input_agenda" name="municipio_input_agenda" class="col-sm-4" style="display:none">
                                            <input type="text" id="municipio_agenda" name="municipio_agenda" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                                      </div>
                                      
                                       
                                                   
                                        
                                         
                                    </div>
                                              
                                     
                                     <div class="hr-line-dashed"></div>
                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">Asistentes aproximados:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="asistentes_aproximados" name="asistentes_aproximados" class="form-control" onkeypress="return justNumbers(event);">
                                        </div>
                                          </div>
                                                                               <div class="hr-line-dashed"></div>

                                           <div class="form-group">
                                                                                       <label class="col-sm-2 control-label">Tipo de evento:</label>

                                       <div class="col-sm-4">
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="tipo_evento" id="tipo_evento" value="1" checked="">
                                                    <label for="tipo_evento">
                                                        Municipal
                                                    </label>
                                                </div>
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="tipo_evento" id="tipo_evento" value="2">
                                                    <label for="tipo_evento">
                                                        Estatal
                                                    </label>
                                                </div>
                                           <div class="radio radio-danger">
                                                    <input type="radio" name="tipo_evento" id="tipo_evento" value="3">
                                                    <label for="tipo_evento">
                                                        Federal
                                                    </label>
                                                </div>
                                           <div class="radio radio-danger">
                                                    <input type="radio" name="tipo_evento" id="tipo_evento" value="4">
                                                    <label for="tipo_evento">
                                                        Personal
                                                    </label>
                                            </div>
                                            </div>
                                                    <label class="col-sm-2 control-label">Teléfono de contacto:</label>
                                         <div class="col-sm-4">
                                        <div class="input-group m-b"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span> <input type="text" id="telefono_contacto_agenda" name="telefono_contacto_agenda" placeholder="722-XXX-XXX" class="form-control" onkeypress="return justNumbers(event);"></div>
                                        </div>
                                      
                                        </div>
                                        </form>
                                                                                                                       <div class="hr-line-dashed"></div>

                                              <div class="row">
                                        <center>
                                        <div class="col-sm-12">
                                            <div clas="col-sm-6"></div>
                                            
                                                <div clas="col-sm-6">
                                                    <div class="form-group">
                                                        <a href="javascript:location.reload()"><button class="btn btn-info" id="btt_limpiar_agenda_eventos" name="btt_limpiar_agenda_eventos" type="button"><i class="fa fa-paste"></i> Limpiar</button></a>
                                                    <button class="btn btn-primary" id="btt_registrar_agenda_eventos" id="btt_limpiar_agenda_eventos"  type="button"><i class="fa fa-check"></i>&nbsp;Registrar</button>
                                                    </div>
                                                </div>        
                                        </div>
                                            </center>
                                    </div>
                                    </div>
                                            <div id="datos_administracion" style="display:none">
                                    <form enctype="multipart/form-data" method="post" id="form_datos_administracion" name="form_datos_administracion" class="form-horizontal">
                                     <input type="hidden" id="idDocumento_hide1" name="idDocumento_hide1" >
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Remitente:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="remitente_administracion" name="remitente_administracion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>
                                
                                        <div class="hr-line-dashed"></div>
                               <div class="form-group">
                                        <label class="col-sm-2 control-label">Cargo:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="cargo_administracion" name="cargo_administracion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>
                                          <div class="hr-line-dashed"></div>
                                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Dependencia:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="dependencia_administracion" name="dependencia_administracion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>
                                                                               <div class="hr-line-dashed"></div>

                                           <div class="form-group">
                                                                                       <label class="col-sm-2 control-label">Tipo de escrito:</label>

                                       <div class="col-sm-4">
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio_tipo_escrito1" id="radio_tipo_escrito1" value="1" checked="">
                                                    <label for="radio_tipo_escrito">
                                                        Con copia para
                                                    </label>
                                                </div>
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio_tipo_escrito1" id="radio_tipo_escrito1" value="2">
                                                    <label for="radio_tipo_escrito">
                                                        Presidente Municipal
                                                    </label>
                                                </div>
                                         
                                            </div>
                                        
                                      
                                        </div>
            
                                    <div id="div_destinatario" class="form-group" style="display:block">
                                        <label class="col-sm-2 control-label">Destinatario:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="destinatario_administracion" name="destinatario_administracion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                    </div>
                                     
                                        
                                         <div class="hr-line-dashed"></div>
            
                                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Asunto:</label>

                                        <div class="col-sm-10">
                                                <textarea class="form-control" id="asunto_administracion" name="asunto_administracion" rows="5" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
                                    </div>
                                                  <div class="hr-line-dashed"></div>
            
                                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Seguimiento:</label>

                                        <div class="col-sm-10">
                                                <textarea class="form-control" id="seguimiento_administracion" name="seguimiento_administracion" rows="5" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
                                    </div>
                  <div class="hr-line-dashed"></div>
                                    <div class="row">
                                        <center>
                                        <div class="col-sm-12">
                                            <div clas="col-sm-6"></div>
                                            
                                                <div clas="col-sm-6">
                                                    <div class="form-group">
                                                        <a href="javascript:location.reload()"><button class="btn btn-info" id="btt_limpiar_administracion" name="btt_limpiar_administracion" type="button"><i class="fa fa-paste"></i> Limpiar</button></a>
                                                    <button class="btn btn-primary" id="btt_registrar_administracion" id="btt_registrar_administracion"  type="button"><i class="fa fa-check"></i>&nbsp;Registrar</button>
                                                    </div>
                                                </div>        
                                        </div>
                             
                                    </div>
                                    
                                                </form>
                                               
                                            </center>
                                    </div>
                                <div id="datos_peticiones" style="display:none">
                                    <form enctype="multipart/form-data" method="post" id="form_datos_peticiones" name="form_datos_peticiones" class="form-horizontal">
                                            <input type="hidden" id="idDocumento_hide2" name="idDocumento_hide2" >
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Peticionario nombre(s):</label>

                                        <div class="col-sm-10">
                                            <input type="text"  id="nombre_peticionario" name="nombre_peticionario" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
                                    </div>
                                
                                        <div class="hr-line-dashed"></div>
                               <div class="form-group">
                                        <label class="col-sm-2 control-label">Peticionario A.Paterno:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="apellidop_peticionario" name="apellidop_peticionario" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
                                     <label class="col-sm-2 control-label">Peticionario A.Materno:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="apellidom_peticionario" name="apellidom_peticionario" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Peticionario cargo:</label>

                                        <div class="col-sm-10">
                                            <input type="text"  id="cargo_peticionario" name="cargo_peticionario" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return soloLetras(event);">
                                        </div>
                                    </div>
                                                                            <div class="hr-line-dashed"></div>


                                      <div class="form-group">
                                        <label class="col-sm-2 control-label">Peticionario Celular:</label>
                                         <div class="col-sm-4">
                                        <div class="input-group m-b"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span> <input type="text" id="celular_peticionario" name="celular_peticionario" placeholder="722-XXX-XXX" class="form-control" onkeypress="return justNumbers(event);"></div>
                                        </div>
                                          <label class="col-sm-2 control-label">Peticionario Casa Teléfono:</label>
                                         <div class="col-sm-4">
                                        <div class="input-group m-b"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span> <input type="text"  id="casa_peticionario" name="casa_peticionario" placeholder="722-XXX-XXX" class="form-control" onkeypress="return justNumbers(event);"></div>
                                        </div>
                                          </div>
                                        <div class="hr-line-dashed"></div>
                                          <div class="form-group">
                                        <label class="col-sm-2 control-label">Calle y Numero:</label>

                                        <div class="col-sm-10">
                                            <input type="text" id="callenumero_peticion" name="callenumero_peticion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                          </div>
                                                  <div class="form-group"><label class="col-sm-2 control-label" for="tipo_registro">Colonia del peticionario:</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="colonia_peticion" id="colonia_peticion">
                                          <option  value="0">Seleccione</option>
                                                    <option  value="La Concepción">La Concepción</option>
                                                  <option  value="San Francisco">San Francisco</option>
                                                  <option  value="Guadalupe">Guadalupe</option>
                                                  <option  value="San Juan">San Juan</option>
                                                  <option  value="San Isidro">San Isidro</option>
                                                  <option  value="San Lucas">San Lucas</option>
                                                  <option  value="La Magdalena">La Magdalena</option>
                                                  <option  value="Santa María">Santa María</option>
                                                  <option  value="San Miguel">San Miguel</option>
                                                  <option  value="San Nicolás">San Nicolás</option>
                                                  <option  value="San Pedro">San Pedro</option>
                                                  <option  value="Santiago">Santiago</option>
                                                  <option  value="Álvaro Obregón">Álvaro Obregón</option>
                                                  <option  value="Buenavista">Buenavista</option>
                                                  <option  value="Emiliano Zapata">Emiliano Zapata</option>
                                                  <option  value="Isidro Fabela">Isidro Fabela</option>
                                                  <option  value="Reforma">Reforma</option>
                                                  <option  value="Alfredo del Mazo">Alfredo del Mazo</option>
                                                  <option  value="Francisco I. Madero">Francisco I. Madero</option>
                                                  <option  value="Santa Elena">Santa Elena</option>
                                                  <option  value="Villas de Atenco">Villas de Atenco</option>
                                                  <option  value="Carlos Hank González">Carlos Hank González</option>
                                                  <option  value="El Fortín">El Fortín</option>
                                                  <option  value="Angel I">Angel I</option>
                                                  <option  value="Angel II">Angel II</option>
                                                  <option  value="Angel III">Angel III</option>
                                                  <option  value="El Rosendal">El Rosendal</option>
                                                  <option  value="Las Magdalenas III">Las Magdalenas III</option>
                                                  <option  value="El Dorado I">El Dorado I</option>
                                                  <option  value="El Dorado II">El Dorado II</option>
                                                  <option  value="Vista Verde">Vista Verde</option>
                                                  <option  value="Las Magdalenas IV">Las Magdalenas IV</option>
                                                  <option  value="Pavitac">Pavitac</option>
                                                  <option  value="Residencial Santa María">Residencial Santa María</option>
                                                  <option  value="Los Perales">Los Perales</option>
                                                  <option  value="Alborada II">Alborada II</option>
                                                  <option  value="Villas La Magdalena">Villas La Magdalena</option>
                                                  <option  value="Villas La Magdalena II">Villas La Magdalena II</option>
                                                  <option  value="Inmobiliaria Libra">Inmobiliaria Libra</option>
                                                  <option  value="Cipreses Residencial">Cipreses Residencial</option>
                                                  <option  value="El Encanto I">El Encanto I</option>
                                                  <option  value="El Encanto II">El Encanto II</option>
                                                  <option  value="Residencial Olmos">Residencial Olmos</option>
                                                  <option  value="99">Otro</option>
                                            </select>
                                        
                                        </div>
                                       <label id="label_colonia_peticion" class="col-sm-2 control-label " style="display:none">Colonia:</label>

                                        <div id="colonia_input_peticion" class="col-sm-4" style="display:none">
                                            <input type="text" id="colonia_peticion2" name="colonia_peticion2" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                                             <label id="label_municipio_peticion" class="col-sm-2 control-label " style="display:none">Municipio:</label>

                                        <div id="colonia_input_peticion" class="col-sm-14" style="display:none">
                                            <input type="text" id="municipio_peticion" name="municipio_peticion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">
                                        </div>
                                                      
                                                      
                                                                        <label id="label_municipio_peticion" class="col-sm-2 control-label " style="display:none">Municipio:</label>

                                        <div id="municipio_input_peticion" name="municipio_input_peticion" class="col-sm-4" style="display:none">
                                            <input type="text" id="municipio_peticion" name="municipio_peticion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" >
                                        </div>
                                    </div>
                                           
                                     
                                         <div class="hr-line-dashed"></div>
            
                                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Petición:</label>

                                        <div class="col-sm-10">
                                                <textarea class="form-control" id="peticion_peticionario" name="peticion_peticionario" rows="5" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
                                    </div>
                                                                               <div class="hr-line-dashed"></div>
                                    
                                                                             <div class="form-group has-success"><label class="col-sm-2 control-label" for="tipo_registro">Tipo de petición:</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="tipo_peticion" id="tipo_peticion">
                                                <option  value="0">Seleccione</option>
                                                <option  value="1">Materiales/Regalos/Obsequios</option>
                                                <option  value="2">Laboral</option>
                                                <option  value="3">Salud</option>
                                                <option  value="4">Servicios Federales</option>
                                                <option  value="5">Servicios Estatales</option>
                                                <option  value="6">Servicios Municipales</option>

                                            </select>
                                        
                                        </div>
                                    </div>
                                    
                                    <div id="div_materiales_regalos" style="display:none">
                                                                                  <div class="hr-line-dashed"></div>
                                    
                                       <div class="form-group">
                                        <label class="col-sm-2 control-label">Concepto:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="concepto_peticionario" name="concepto_peticionario" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)">  
                                        </div>
                                           
                                             
                                        <label class="col-sm-2 control-label">Cantidad:</label>

                                        <div class="col-sm-4">
                                            <input type="text" id="cantidad_peticionario" name="cantidad_peticionario" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" onkeypress="return justNumbers(event);">
                                        </div>
                                  
                                    </div>
                                     
                                    
                        <div class="form-group has-success">
                            
                            <label class="col-sm-2 control-label" for="tipo_registro">Unidad de medida:</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="unidad_medida" id="unidad_medida">
                                                <option  value="">Seleccione</option>
                                                <option  value="Kilogramos">Kilogramos</option>
                                                <option  value="Tonelada">Tonelada</option>
                                                <option  value="Pieza">Pieza</option>
                                                <option  value="Litros">Litros</option>
                                                <option  value="Metros">Metros</option>

                                            </select>
                                        
                                        </div>
                         </div>
                                      
                                                                                 <div class="hr-line-dashed"></div>
                                    
                                                                             <div class="form-group has-success"><label class="col-sm-2 control-label" for="tipo_rubro">Rubro:</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="tipo_rubro" id="tipo_rubro">
                                                <option  value="0">Seleccione</option>
                                                <option  value="Calles/Servicios">Ciudadano</option>
                                                <option  value="Educación">Educación</option>
                                                <option  value="Religioso">Religioso</option>
                                                <option  value="Salud">Salud</option>
                                                <option  value="Seguridad">Seguridad </option>
                                                <option  value="Calles/Servicios">Calles/Servicios</option>
                                                <option  value="Deportivo">Deportivo</option>

                                            


                                            </select>
                                        
                                        </div>
                                    </div>                                           <div class="hr-line-dashed"></div>
                                      </div>

                                                                                                                      <div class="hr-line-dashed"></div>

                                          <div class="form-group has-success">
                            
                            <label class="col-sm-2 control-label" for="tipo_registro">Prioridad:</label>

                                        <div class="col-sm-10">
                                            <select class="form-control m-b" name="prioridad_peticionario" id="prioridad_peticionario">
                                                <option  value="0">Seleccione</option>
                                                <option  value="1">Urgente</option>
                                                <option  value="2">Regular</option>
                                            </select>
                                        
                                        </div>
                         </div>
                                 
                                     
                                       
                                                  <div class="hr-line-dashed"></div>
            
                                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Observaciones:</label>

                                        <div class="col-sm-10">
                                                <textarea class="form-control" id="observaciones_peticionario" name="observaciones_peticionario" rows="5" id="comment" onkeyup="aMays(event, this)" onblur="aMays(event, this)"></textarea>                                                                                </div>
                                    </div>
                 <div class="hr-line-dashed"></div>
                                    <div class="row">
                                        <center>
                                        <div class="col-sm-12">
                                            <div clas="col-sm-6"></div>
                                            
                                                <div clas="col-sm-6">
                                                    <div class="form-group">
                                                        <a href="javascript:location.reload()"> <button class="btn btn-info" id="btt_limpiar_peticiones" name="btt_limpiar_peticiones" type="button"><i class="fa fa-paste"></i> Limpiar</button></a>
                                                    <button class="btn btn-primary" id="btt_registrar_peticiones" id="btt_registrar_peticiones"  type="button"><i class="fa fa-check"></i>&nbsp;Registrar</button>
                                                    </div>
                                                </div>        
                                        </div>
                             
                                    </div>
                             
                                    </div>
                                        
                                   
                                    </form>
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

    </div>
</div>



</body>

</html>
