<?php
class Agenda_eventos_model extends CI_Model
{ 
  
    function insertar_agenda($data){
      
      $this->db->insert("agenda_eventos",$data);
  }
    
    function getAgenda(){
        
        $this->db->select('id_agenda_eventos,nombre_evento as title, fecha_de_evento as start,hora,municipio,calle_y_numero,asistentes_aproximados,tipo_de_evento,nombre_evento,descripcion_evento,remitente,cargo,dependencia,telefono_contacto,colonia_evento,id_documento,fecha_entrada');
        $query=$this->db->get('agenda_eventos');
        return $query->result();
    }
    
    function updateEventoById($data){
        
        $this->db->where('id_agenda_eventos',$data['id_agenda_eventos']);
        return $this->db->update('agenda_eventos', $data);
    }
     function updateAgendaById($data){
        
        $this->db->where('id_agenda_eventos',$data['id_agenda_eventos']);
        return $this->db->update('agenda_eventos', $data);
    }
}
     
        
    
    



