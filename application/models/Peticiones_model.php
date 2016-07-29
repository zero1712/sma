<?php
class Peticiones_model extends CI_Model
{ 
  
    function insertar_peticiones($data){
      
      $this->db->insert("peticiones",$data);
  }
    
function getPeticiones(){
        $this->db->where('tipo_documento',"3");
        $this->db->order_by("id_documento","desc");
        $this->db->select("documento.id_documento,documento.fecha_documento,(case documento.tipo_documento when '1' then 'Agenda/Evento' when '2' then 'Administracion' when '3' then 'Peticion' end) as tipo_documento, documento.numero_documento,documento.folio_documento,documento.fecha_entrada,peticiones.peticion,peticiones.id_peticiones,(case peticiones.tipo_de_peticion when '' then 'No asignado' when '1' then 'Materiales/Regalos/Obsequios' when '2' then 'Laboral' when '3' then 'Salud' when '4' then 'Servicios Federales' when '5' then 'Servicios Estatales' when '6' then 'Servicios Municipales' end) as tipo_de_peticion,peticiones.concepto,peticiones.unidad_de_medida,peticiones.rubro,peticiones.cantidad,(case peticiones.prioridad when '0' then 'No asignado' when '1' then 'Urgente' when '2' then 'Regular' end) as prioridad,peticiones.observaciones,peticiones.id_datos_generales,datos_generales.nombre,datos_generales.ap_paterno,datos_generales.ap_materno,datos_generales.cargo,datos_generales.tel_celular,datos_generales.tel_casa,datos_generales.calle_y_numero,datos_generales.colonia,datos_generales.municipio");
        $this->db->join('peticiones','documento.id_documento=peticiones.id_documento','left');
        $this->db->join('datos_generales','peticiones.id_datos_generales=datos_generales.id_datos_generales','left');
        $query=$this->db->get('documento');   
        return $query->result();
    }
    
    
}
     
        
    
    


