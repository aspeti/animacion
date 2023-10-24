<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->model('Paquete_model');
		$this->load->model('Producto_model');
    }

	public function index()
	{
		$lista = array(
			'paquetes'=> $this->Paquete_model->getAllPaquetes(),
		); 

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/card',$lista);
		$this->load->view('layouts/footer');
	}   

	public function reservar()
	{
		$lista = array(
			'productos'=> $this->Producto_model->getAllproductos(),
		); 

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/reservar', $lista);
		$this->load->view('layouts/footer');
	}   
	 
}
