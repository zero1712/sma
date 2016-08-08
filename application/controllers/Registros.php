<?php
class  Registros  extends CI_Controller
{
    
      function __construct(){
        parent::__construct();
        $this -> load -> database();
  
        $this->load->helper('url');
    }
    function index(){
             $this->load->view('registros/index4');

    }  
    
    function goPeticionarios(){
        
         $this->load->view('registros/index4');
        
    }
    
    function mapa(){
        
        $this->load->view('registros/mapa');
    }
    function status_view(){
        
        $this->load->view('registros/status');  
    }
    
    function goAddPeticionario(){
        
        $this->load->view('registros/addPeticionario');
        
    }
     function goCandidato(){
        
        $this->load->view('registros/candidato_view');
        
    }
     function goAddPeticionario1(){
        
        $this->load->view('registros/addPeticionario1');
        
    }
    
    public function goAprobados(){
        $this->load->view('registros/Aprobados');
        
        
    }
    
    public function goNoAprobados(){
        $this->load->view('registros/Noaprobados');
        
    }
    
    public function goAtendidos(){
        $this->load->view('registros/Atendidos');
        }
        
  public function goAprobados1(){
        $this->load->view('registros/Aprobados1');
        
        
    }
    
    
    public function goAddPeticionario2(){
        
        $this->load->view('registros/addPeticionario2');
    }
    
    
    public function goNoAprobados1(){
        $this->load->view('registros/Noaprobados1');
        
    }
    
    public function goAtendidos1(){
        $this->load->view('registros/Atendidos1');
        }
         public function goEstadisticas1(){
        $this->load->view('registros/estadisticas1');
        }
    
    public function goTramites(){
        $this->load->view('registros/EnTramite');
        
    }
    public function insertar_reg(){
        $this->load->model('Registros_model');
         $form_nombre=$this->input->post('form_nombre');
         $form_apellido_p=$this->input->post('form_apellido_p');
         $form_apellido_m=$this->input->post('form_apellido_m');
         $form_telefono=$this->input->post('form_telefono');
         $form_peticiones=$this->input->post('form_peticiones');
         $form_municipio=$this->input->post('form_municipio');
         $area_responsable=$this->input->post('area_responsable');
         $form_latitud=$this->input->post('form_latitud');
         $form_longitud=$this->input->post('form_longitud');
         $observaciones=$this->input->post('observaciones');
         $prioridad=$this->input->post('txtPrioridad');
        
        $data = array(
				'form_nombre' =>  $form_nombre,
				'form_apellido_p' => $form_apellido_p,
				'form_apellido_m' => $form_apellido_m,
				'form_telefono' => $form_telefono,
				'form_peticiones' =>$form_peticiones,
                'form_municipio'=>$form_municipio,
                'area_responsable'=> $area_responsable,
				'form_latitud' =>  $form_latitud,
                'form_longitud' => $form_longitud,
                'fecha_captura'=> date('Y-m-d'),
                'observaciones'=>$observaciones,
                'prioridad'=>$prioridad
				);
        $this->Registros_model->insert_regi($data);
    }

         public function insertar_reg2(){
        $this->load->model('Registros_model');
         $form_nombre=$this->input->post('form_nombre');
         $form_apellido_p=$this->input->post('form_apellido_p');
         $form_apellido_m=$this->input->post('form_apellido_m');
         $form_telefono=$this->input->post('form_telefono');
         $form_peticiones=$this->input->post('form_peticiones');
         $form_municipio=$this->input->post('form_municipio');
         $area_responsable=$this->input->post('area_responsable');
         $form_latitud=$this->input->post('form_latitud');
         $form_longitud=$this->input->post('form_longitud');
         $observaciones=$this->input->post('observaciones');
         $prioridad=$this->input->post('txtPrioridad');
             $prioridad2=0;
         if($prioridad=="Regular"){
             $prioridad2=2;
         }
      if($prioridad=="Urgente"){
             $prioridad2=1;
         }
        
        $data = array(
				'form_nombre' =>  $form_nombre,
				'form_apellido_p' => $form_apellido_p,
				'form_apellido_m' => $form_apellido_m,
				'form_telefono' => $form_telefono,
				'form_peticiones' =>$form_peticiones,
                'form_municipio'=>$form_municipio,
                'area_responsable'=> $area_responsable,
				'form_latitud' =>  $form_latitud,
                'form_longitud' => $form_longitud,
                'fecha_captura'=> date('Y-m-d'),
                'observaciones'=>$observaciones,
                'prioridad'=>$prioridad2
				);
        $this->Registros_model->insert_regi($data);
    }
     
    function getRegistros($extra = 0, $extra1 = 0 ) {
        $filter = $this -> ajaxsorter -> filter($this -> input);
        $filter['num'] = $extra;
        $idbusqueda = $extra;
         $this->load->model('Registros_model');
         $data['rows'] = $this->Registros_model->getRegistros($filter,$idbusqueda);
         $data['num_rows']= $this->Registros_model->ver_num_rows($filter,$idbusqueda);
        echo '(' . json_encode($data) . ')';
    }
    
      function getRegistrosAprobacion($extra = 0, $extra1 = 0 ) {
        $filter = $this -> ajaxsorter -> filter($this -> input);
        $filter['num'] = $extra;
        $idbusqueda = $extra;
         $this->load->model('Registros_model');
         $data['rows'] = $this->Registros_model->getRegistrosAprobacion($filter,$idbusqueda);
         $data['num_rows']= $this->Registros_model->ver_num_rows_aprobacion($filter,$idbusqueda);
        echo '(' . json_encode($data) . ')';
    }
    
    function getPeticiones(){
    $this->load->model('Registros_model');
    $data=$this->Registros_model->getPeticiones();
    echo json_encode($data);    
    }
    function getRegistrosStatus($extra=0,$extra1=0){
        $this->load->model('Registros_model');
        
        $filter= $this-> ajaxsorter ->filter($this->input);
        $filter['num']= $extra;
        $idbusqueda=$extra;
        
        $this->load->model('Registros_model');
         $data['rows'] = $this->Registros_model->getRegistroStatus($filter,$idbusqueda);
         $data['num_rows']= $this->Registros_model->ver_num_rows_status($filter,$idbusqueda);
        echo '(' . json_encode($data) . ')';
    }
 function getRegistrosEnTramite($extra=0,$extra1=0){
        $this->load->model('Registros_model');
        
        $filter= $this-> ajaxsorter ->filter($this->input);
        $filter['num']= $extra;
        $idbusqueda=$extra;
        
        $this->load->model('Registros_model');
         $data['rows'] = $this->Registros_model->getRegistroEnTramite($filter,$idbusqueda);
         $data['num_rows']= $this->Registros_model->ver_num_rows_entramite($filter,$idbusqueda);
        echo '(' . json_encode($data) . ')';
    }
   function getRegistrosAprobados($extra = 0, $extra1 = 0 ) {
        $filter = $this -> ajaxsorter -> filter($this -> input);
        $filter['num'] = $extra;
        $idbusqueda = $extra;
         $this->load->model('Registros_model');
         $data['rows'] = $this->Registros_model->getRegistrosAprobados($filter,$idbusqueda);
         $data['num_rows']= $this->Registros_model->ver_num_rows_aprobados($filter,$idbusqueda);
        echo '(' . json_encode($data) . ')';
    }
 function getRegistrosNoAprobados($extra = 0, $extra1 = 0 ) {
        $filter = $this -> ajaxsorter -> filter($this -> input);
        $filter['num'] = $extra;
        $idbusqueda = $extra;
         $this->load->model('Registros_model');
         $data['rows'] = $this->Registros_model->getRegistrosNoAprobados($filter,$idbusqueda);
         $data['num_rows']= $this->Registros_model->ver_num_rows_noaprobados($filter,$idbusqueda);
        echo '(' . json_encode($data) . ')';
    }
 function getRegistrosAtendidos($extra = 0, $extra1 = 0 ) {
        $filter = $this -> ajaxsorter -> filter($this -> input);
        $filter['num'] = $extra;
        $idbusqueda = $extra;
         $this->load->model('Registros_model');
         $data['rows'] = $this->Registros_model->getRegistrosAtendidos($filter,$idbusqueda);
         $data['num_rows']= $this->Registros_model->ver_num_rows_atendidos($filter,$idbusqueda);
        echo '(' . json_encode($data) . ')';
    }
    function insertStatus(){
        
    $this->load->model('Registros_model');
    $id=$this->input->post('txtId');
    $status=$this->input->post('status');
    $form_nombre=$this->input->post('txtNombres');
         $form_apellido_p=$this->input->post('txtApellidop');
         $form_apellido_m=$this->input->post('txtApellidom');
         $form_telefono=$this->input->post('txtTelefono');
         $form_peticiones=$this->input->post('txtPeticion');
         $form_municipio=$this->input->post('txtMunicipio');
         $area_responsable=$this->input->post('txtAreaResponsable');
         $observaciones=$this->input->post('txtObservaciones');
         $prioridad=$this->input->post('txtPrioridad');
            $data = array(
				'form_nombre' =>  $form_nombre,
				'form_apellido_p' => $form_apellido_p,
				'form_apellido_m' => $form_apellido_m,
				'form_telefono' => $form_telefono,
				'form_peticiones' =>$form_peticiones,
                'form_municipio'=>$form_municipio,
                'area_responsable'=> $area_responsable,
                'observaciones'=>$observaciones,
                'status'=>$status,
                'prioridad'=>$prioridad
				);
        $this->Registros_model->actualizar_status($id,$data);
        
       
    }
    function logout(){
		$this->session->unset_userdata("admin_login");
		$this->load->view('php/login');
	}
    
    function writeToCsv(){
        

        //para pasar a csv la tabla.
        $this->load->dbutil();
        $this->load->model('Registros_model');
      /*  header("Content-type: application/csv");

header("Content-Disposition: attachment; filename=datos.csv");

header("Pragma: no-cache");
header("Expires: 0");
        $query = $this->db->query("SELECT * FROM REGISTROS");
        $fp=fopen('php://output','w');
        $data=array();
         foreach($query->result() as $row):
             $data[]=$row->_id;
             $data[]=$row->form_nombre;
             $data[]=$row->form_apellido_p;
             $data[]=$row->form_apellido_m;
             $data[]=$row->form_telefono;
             $data[]=$row->form_peticiones;
             $data[]=$row->form_latitud;
             $data[]=$row->form_longitud;
             $data[]=$row->status;
             
        endforeach;
          fputcsv($fp, $data);
                                

        fclose($fp);
        

        echo $fp;*/
            
		to_excel($this->Registros_model->get(), "archivoexcel");
        
    
        
    }
    function insertPostContact(){
        $this->load->model('Registros_model');
        $_id=$this->input->post('txtId1');
        $cp=$this->input->post('txtCodigoPostal');
        $clv_elect=$this->input->post('txTClveElect');
        $fecha_nac=$this->input->post('fechaNac');
        $direccion=$this->input->post('txtDireccion');
        $colonia=$this->input->post('txtColonia');
        $email=$this->input->post('email');
        $seccion_electoral=$this->input->post('txtSeccionElectoral');
        
        
        
        $data = array(
        
        'clv_elector' => $clv_elect,
        'direccion' => $direccion,
        'colonia' => $colonia,    
        'codigo_postal' => $cp,
        'fecha_nac' => $fecha_nac,
        'email' => $email,
        'seccion_electoral'=>$seccion_electoral   
        );
        
        $this->Registros_model->insertPostContact($data,$_id);
        
        
        
    }
    
    function getAllPositions(){
        $this->load->model('Registros_model'); 
        $resultado=$this->Registros_model->getAllPos();
        $data= array();
        $data1= array();
        foreach($resultado as $row){
        $data1["peticionario"][]=$row->form_nombre." ".$row->form_apellido_p."\n".$row->form_peticiones."\n".$row->form_latitud.",".$row->form_longitud;
            
           $data1["latitud"][]=$row->form_latitud;
           $data1["longitud"][]=$row->form_longitud;
            
        }
        
        echo json_encode($data1);
       
    }
    
    function getData_Reg(){
        $this->load->model('Registros_model'); 
        $id=$this->input->post('txtId');
        $data=$this->Registros_model->getDatos_Reg($id);
        echo  json_encode($data);
        
    }
       public function tipo_grafica(){
        $tipo_grafica=$this->input->post('tipo_grafica');
        
        $data= array();
        $data['tipo']=$tipo_grafica;
        
       
        
        echo json_encode($data);
        
    }
    
    function goEstadisticas(){
        $this->load->view('registros/estadisticas');
        
    }
    function prueba1(){
        $this->load->view('registros/arbolesv1');
        
    }
   
    function prueba(){
          $this->load->dbutil();
        ini_set("memory_limit","-1M");
     //  $filtro=$this->input->post('delegacion');
     
        $contador_municipio=0;

$registros = array();
if (($fichero = fopen("http://localhost/buscarv1/assets/csv/atlasarboles2015.csv", "r")) !== FALSE) {
    // Lee los nombres de los campos
    $nombres_campos = fgetcsv($fichero, 0, ",", chr(0), "\"");
    $num_campos = count($nombres_campos);
    
   /* for($j=0;$j < count($nombres_campos);$j++){
        echo $nombres_campos[$j]."\n";
    }*/
   
    // Lee los registros
    while (($datos = fgetcsv($fichero, 0, ",", "\"", "\"")) !== FALSE) {
        // Crea un array asociativo con los nombres y valores de los campos
        for ($icampo = 0; $icampo < $num_campos; $icampo++) {
           
            $registro[$nombres_campos[$icampo]] = $datos[$icampo];
        }
        // Añade el registro leido al array de registros
        $registros[] = $registro;
    }
}
    fclose($fichero);
 
      
        
    $data= array();
    $contador=0;
 
    for ($i = 0; $i < count($registros); $i++) {
        if(($registros[$i]["ID_Delega"])==16){
        
          
            $registros[$i]["DDLat"]=(float)$registros[$i]["DDLat"];
            $registros[$i]["DDLon"]="-".(float)$registros[$i]["DDLon"];
            $data[$i]=$registros[$i];
            $contador++;
            
        }
     
        
    }
           
   require_once APPPATH."/third_party/Classes/PHPExcel.php";

  $doc = new PHPExcel();
  $doc->setActiveSheetIndex(0);

  $doc->getActiveSheet()->fromArray($data, null, 'A1');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="your_name.xls"');
header('Cache-Control: max-age=0');

  // Do your stuff here
  $writer = PHPExcel_IOFactory::createWriter($doc, 'Excel5');

$writer->save('php://output');

  /*      $f = fopen('php://memory', 'w');
    /** loop through array  */
   /* foreach ($data as $row) {
        /** default php csv handler **/
      /*  fputcsv($f, $row, ',',chr(0));
    }
    /** rewrind the "file" with the csv lines **/
   /* fseek($f, 0);
    /** modify header to be downloadable csv file **/
   /* header('Content-Type: application/csv');
    header('Content-Disposition: attachement; filename="' . "csvarbol.csv" . '";');
    /** Send file to browser for download */
    /*fpassthru($f);*/
}
    public function crearCSV(){
        require_once APPPATH."/third_party/Classes/PHPExcel.php";
        
    }
    
    public function mapa1(){
        
        $this->load->view('registros/mapa1');
    }
    
    public function estadisticas_municipio(){
      $this->load->model('Registros_model');
      $municipio=$this->input->post('municipio');
        
        $data=$this->Registros_model->estadisticas_municipio($municipio);
        for($i=1;$i<=count($data);$i++){
        echo json_encode($data[$i]);
        }
    }
    
    public function estadisticas_status(){
        $this->load->model('Registros_model');
        
        $data=$this->Registros_model->estadisticas_status();
        for($i=1;$i<=count($data);$i++){
        echo json_encode($data[$i]);
        }
    }
    
    
    public function getDataReg(){
    $this->load->model('Registros_model');
    $_id=$this->input->post('id');
    $datos=$this->Registros_model->getDataReg($_id);
    
    echo json_encode($datos);    
        
    }
    
    public function insertDatosReg(){
        
    $this->load->model('Registros_model');
    $_id=$this->input->post('id');
    $datos=$this->Registros_model->insertDatosReg($_id);
    }
    
    public function AprobacionCandidato(){
         $this->load->model('Registros_model');
        $id=$this->input->post('id');
        
        $data=array(
        'status'=>3
        );
          $this->Registros_model->actualizar_status($id,$data);
    }
      public function Aprobar(){
         $this->load->model('Registros_model');
        $id=$this->input->post('id');
        
        $data=array(
        'status'=>1
        );
          $this->Registros_model->actualizar_status($id,$data);
    }
      public function NoAprobar(){
         $this->load->model('Registros_model');
        $id=$this->input->post('id');
        
        $data=array(
        'status'=>2 
        );
          $this->Registros_model->actualizar_status($id,$data);
    }
    
    public function eliminarReg(){
        $this->load->model('Registros_model');
        $id=$this->input->post('id');
        $this->Registros_model->eliminarReg($id);
        
    }
    
}
