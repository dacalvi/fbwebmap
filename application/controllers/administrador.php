<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrador extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->listar_puntos();
	}
	
	function _example_output($output = null){
		$this->load->view('admin_view',$output);
	}

    function listar_puntos(){
    	$this->grocery_crud->set_table('datos');
    	$this->grocery_crud->set_relation('id_categoria','categoria','descripcion');
    	$output = $this->grocery_crud->render();
    	$this->_example_output($output);
	}

	function listar_capas(){
    	$this->grocery_crud->set_table('categoria');
    	$this->grocery_crud->columns('descripcion');
        $this->grocery_crud->fields('Descripcion');
    	$output = $this->grocery_crud->render();
    	$this->_example_output($output);
	}

}