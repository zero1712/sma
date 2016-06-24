<?php
class Audiencia_model extends CI_Model
{ 
  
    function insertar_audiencia($data1){
        $this->db->insert('audiencias',$data1);
    }
 
}
     
        
    
    



