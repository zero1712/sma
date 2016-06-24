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
}