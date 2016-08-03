<?php
class Administracion_model extends CI_Model
{ 
  
    function insertar_administracion($data){
      
      $this->db->insert("administracion",$data);
  }
    public function getAdministracion(){
        
        $this->db->where("tipo_documento","2");
        $this->db->select('documento.id_documento,documento.fecha_documento,documento.tipo_documento,documento.numero_documento,documento.folio_documento,documento.fecha_entrada,administracion.tipo_de_escrito,administracion.seguimiento,administracion.remitente,administracion.cargo,administracion.dependencia,administracion.destinatario,administracion.asunto,documento.fecha_entrada');
        $this->db->join("administracion","documento.id_documento=administracion.id_documento","left");
        $query=$this->db->get("documento");
        
        return $query->result();
        
    }
    
  
}
     
        
    
    


