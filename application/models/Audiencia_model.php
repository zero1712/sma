<?php
class Audiencia_model extends CI_Model
{ 
  
    function insertar_audiencia($data1){
        $this->db->insert('audiencias',$data1);
    }
    function getAudiencias(){
     
        $this->db->where('audiencias.fecha_entrada >',"2016-08-01 00:00:00");
        $this->db->order_by("id_audiencia","desc");

        $this->db->select("audiencias.id_audiencia,audiencias.fecha_audiencia,audiencias.asunto_de_audiencia,audiencias.seguimiento,audiencias.id_datos_generales,datos_generales.nombre,datos_generales.ap_paterno,datos_generales.ap_materno,datos_generales.cargo,datos_generales.tel_celular,datos_generales.tel_casa,datos_generales.calle_y_numero,datos_generales.colonia,datos_generales.municipio");
        $this->db->join('datos_generales','audiencias.id_datos_generales=datos_generales.id_datos_generales','left');
        $query=$this->db->get('audiencias');   
        return $query->result();
    }
     function getAudienciasTimeLine(){
         $this->db->where('audiencias.fecha_entrada >',"2016-08-01 00:00:00");

        $this->db->order_by("id_audiencia","desc");

        $this->db->limit('10');
        $this->db->select("audiencias.id_audiencia,audiencias.fecha_audiencia,audiencias.asunto_de_audiencia,audiencias.seguimiento,audiencias.id_datos_generales,datos_generales.nombre,datos_generales.ap_paterno,datos_generales.ap_materno,datos_generales.cargo,datos_generales.tel_celular,datos_generales.tel_casa,datos_generales.calle_y_numero,datos_generales.colonia,datos_generales.municipio");
        $this->db->join('datos_generales','audiencias.id_datos_generales=datos_generales.id_datos_generales','left');
        $query=$this->db->get('audiencias');   
        return $query->result();
    }
}
     
        
    
    



