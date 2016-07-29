<?php
class Datos_generales_model extends CI_Model
{ 
  function insertar_datos_generales($data){
      $this->db->insert('datos_generales',$data);
  }

  function getIdDatosGenerales($data){
      
     
      $this->db->where('microfecha',$data['microfecha']);
      $this->db->select('id_datos_generales');
      $query=$this->db->get('datos_generales');
    
      foreach($query->result() as $row):
            $id_datos_generales=$row->id_datos_generales;
      endforeach;
      return $id_datos_generales;
        
  }


 }
     
        
    
    