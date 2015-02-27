<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class datos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
	
	function _example_output($output = null)

	{
		$this->load->view('datos_edit',$output);
		//var_dump($variable);

	}

	public function datos_Edit()
	{
		$this->grocery_crud->set_table('datos');
		$output = $this->grocery_crud->render();
        $this->_example_output($output);
		// se envia los datos de los sucursales con sus marcadores
        $this->load->model('datos_model');
	    $data["datos"]=$this->datos_model->obtener_datos();
		$this->load->view('datos_edit', $data);


			  
	}
	


         function listar_datos(){
		$this->load->model('datos_model');
	    $data["datos"]=$this->datos_model->obtener_datos();
	    var_dump($this->datos_model->obtener_datos());
		$this->load->view('prueba', $data);
        
		
		}

}





//	
