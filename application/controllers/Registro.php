<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        
    function __construct(){
        parent::__construct();
        $this -> load -> database();
    
      
    }
	public function index()
	{
            
        $this->load->view('login/login');

	}
    public function goIndex(){
        $this->load->view('registro/formulario');    
    }
    public function registros(){
        
        $this->load->view('registro/registros');
    }
     public function registros_contactado(){
        
        $this->load->view('registro/registros_contactado');
    }
     public function registros_na(){
        
        $this->load->view('registro/registros_na');
    }
    
    public function goAudiencias(){
    $this->load->view('registro/audiencias');

        
    }
        public function getStamp(){
  $now = (string)microtime();
  $now = explode(' ', $now);
  $mm = explode('.', $now[0]);
  $mm = $mm[1];
  $now = $now[1];
  $segundos = $now % 60;
  $segundos = $segundos < 10 ? "$segundos" : $segundos;
  return strval(date("YmdHi",mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"))) . "$segundos$mm");
}
    public function setAudiencia(){
        
        $time = time();

        $this->load->model("Audiencia_model");
        $this->load->model("Datos_generales_model");
        $nombre=$this->input->post("nombre_audiencia");
        $ap_paterno=$this->input->post("apellidop_audiencia");
        $ap_materno=$this->input->post("apellidom_audiencia");
        $cargo=$this->input->post("cargo_audiencia");
        $tel_celular=$this->input->post("celular_audiencia");
        $tel_casa=$this->input->post("casa_audiencia");
        $calle_y_numero=$this->input->post("callenumero_audiencia");
        $colonia=$this->input->post("colonia_audiencia");
        $colonia_otro=$this->input->post("colonia_audiencia2");
        $municipio=$this->input->post("municipio_audiencia");
        $microfecha=$this->getStamp();

        if($colonia=="99"){
        $data=array(
            'nombre'=>$nombre,
            'ap_paterno'=>$ap_paterno,
            'ap_materno'=>$ap_materno,
            'cargo'=>$cargo,
            'tel_celular'=>$tel_celular,
            'tel_casa'=>$tel_casa,
            'calle_y_numero'=>$calle_y_numero,
            'colonia'=>$colonia_otro,
            'municipio'=>$municipio,
            'fecha_entrada'=>date("Y-m-d H:i:s H:i:s"),
            'microfecha'=>$microfecha

        
        );
        }
        if($colonia!="99"){
              $data=array(
            'nombre'=>$nombre,
            'ap_paterno'=>$ap_paterno,
            'ap_materno'=>$ap_materno,
            'cargo'=>$cargo,
            'tel_celular'=>$tel_celular,
            'tel_casa'=>$tel_casa,
            'calle_y_numero'=>$calle_y_numero,
            'colonia'=>$colonia,
            'municipio'=>"San Mateo Atenco",
            'fecha_entrada'=>date('Y-m-d H:i:s H:i:s'),
            'microfecha'=>$microfecha

        
        );
        }
        
        
        $this->Datos_generales_model->insertar_datos_generales($data); 
        $resultado=$this->Datos_generales_model->getIdDatosGenerales($data);
        $fecha_audiencia=$this->input->post("fecha_audiencia_input");
        $asunto_audiencia=$this->input->post("asunto_audiencia");
        $seguimiento=$this->input->post("seguimiento_audiencia");
        
        $data1=array(
            'fecha_audiencia'=>$fecha_audiencia,
            'asunto_de_audiencia'=>$asunto_audiencia,
            'seguimiento'=>$seguimiento,
            'id_datos_generales'=>$resultado,
            'fecha_entrada'=>date('Y-m-d H:i:s'),
            'microfecha'=>$microfecha
            
        );
        
        $this->Audiencia_model->insertar_audiencia($data1);
        

    }
    
    public function setAgenda_eventos(){
        $this->load->model("Documento_model");
        $this->load->model("Agenda_eventos_model");
        
        
    }
    
    public function setDocumento(){
        $this->load->model("Documento_model");
        $time = time();
        $fecha_documento=$this->input->post("fecha_documento");
        $tipo_documento=$this->input->post("tipo_documento");
        $numero_documento=$this->input->post("numero_documento");
        $folio_documento=$this->input->post("folio_documento");
        $microfecha=$this->getStamp();
        if( ($fecha_documento=='') && ($numero_documento=='')&& ($folio_documento=='')){
            echo json_encode("AQUI ENTRO EN EL ERROR");    
        }
        else{
        $data=array(
            "fecha_documento"=>$fecha_documento,
            "tipo_documento"=>$tipo_documento,
            "numero_documento"=>$numero_documento,
            "folio_documento"=>$folio_documento,
            'fecha_entrada'=>date('Y-m-d H:i:s'),
            'microfecha'=>$microfecha  
        );
    
        $this->Documento_model->insertar_documento($data);
        $idDocumento=$this->Documento_model->getIdDocumento($data);
        
        echo json_encode($idDocumento);
        }
        
    }
    
    public function setAgenda(){
        
        $this->load->model("Agenda_eventos_model");
        $fecha_de_evento=$this->input->post("fecha_evento_agenda");
        $calle_y_numero=$this->input->post("callenumero_agenda");
        $hora=$this->input->post("hora_evento_agenda");
        $asistentes_aproximados=$this->input->post("asistentes_aproximados");
        $tipo_de_evento=$this->input->post("tipo_evento");
        $nombre_evento=$this->input->post("nombre_evento_agenda");
        $descripcion_evento=$this->input->post("descripcion_evento_agenda");
        $remitente=$this->input->post("remitente_agenda");
        $cargo=$this->input->post("cargo_agenda");
        $telefono_contacto=$this->input->post("telefono_contacto_agenda");
        $colonia_evento=$this->input->post("colonia_evento");
        $colonia_otro=$this->input->post("colonia_agenda");
        $dependencia=$this->input->post("dependencia_agenda");
        $municipio=$this->input->post("municipio_agenda");
        $id_documento=$this->input->post("idDocumento_hide");
        
        if($colonia_evento=="99"){   
        
        $data=array(
            "fecha_de_evento"=>$fecha_de_evento,
            "calle_y_numero"=>$calle_y_numero,
            "hora"=>$hora,
            "municipio"=>$municipio,
            "asistentes_aproximados"=>$asistentes_aproximados,
            "tipo_de_evento"=>$tipo_de_evento,
            "nombre_evento"=>$nombre_evento,
            "descripcion_evento"=>$descripcion_evento,
            "remitente"=>$remitente,
            "cargo"=>$cargo,
            "dependencia"=>$dependencia,
            "telefono_contacto"=>$telefono_contacto,
            "colonia_evento"=>$colonia_otro,
            "id_documento"=>$id_documento,
            'fecha_entrada'=>date('Y-m-d H:i:s')
        
        );
        }
        
        if($colonia_evento!="99"){
                $data=array(
            "fecha_de_evento"=>$fecha_de_evento,
            "calle_y_numero"=>$calle_y_numero,
            "hora"=>$hora,
            "asistentes_aproximados"=>$asistentes_aproximados,
            "tipo_de_evento"=>$tipo_de_evento,
            "nombre_evento"=>$nombre_evento,
            "descripcion_evento"=>$descripcion_evento,
            "remitente"=>$remitente,
            "cargo"=>$cargo,
            "dependencia"=>$dependencia,
            "telefono_contacto"=>$telefono_contacto,
            "colonia_evento"=>$colonia_evento,
            "id_documento"=>$id_documento,
            "municipio"=>"San Mateo Atenco",
            'fecha_entrada'=>date('Y-m-d H:i:s')
        
        ); 
        }
       
        $this->Agenda_eventos_model->insertar_agenda($data);
    }

    public function setAdministracion(){
        
        $this->load->model("Administracion_model");
        $time = time();
        $tipo_de_escrito=$this->input->post("radio_tipo_escrito1");
        $seguimiento=$this->input->post("seguimiento_administracion");
        $remitente=$this->input->post("remitente_administracion");
        $cargo=$this->input->post("cargo_administracion");
        $destinatario=$this->input->post("destinatario_administracion");
        $asunto=$this->input->post("asunto_administracion");
        $dependencia_administracion=$this->input->post("dependencia_administracion");
        $id_documento=$this->input->post("idDocumento_hide1");

        $data=array(
            "tipo_de_escrito"=>$tipo_de_escrito,
            "seguimiento"=>$seguimiento,
            "remitente"=>$remitente,
            "cargo"=>$cargo,
            "dependencia"=>$dependencia_administracion,
            "destinatario"=>$destinatario,
            "asunto"=>$asunto,
            "id_documento"=>$id_documento,
            'fecha_entrada'=>date('Y-m-d H:i:s')
        
        );
        $this->Administracion_model->insertar_administracion($data);
    }


     public function setPeticiones(){
        $time = time();
        $this->load->model("Peticiones_model");
        $this->load->model("Datos_generales_model");
        $nombre=$this->input->post("nombre_peticionario");
        $ap_paterno=$this->input->post("apellidop_peticionario");
        $ap_materno=$this->input->post("apellidom_peticionario");
        $cargo=$this->input->post("cargo_peticionario");
        $tel_celular=$this->input->post("celular_peticionario");
        $tel_casa=$this->input->post("casa_peticionario");
        $calle_y_numero=$this->input->post("callenumero_peticion"); //NO EXISTE CALLENUMERO EN PETICIONES
        $colonia=$this->input->post("colonia_peticion"); //NO EXISTE COLONIA AUDIENCIA EN PETICIONES
        $colonia_otro=$this->input->post("colonia_peticion2");
        $municipio=$this->input->post("municipio_peticion");
        $microfecha=$this->getStamp();
        if($colonia=="99"){
        $data=array(
            'nombre'=>$nombre,
            'ap_paterno'=>$ap_paterno,
            'ap_materno'=>$ap_materno,
            'tel_celular'=>$tel_celular,
            'cargo'=>$cargo,
            'tel_casa'=>$tel_casa,
            'calle_y_numero'=>$calle_y_numero,//NO EXISTE CALLENUMERO EN PETICIONES
            'colonia'=>$colonia_otro,//NO EXISTE COLONIA AUDIENCIA EN PETICIONES
            'municipio'=>$municipio,
            'fecha_entrada'=>date('Y-m-d H:i:s'),
            'microfecha'=>$microfecha
        
        );
        }
        if($colonia!="99"){
        $data=array(
            'nombre'=>$nombre,
            'ap_paterno'=>$ap_paterno,
            'ap_materno'=>$ap_materno,
            'cargo'=>$cargo,
            'tel_celular'=>$tel_celular,
            'tel_casa'=>$tel_casa,
            'calle_y_numero'=>$calle_y_numero,//NO EXISTE CALLENUMERO EN PETICIONES
            'colonia'=>$colonia,
            'municipio'=>"San Mateo Atenco",//NO EXISTE COLONIA AUDIENCIA EN PETICIONES
            'fecha_entrada'=>date('Y-m-d H:i:s'),
            'microfecha'=>$microfecha
            
        
        );  
            
            
        }
        $this->Datos_generales_model->insertar_datos_generales($data); 
        $resultado=$this->Datos_generales_model->getIdDatosGenerales($data);




        $tipo_de_peticion =$this->input->post("tipo_peticion");
        $concepto=$this->input->post("concepto_peticionario");
        $unidad_de_medida =$this->input->post("unidad_medida");
        $cantidad=$this->input->post("cantidad_peticionario");
        $rubro=$this->input->post("tipo_rubro");     
        $prioridad=$this->input->post("prioridad_peticionario");
        $observaciones=$this->input->post("observaciones_peticionario");
        $peticion=$this->input->post("peticion_peticionario"); 
        $id_documento=$this->input->post("idDocumento_hide2");

        $data1=array(
            "tipo_de_peticion"=>$tipo_de_peticion,
            "concepto"=>$concepto,
            "unidad_de_medida"=>$unidad_de_medida,
            "cantidad"=>$cantidad,
            "rubro"=>$rubro,
            "prioridad"=>$prioridad,
            "observaciones"=>$observaciones,
            "peticion"=>$peticion,
            'id_datos_generales'=>$resultado,
            "id_documento"=>$id_documento,
            'fecha_entrada'=>date('Y-m-d H:i:s')
        
        );
        $this->Peticiones_model->insertar_peticiones($data1);
    }
    
    public function getPeticiones(){
       $this->load->model('Peticiones_model');
       $data=$this->Peticiones_model->getPeticiones();
        echo json_encode($data);
        
    }
     public function getPeticiones_contactado(){
       $this->load->model('Peticiones_model');
       $data=$this->Peticiones_model->getPeticiones_contactado();
        echo json_encode($data);
        
    }
     public function getPeticiones_na(){
       $this->load->model('Peticiones_model');
       $data=$this->Peticiones_model->getPeticiones_na();
        echo json_encode($data);
        
    }
      public function getAudiencias(){
       $this->load->model('Audiencia_model');
       $data=$this->Audiencia_model->getAudiencias();
        echo json_encode($data);
        
    }
    
    public function updatePeticionesById(){
     $this->load->model('Peticiones_model');
        
        $tipo_de_peticion =$this->input->post("tipo");
        $concepto=$this->input->post("concepto");
        $unidad_de_medida =$this->input->post("unidad_de_medida");
        $cantidad=$this->input->post("cantidad");
        $rubro=$this->input->post("rubro");     
        $prioridad=$this->input->post("prioridad");
        $observaciones=$this->input->post("observaciones");
        $peticion=$this->input->post("peticion"); 
        $id_peticiones=$this->input->post("id_peticiones");
        $status=$this->input->post("status");
        if($tipo_de_peticion=="Materiales/Regalos/Obsequios"){
           $tipo_de_peticion=1;     
        }
         if($tipo_de_peticion=="Laboral"){
           $tipo_de_peticion=2;     
        }
         if($tipo_de_peticion=="Salud"){
           $tipo_de_peticion=3;     
        }
          if($tipo_de_peticion=="Servicios Federales"){
           $tipo_de_peticion=4;     
        }
        if($tipo_de_peticion=="Servicios Estatales"){
           $tipo_de_peticion=5;     
        } 
        if($tipo_de_peticion=="Servicios Municipales"){
           $tipo_de_peticion=6;     
        } 
        if($prioridad=="Urgente"){
           $prioridad=1;     
        } 
        if($prioridad=="Regular"){
           $prioridad=2;     
        }
         if($status=="Contactado"){
           $status=1;     
        } 
        if($status=="N/A"){
           $status=2;     
        }
        $data=array(
            "tipo_de_peticion"=>$tipo_de_peticion,
            "concepto"=>$concepto,
            "unidad_de_medida"=>$unidad_de_medida,
            "cantidad"=>$cantidad,
            "rubro"=>$rubro,
            "prioridad"=>$prioridad,
            "observaciones"=>$observaciones,
            "peticion"=>$peticion,
            "id_peticiones"=>$id_peticiones,
            "status"=>$status
        
        );
        $this->Peticiones_model->updatePeticionesById($data);
        echo json_encode(true);


    }

    public function updatePeticionyDatosById(){
        $this->load->model('Datos_generales_model');
        $this->load->model('Peticiones_model');
        $tipo_de_peticion =$this->input->post("tipo");
        $concepto=$this->input->post("concepto");
        $unidad_de_medida =$this->input->post("unidad_de_medida");
        $cantidad=$this->input->post("cantidad");
        $rubro=$this->input->post("rubro");     
        $prioridad=$this->input->post("prioridad");
        $observaciones=$this->input->post("observaciones");
        $peticion=$this->input->post("peticion"); 
        $id_peticiones=$this->input->post("id_peticiones");
        $status=$this->input->post("status");
        if($tipo_de_peticion=="Materiales/Regalos/Obsequios"){
           $tipo_de_peticion=1;     
        }
         if($tipo_de_peticion=="Laboral"){
           $tipo_de_peticion=2;     
        }
         if($tipo_de_peticion=="Salud"){
           $tipo_de_peticion=3;     
        }
          if($tipo_de_peticion=="Servicios Federales"){
           $tipo_de_peticion=4;     
        }
        if($tipo_de_peticion=="Servicios Estatales"){
           $tipo_de_peticion=5;     
        } 
        if($tipo_de_peticion=="Servicios Municipales"){
           $tipo_de_peticion=6;     
        } 
        if($prioridad=="Urgente"){
           $prioridad=1;     
        } 
        if($prioridad=="Regular"){
           $prioridad=2;     
        }
         if($status=="Contactado"){
           $status=1;     
        } 
        if($status=="N/A"){
           $status=2;     
        }
         if($status=="Atender"){
           $status=3;     
        }
         if($status=="Revisar"){
           $status=4;     
        }
         if($status=="No aprobado"){
           $status=5;     
        }
          if($status=="Tramitar e informar"){
           $status=6;     
        }
        $data1=array(
            "tipo_de_peticion"=>$tipo_de_peticion,
            "concepto"=>$concepto,
            "unidad_de_medida"=>$unidad_de_medida,
            "cantidad"=>$cantidad,
            "rubro"=>$rubro,
            "prioridad"=>$prioridad,
            "observaciones"=>$observaciones,
            "peticion"=>$peticion,
            "id_peticiones"=>$id_peticiones,
            "status"=>$status
        
        );
        $this->Peticiones_model->updatePeticionesById($data1);
        $nombre=$this->input->post("nombre");
        $apellido_p=$this->input->post("apellido_p");
        $apellido_m=$this->input->post("apellido_m");
        $cargo=$this->input->post("cargo");
        $tel_celular=$this->input->post("cel");
        $tel_casa=$this->input->post("casa");
        $calle_y_numero=$this->input->post("calle"); //NO EXISTE CALLENUMERO EN PETICIONES
        $colonia=$this->input->post("colonia"); //NO EXISTE COLONIA AUDIENCIA EN PETICIONES
        $municipio=$this->input->post("municipio");
        $id_datos_generales=$this->input->post("id_datos_generales");
          $data2=array(
            'nombre'=>$nombre,
            'ap_paterno'=>$apellido_p,
            'ap_materno'=>$apellido_m,
            'cargo'=>$cargo,
            'tel_celular'=>$tel_celular,  
            'tel_casa'=>$tel_casa,
            'calle_y_numero'=>$calle_y_numero,//NO EXISTE CALLENUMERO EN PETICIONES
            'colonia'=>$colonia,//NO EXISTE COLONIA AUDIENCIA EN PETICIONES
            'municipio'=>$municipio,
            'id_datos_generales'=>$id_datos_generales
        
        );
        
        $this->Datos_generales_model->updatePersonaById($data2);
        echo json_encode(true);
        
    }
    
    public function getAudienciasTimeLine(){
    $this->load->model('Audiencia_model');
    $data=$this->Audiencia_model->getAudienciasTimeLine();
    echo json_encode($data);
        
    }
    
    public function getAdministracion(){
        $this->load->model("Administracion_model");
        $data=$this->Administracion_model->getAdministracion();
        echo json_encode($data);
    }
  public function logout(){
		$this->session->unset_userdata("admin_login");
		$this->load->view('login/login');
	}
    


}