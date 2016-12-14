<?php
class test_model extends CI_Model{
public function fecha(){
	//echo"test";
	$sql="SELECT NOW() as fecha";
	$res=$this->db->query($sql);
	$fila=$res->row_array();
	return $fila['fecha'];

	$sql="SELECT *FROM nombre() as nombre";
	$res=$this->db->query($sql);
	$fila=$res->row_array();
	return $fila['nombre'];
	//$resultado=$this->db->query("SELECT NOW() as ahora");
	//$fila=$resultado->row_array();
	//echo $fila['ahora'];
}
}