<?php
class Administracion_model extends CI_Model
{ 
  
    function insertar_administracion($data){
      
      $this->db->insert("administracion",$data);
  }
}
     
        
    
    


