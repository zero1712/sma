<?php
class Agenda_eventos_model extends CI_Model
{ 
  
    function insertar_agenda($data){
      
      $this->db->insert("agenda_eventos",$data);
  }
}
     
        
    
    



