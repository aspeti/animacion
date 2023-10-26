<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->model('Paquete_model');
		$this->load->model('Producto_model');
		$this->load->model('Detalle_paquete_model');
		$this->load->model('Reservar_model');
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

	public function reservar($id)
	{		
		$lista = array(
			'paquete'=> $this->Paquete_model->getPaqueteById($id),
			'detalles'=> $this->Detalle_paquete_model->getAllDetallesById($id),
			'productos'=> $this->Producto_model->getAllproductos(),
		); 

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/reservar', $lista);
		$this->load->view('layouts/footer');
	}
	public function viewReport()
	{
		$lista = array(
			'reservas'=> $this->Reservar_model->getAllreservas(),
		); 

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/report', $lista);
		$this->load->view('layouts/footer');
	}
	public function viewPayment()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/payment');
		$this->load->view('layouts/footer');
	}   
	
	public function reportefechas()
	{		  
		$FechaInicial = $this->input->post("fechaInicial");
		$FechaFinal = $this->input->post("fechaFinal");

		$data = array(
			"ventas" => $this->Reservar_model->getAllreservasforFecha($FechaInicial, $FechaFinal),					
		);

		$this->load->view('fpdf\Pruebah.php', $data);	
		
		
	}


	 
}
