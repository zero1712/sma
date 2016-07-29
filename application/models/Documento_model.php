<?php
class Documento_model extends CI_Model
{ 
  function insertar_documento($data){
      
      $this->db->insert("documento",$data);
  }
  
    //metodo para obtener el ID de un documento por la coincidencia de todos los datos
    
      function getIdDocumento($data){
      
      $this->db->where('microfecha',$data['microfecha']);
      $this->db->select('id_documento');
      $query=$this->db->get('documento');
    
      foreach($query->result() as $row):
            $idDocumento=$row->id_documento;
      endforeach;
      return $idDocumento;
        
  }
    ////
  
}
     
        
    
    



