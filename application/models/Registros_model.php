<?php
class Registros_model extends CI_Model
{ 
  
    
    function insert_regi($data){
		$this->db->insert('REGISTROS', $data);
	}
    function insert_prueba($data){
		$this->db->insert('PRUEBA', $data);
	}
    
    function ver_all_regi(){
        
        $this->db->select('_id,form_nombre,form_apellido_p,form_apellido_m,form_telefono,form_peticiones,form_latitud,form_longitud');
        $query=$this->db->get('REGISTROS');
        
        return $query->result();
    }
    
    
    
    function getRegistros($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']); 
         if($filter['num']!=0)
             //
        if($idbusqueda==20){
        $this->db->where('status'," ");     
               $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
        if($filter['limit']==0){
               $query=$this->db->get('REGISTROS');   
         }
        else{
            
            $query=$this->db->get('REGISTROS',$filter['limit'],$filter['offset']);
        }
        
    
        
        $data=array();
         foreach($query->result() as $row):
             $data[]=$row;
        endforeach;
        return $data;
    }
       function getRegistrosAprobados($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']); 
         if($filter['num']!=0)
             //
        if($idbusqueda==20){
        $this->db->where('status',"1");     
                  $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
                        $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');

        }
        
        if($filter['limit']==0){
               $query=$this->db->get('REGISTROS');   
         }
        else{
            
            $query=$this->db->get('REGISTROS',$filter['limit'],$filter['offset']);
        }
        
    
        
        $data=array();
         foreach($query->result() as $row):
             $data[]=$row;
        endforeach;
        return $data;
    }
       function getRegistrosNoAprobados($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']); 
         if($filter['num']!=0)
             //
        if($idbusqueda==20){
        $this->db->where('status',"2");     
                    $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
        if($filter['limit']==0){
               $query=$this->db->get('REGISTROS');   
         }
        else{
            
            $query=$this->db->get('REGISTROS',$filter['limit'],$filter['offset']);
        }
        
    
        
        $data=array();
         foreach($query->result() as $row):
             $data[]=$row;
        endforeach;
        return $data;
    }
       function getRegistrosAtendidos($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']); 
         if($filter['num']!=0)
             //
        if($idbusqueda==20){
        $this->db->where('status',"A");     
                     $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
        if($filter['limit']==0){
               $query=$this->db->get('REGISTROS');   
         }
        else{
            
            $query=$this->db->get('REGISTROS',$filter['limit'],$filter['offset']);
        }
        
    
        
        $data=array();
         foreach($query->result() as $row):
             $data[]=$row;
        endforeach;
        return $data;
    }
    
           function getRegistrosAprobacion($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']); 
         if($filter['num']!=0)
             //
        if($idbusqueda==20){
        $this->db->where('status',"3");     
                        $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
        if($filter['limit']==0){
               $query=$this->db->get('REGISTROS');   
         }
        else{
            
            $query=$this->db->get('REGISTROS',$filter['limit'],$filter['offset']);
        }
        
    
        
        $data=array();
         foreach($query->result() as $row):
             $data[]=$row;
        endforeach;
        return $data;
    }
    function getRegistroStatus($filter,$idbusqueda){
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']); 
         if($filter['num']!=0)
             //
        if($idbusqueda==20){
        $this->db->where('status','C');   
        $this->db->or_where('status','N');
                   $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
        if($filter['limit']==0){
               $query=$this->db->get('REGISTROS');   
         }
        else{
            
            $query=$this->db->get('REGISTROS',$filter['limit'],$filter['offset']);
        }
        
    
        
        $data=array();
         foreach($query->result() as $row):
             $data[]=$row;
        endforeach;
        return $data;
    }
        function getRegistroEnTramite($filter,$idbusqueda){
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']); 
         if($filter['num']!=0)
             //
        if($idbusqueda==20){
        $this->db->where('status','4');   
        
                   $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
        if($filter['limit']==0){
               $query=$this->db->get('REGISTROS');   
         }
        else{
            
            $query=$this->db->get('REGISTROS',$filter['limit'],$filter['offset']);
        }
        
    
        
        $data=array();
         foreach($query->result() as $row):
             $data[]=$row;
        endforeach;
        return $data;
    }
    
    function ver_num_rows($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']);   
        if($filter['num']!=0)
         //  $this->db->where('unidades',$filter['num']);
              if($idbusqueda==20){
             $this->db->where('status',' '); 
                  $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
      
               $query=$this->db->get('REGISTROS');   
            
        
        
       
        
    
    
        
        return $query->num_rows();
    }
    
        function ver_num_rows_aprobacion($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']);   
        if($filter['num']!=0)
         //  $this->db->where('unidades',$filter['num']);
              if($idbusqueda==20){
        $this->db->where('status','3');  
            $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
      
               $query=$this->db->get('REGISTROS');   
            
        
        
       
        
    
    
        
        return $query->num_rows();
    }
    function ver_num_rows_entramite($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']);   
        if($filter['num']!=0)
         //  $this->db->where('unidades',$filter['num']);
              if($idbusqueda==20){
        $this->db->where('status','4');  
            $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
      
               $query=$this->db->get('REGISTROS');   
            
        
        
       
        
    
    
        
        return $query->num_rows();
    }
    function ver_num_rows_status($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']);   
        if($filter['num']!=0)
         //  $this->db->where('unidades',$filter['num']);
              if($idbusqueda==20){
        $this->db->where('status','C');  
       $this->db->or_where('status','N');
             $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
      
               $query=$this->db->get('REGISTROS');   
            
        
        
       
        
    
    
        
        return $query->num_rows();
    }
        
    function ver_num_rows_aprobados($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']);   
        if($filter['num']!=0)
         //  $this->db->where('unidades',$filter['num']);
              if($idbusqueda==20){
        $this->db->where('status','C');  
       $this->db->or_where('status','N');
                $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
      
               $query=$this->db->get('REGISTROS');   
            
        
        
       
        
    
    
        
        return $query->num_rows();
    }
        
    function ver_num_rows_noaprobados($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']);   
        if($filter['num']!=0)
         //  $this->db->where('unidades',$filter['num']);
              if($idbusqueda==20){
        $this->db->where('status','C');  
       $this->db->or_where('status','N');
             $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
      
               $query=$this->db->get('REGISTROS');   
            
        
        
       
        
    
    
        
        return $query->num_rows();
    }
        
    function ver_num_rows_atendidos($filter,$idbusqueda){
        
        if($filter['order']!='')
            $this->db->order_by($filter['order']);
        if($filter['where']!='')
            $this->db->having($filter['where']);   
        if($filter['num']!=0)
         //  $this->db->where('unidades',$filter['num']);
              if($idbusqueda==20){
        $this->db->where('status','C');  
       $this->db->or_where('status','N');
                $this->db->select("REGISTROS._id as id,REGISTROS.form_nombre as nombre,REGISTROS.form_apellido_p as apellidop,REGISTROS.form_apellido_m as apellidom,REGISTROS.form_telefono as telefono,REGISTROS.form_peticiones as peticion,REGISTROS.form_municipio as municipio,REGISTROS.area_responsable as area_responsable,REGISTROS.form_latitud as latitud,REGISTROS.form_longitud as longitud,REGISTROS.fecha_captura as fecha_captura,REGISTROS.observaciones as observaciones,(case when REGISTROS.prioridad='1' then 'Urgente' else 'Regular' end) as prioridad,DATOS_REG._id as id_2,DATOS_REG.clv_elector as clv_elector,DATOS_REG.direccion as direccion,DATOS_REG.colonia as colonia,DATOS_REG.codigo_postal as codigo_postal,DATOS_REG.fecha_nac as fecha_nac,DATOS_REG.email as email,DATOS_REG.seccion_electoral as seccion_electoral");
            $this->db->join('DATOS_REG','REGISTROS._id=DATOS_REG._id','left');
        }
        
      
               $query=$this->db->get('REGISTROS');   
            
        
        
       
        
    
    
        
        return $query->num_rows();
    }
    function actualizar_status($id,$data) {
       
        $this->db->where('_id', $id);
        return $this->db->update('REGISTROS', $data);
    }
    
    function insertPostContact($data,$_id){
   
         $this->db->where('_id', $_id);
        return $this->db->update('DATOS_REG', $data);
        
    }
    
    
    
    function getAllPos(){
        $this->db->select('form_nombre,form_apellido_p,form_apellido_m,form_peticiones,form_latitud,form_longitud');
        $this->db->where('form_latitud!=',' ');
        $query=$this->db->get('REGISTROS');
        
        return $query->result();
        
    }
    
    function getDatos_Reg($id){
        $this->db->select('fk_post_contact,clv_elector,direccion,colonia,codigo_postal,fecha_nac,email');
        $this->db->where('fk_post_contact',$id);
        $query=$this->db->get('DATOS_REG');
        
        $data=array();
            foreach($query->result() as $row):
                $data[]=$row;
                endforeach;
        return $data;
        
    }
    
    public function get()
	{
		$fields = $this->db->field_data('REGISTROS');
		$query = $this->db->select('*')->get('REGISTROS');
		return array("fields" => $fields, "query" => $query);
	}
    
    public function estadisticas_municipio($municipio){
        
       
          $this->db->select("area_responsable,count(area_responsable) as total");
          $this->db->where('form_municipio',$municipio);
          $this->db->where('area_responsable',"Servicios Federales");
          $query=$this->db->get('REGISTROS');
            
            $data=array();
            foreach ($query->result() as $row){
                $data[1][]="Servicios Federales";
                
                    $data[1][]=(int)$row->total;
			}		
          
    $this->db->select("area_responsable,count(area_responsable) as total");
         $this->db->where('form_municipio',$municipio);
        $this->db->where('area_responsable',"Materiales/Regalos/Obsequios");
          $query=$this->db->get('REGISTROS');
            foreach ($query->result() as $row){
               $data[2][]="Materiales/Regalos/Obsequios";
                
                $data[2][]=(int)$row->total;					
			}	
                      
    $this->db->select("area_responsable,count(area_responsable) as total");
         $this->db->where('form_municipio',$municipio);
        $this->db->where('area_responsable',"Empleo");
          $query=$this->db->get('REGISTROS');
            foreach ($query->result() as $row){
                 $data[3][]="Empleo";
                
                $data[3][]=(int)$row->total;						
			}
     $this->db->select("area_responsable,count(area_responsable) as total");
        $this->db->where('form_municipio',$municipio);
        $this->db->where('area_responsable',"Servicios del Municipio");
          $query=$this->db->get('REGISTROS');
            foreach ($query->result() as $row){
                 $data[4][]="Servicios del Municipio";
                
                $data[4][]=(int)$row->total;					
			}
            
    $this->db->select("area_responsable,count(area_responsable) as total");
         $this->db->where('form_municipio',$municipio);
        $this->db->where('area_responsable',"Salud");
          $query=$this->db->get('REGISTROS');
            foreach ($query->result() as $row){
             $data[5][]="Salud";
                
                $data[5][]=(int)$row->total;							
			}
           
        $data1=array();
        $data1[1]["datos"]=$data;
          return $data1;  
        } 
    
    
    public function estadisticas_status(){
        
        
         $data=array();
        $this->db->select("count(status) as total");
        $this->db->where('status',' ');
        $query=$this->db->get('REGISTROS');
         foreach ($query->result() as $row){
             $data[0][]="Sin Estatus";
                
                $data[0][]=(int)$row->total;							
			}
         $this->db->select("count(status) as total");
        $this->db->where('status',1);
        $query=$this->db->get('REGISTROS');
         foreach ($query->result() as $row){
             $data[1][]="Aprobados";
                
                $data[1][]=(int)$row->total;							
			}
        $this->db->select("count(status) as total");
        $this->db->where('status',2);
        $query=$this->db->get('REGISTROS');
         foreach ($query->result() as $row){
             $data[2][]="No Aprobados";
                
                $data[2][]=(int)$row->total;							
			}
           $this->db->select("count(status) as total");
        $this->db->where('status','C');
        $query=$this->db->get('REGISTROS');
         foreach ($query->result() as $row){
             $data[3][]="Contactado";
                
                $data[3][]=(int)$row->total;							
			}
        
         $data1=array();
        $data1[1]["datos"]=$data;
          return $data1;  
        }
    
    
    
    public function getDataReg($_id){
    $this->db->where('_id',$_id);
    $query=$this->db->get('DATOS_REG');
    
    return $query->num_rows();
    }
    
    
    public function insertDatosReg($_id){
        
        $data =array(
        '_id'=>$_id
        
        );
        
        $this->db->insert('DATOS_REG', $data);
        
        
    }
    
    public function eliminarReg($id){
        $this->db->where('_id',$id);
        $this->db->delete('DATOS_REG');
        $this->db->where('_id',$id);
        $this->db->delete('REGISTROS');
        
    }
    
    public function getPeticiones(){
        $this->db->select('*');
        $query=$this->db->get("registros");
        return $query->result();
    }
    }
     
        
    
    



