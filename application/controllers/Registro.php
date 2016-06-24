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
       
		$this->load->view('registro/formulario');
	}
    
    public function setAudiencia(){
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
    
        $data=array(
            'nombre'=>$nombre,
            'ap_paterno'=>$ap_paterno,
            'ap_materno'=>$ap_materno,
            'cargo'=>$cargo,
            'tel_celular'=>$tel_celular,
            'tel_casa'=>$tel_casa,
            'calle_y_numero'=>$calle_y_numero,
            'colonia'=>$colonia
        
        );
        
        $this->Datos_generales_model->insertar_datos_generales($data); 
        $resultado=$this->Datos_generales_model->getIdDatosGenerales($data);
        $fecha_audiencia=$this->input->post("fecha_audiencia_input");
        $asunto_audiencia=$this->input->post("asunto_audiencia");
        $seguimiento=$this->input->post("seguimiento_audiencia");
        
        $data1=array(
            'fecha_audiencia'=>$fecha_audiencia,
            'asunto_de_audiencia'=>$asunto_audiencia,
            'seguimiento'=>$seguimiento,
            'id_datos_generales'=>$resultado
            
        );
        
        $this->Audiencia_model->insertar_audiencia($data1);
        

    }
    
    public function setAgenda_eventos(){
        $this->load->model("Documento_model");
        $this->load->model("Agenda_eventos_model");
        
        
    }
    
    public function setDocumento(){
        $this->load->model("Documento_model");
        $fecha_documento=$this->input->post("fecha_documento");
        $tipo_documento=$this->input->post("tipo_documento");
        $numero_documento=$this->input->post("numero_documento");
        
        $data=array(
            "fecha_documento"=>$fecha_documento,
            "tipo_documento"=>$tipo_documento,
            "numero_documento"=>$numero_documento
        
        );
    
        $this->Documento_model->insertar_documento($data);
        $idDocumento=$this->Documento_model->getIdDocumento($data);
        
        echo json_encode($idDocumento);
       
        
    }
    
    public function setAgenda(){
        
        $this->load->model("Agenda_eventos_model");
    
        $fecha_de_evento=$this->input->post("fecha_evento_agenda");
        $calle_y_numero=$this->input->post("callenumero_agenda");
        $hora=$this->input->post("hora_evento_agenda");
        $municipio=$this->input->post("municipio_agenda");
        $asistentes_aproximados=$this->input->post("asistentes_aproximados");
        $tipo_de_evento=$this->input->post("tipo_evento");
        $nombre_evento=$this->input->post("nombre_evento_agenda");
        $descripcion_evento=$this->input->post("descripcion_evento_agenda");
        $remitente=$this->input->post("remitente_agenda");
        $cargo=$this->input->post("cargo_agenda");
        $telefono_contacto=$this->input->post("telefono_contacto_agenda");
        $colonia_evento=$this->input->post("colonia_evento");
        $colonia_otro=$this->input->post("colonia_agenda");
        $id_documento=$this->input->post("idDocumento_hide");
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
            "telefono_contacto"=>$telefono_contacto,
            "colonia_evento"=>$colonia_evento,
            "colonia_otro"=>$colonia_otro,
            "id_documento"=>$id_documento
        
        );
       
        $this->Agenda_eventos_model->insertar_agenda($data);
    }

    public function setAdministracion(){
        
        $this->load->model("Administracion_model");
    
        $tipo_de_escrito=$this->input->post("radio_tipo_escrito1");
        $seguimiento=$this->input->post("seguimiento_administracion");
        $remitente=$this->input->post("remitente_administracion");
        $cargo=$this->input->post("cargo_administracion");
        $destinatario=$this->input->post("destinatario_administracion");
        $asunto=$this->input->post("asunto_administracion");
        $id_documento=$this->input->post("idDocumento_hide1");

        $data=array(
            "tipo_de_escrito"=>$tipo_de_escrito,
            "seguimiento"=>$seguimiento,
            "remitente"=>$remitente,
            "cargo"=>$cargo,
            "destinatario"=>$destinatario,
            "asunto"=>$asunto,
            "id_documento"=>$id_documento
        
        );
        $this->Administracion_model->insertar_administracion($data);
    }



}