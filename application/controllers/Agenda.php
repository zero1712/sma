<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
    
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
      public function index(){
        
        $this->load->view('agenda/agenda');
    }
    
    public function getAgenda(){
    $this->load->model('Agenda_eventos_model');    
    $datos=$this->Agenda_eventos_model->getAgenda();

    echo json_encode($datos);
        
        
    }

    
    public  function updateEventoById(){
        $this->load->model('Agenda_eventos_model');
        $id_agenda_evento=$this->input->post('id_evento');
        $hora=$this->input->post('hora_evento');
        $calle_y_numero=$this->input->post('calle_y_numero');
        $colonia=$this->input->post('colonia_evento');
        $municipio=$this->input->post('municipio_evento');
        $asistentes=$this->input->post('asistentes_evento');
        $remitente=$this->input->post('remitente_evento');
        $cargo=$this->input->post('cargo_evento');
        $dependencia=$this->input->post('dependencia_evento');
        $telefono=$this->input->post('telefono_contacto');
        $tipo=$this->input->post('tipo_evento');
        $descripcion=$this->input->post('descripcion_evento');
        
             
        $data=array(
            "calle_y_numero"=>$calle_y_numero,
            "hora"=>$hora,
            "municipio"=>$municipio,
            "asistentes_aproximados"=>$asistentes,
            "tipo_de_evento"=>$tipo,
            "descripcion_evento"=>$descripcion,
            "remitente"=>$remitente,
            "cargo"=>$cargo,
            "dependencia"=>$dependencia,
            "telefono_contacto"=>$telefono,
            "colonia_evento"=>$colonia,
            "id_agenda_eventos"=>$id_agenda_evento
        );
        $this->Agenda_eventos_model->updateEventobyId($data);
        
        echo json_encode(true);
        
        
        
        
    }
    public function updateAgendaById(){
        $this->load->model('Agenda_eventos_model');
        $id_agenda_eventos=$this->input->post('id_agenda_eventos');
        $fecha_de_evento=$this->input->post('fecha_de_evento');
        $data=array(
            "id_agenda_eventos"=>$id_agenda_eventos,
            "fecha_de_evento"=>$fecha_de_evento
        );
        $this->Agenda_eventos_model->updateAgendaById($data);
        echo json_encode(true);

    }

}