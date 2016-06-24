<?php
class Peticiones_model extends CI_Model
{ 
  
    function insertar_peticiones($data){
      
      $this->db->insert("peticiones",$data);
  }
}
     
        
    
    


