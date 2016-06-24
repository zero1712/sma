<?php
class Documento_model extends CI_Model
{ 
  function insertar_documento($data){
      
      $this->db->insert("documento",$data);
  }
  
      function getIdDocumento($data){
      
      $this->db->where('fecha_documento',$data['fecha_documento']);
      $this->db->where('tipo_documento',$data['tipo_documento']);
      $this->db->where('numero_documento',$data['numero_documento']);
      $this->db->select('id_documento');
      $query=$this->db->get('documento');
    
      foreach($query->result() as $row):
            $idDocumento=$row->id_documento;
      endforeach;
      return $idDocumento;
        
  }
}
     
        
    
    



