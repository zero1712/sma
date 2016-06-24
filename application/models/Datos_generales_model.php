<?php
class Datos_generales_model extends CI_Model
{ 
  function insertar_datos_generales($data){
      $this->db->insert('datos_generales',$data);
  }

  function getIdDatosGenerales($data){
      
      $this->db->where('nombre',$data['nombre']);
      $this->db->where('ap_paterno',$data['ap_paterno']);
      $this->db->where('ap_materno',$data['ap_materno']);
      $this->db->where('cargo',$data['cargo']);
      $this->db->where('tel_celular',$data['tel_celular']);
      $this->db->select('id_datos_generales');
      $query=$this->db->get('datos_generales');
    
      foreach($query->result() as $row):
            $id_datos_generales=$row->id_datos_generales;
      endforeach;
      return $id_datos_generales;
        
  }
 }
     
        
    
    