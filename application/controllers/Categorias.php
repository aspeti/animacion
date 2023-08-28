<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Categorias_model');
    }

	public function index()
	{
		$listaCategorias = array(
			'categorias'=> $this->Categorias_model->getCategorias(),
		);  
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/list', $listaCategorias);
		$this->load->view('layouts/footer');		
		
	}
	public function add()
	{		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/add');
		$this->load->view('layouts/footer');				
	}  

	public function store()
	{
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$newCatergoria = array(
			'nombre' => $nombre,
			'descripcion'=> $descripcion,
			'estado' =>"1"
		);

		if($this->Categorias_model->save($newCatergoria)){
			redirect(base_url()."categorias");
		}else{
			$this->session->set_flashdata("Error","No se pudo guardar el registro");
			redirect(base_url()."categorias/add");
		}

	//	echo $nombre." ".$descripcion; //to make test
		
	//	$this->load->view('layouts/header');
	//	$this->load->view('layouts/aside');
	//	$this->load->view('admin/categorias/add');
	//	$this->load->view('layouts/footer');		
		
	}    
}