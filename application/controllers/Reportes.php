<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Reporte_model'); 
    }

    public function index()
	{
        $fecha_inicio = $this->input->post("fechainicio");
        $fecha_fin = $this->input->post("fechafin");
        if($this->input->post("filtrar")){
			
            $reservas = $this->Reporte_model->getAllReservasByDate($fecha_inicio, $fecha_fin);

        }else{           

            $reservas = $this->Reporte_model->getAllReservas();	
        }

        $data = array(
            "reservas" => $reservas,
			"fecha_inicio"=>$fecha_inicio,	
			"fecha_fin"=>$fecha_fin				
        );		
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reportes/list', $data);
		$this->load->view('layouts/footer');			
		
	}

	public function reporte()
	{	
		 
		$fecha_inicio = $this->input->post("inicio");
        $fecha_fin = $this->input->post("fin");

		if(!empty($fecha_inicio)){
			$data = array(
				"reservas" => $this->Reporte_model->getAllReservasByDate($fecha_inicio, $fecha_fin),
				'usuario' => $this->session->userdata("nombre"),	
				"fechaInicio"=>$fecha_inicio, 
				"fechaFinal"=>$fecha_fin, 					
			);				
			$this->load->view('reportes/fpdf/ventas', $data);		
		}else{
			$data = array(
				"reservas" => $this->Reporte_model->getAllReservas(),
				'usuario' => $this->session->userdata("nombre"),	
				"fechaInicio"=>"Sin seleccionar", 
				"fechaFinal"=>"Sin seleccionar",
								
			);	
			$this->load->view('reportes/fpdf/ventas',  $data);
		}
		
	}

	public function comprobante($id)
	{	
				
		$data = array(
			"reserva" => $this->Reporte_model->getReservaByID($id),
			
		);	

		$this->load->view('reportes/fpdf/recibo',  $data);

	}

}