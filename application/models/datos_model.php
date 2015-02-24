<?php
class Datos_model extends CI_Model{
 
function __construct(){
	// accede a la base de datos
$this->load->database();
}
 
function obtener_datos(){
	// es igual a un select * from 
$query = $this->db->get('datos');
 
return $query->result_array();
}
}
?>