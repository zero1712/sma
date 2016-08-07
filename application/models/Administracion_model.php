<?php
class Administracion_model extends CI_Model
{ 
  
    function insertar_administracion($data){
      
      $this->db->insert("administracion",$data);
  }
    public function getAdministracion(){
        $this->db->where('documento.fecha_entrada >',"2016-08-01 00:00:00");

        $this->db->order_by("id_documento","desc");
        $this->db->where("tipo_documento","2");
        $this->db->select("documento.id_documento,documento.fecha_documento,documento.tipo_documento,documento.numero_documento,documento.folio_documento,documento.fecha_entrada,(case administracion.tipo_de_escrito when '1' then 'C.C.P' when '2' then 'P.M' end) as tipo_de_escrito,administracion.seguimiento,administracion.remitente,administracion.cargo,administracion.dependencia,administracion.destinatario,administracion.asunto,documento.fecha_entrada,administracion.id_administracion");
        $this->db->join("administracion","documento.id_documento=administracion.id_documento","left");
        $query=$this->db->get("documento");
        
        return $query->result();
        
    }
    
      
     function updateAdministracion($data){
        
        $this->db->where('id_administracion',$data['id_administracion']);
        return $this->db->update('administracion', $data);
    }
    
    
  
}
     
        
    
    


