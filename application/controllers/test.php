<?php
class test extends CI_Controller{
	public function fecha(){
		//echo "test";
		$this->load->model('test_model');
		$f= $this->test_model->fecha();
		//echo $f;
		//$this->load->view('fecha');
		$datos=array();
		$datos['fecha']=$f;
		
		$datos['nombre']='wilber';
		$this->load->view('fecha',$datos);
	}
}