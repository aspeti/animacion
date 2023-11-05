<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->model('Paquete_model');
		$this->load->model('Producto_model');
		$this->load->model('Detalle_paquete_model');
		$this->load->model('Reservar_model');
		$this->load->model('Comprobante_model');

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


	public function payment($idReserva)
	{	
		$data = array(
			'idReserva'=> $idReserva,			
		); 

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/payment',$data);	
		$this->load->view('layouts/footer');
	}   

	public function reservar($id)
	{		
		$lista = array(
			'paquete'=> $this->Paquete_model->getPaqueteById($id),
			'detalles'=> $this->Detalle_paquete_model->getAllDetallesById($id),
			'productos'=> $this->Producto_model->getAllproductos(),
			'comprobante'=> $this->Comprobante_model->getComprobante(),
		); 

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/reservar', $lista);
		$this->load->view('layouts/footer');
	}

	public function misreservas()
	{	
		$userId = $this->session->userdata('id_usuario');
		$userId;
		$lista = array(
			'reservas'=> $this->Reservar_model->getReservasByClient($userId)		
		); 

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/list', $lista);
		$this->load->view('layouts/footer');
	}

	public function agregar()
	{
		$fecha_evento = $this->input->post("fecha");
		$direccion_evento = $this->input->post("direccion");
		$contacto = $this->input->post("contacto");	
		$total = $this->input->post("total");
		$serie = $this->input->post("serie");	
		$num_documento = $this->input->post("numero");	
		$id_comprobante = $this->input->post("idcomprobante");	
		$id_usuario = $this->session->userdata("id_usuario");	
		$id_cliente = $this->session->userdata("id_usuario");
		$id_paquete = $this->input->post("id_paquete");


		$adicional = $this->input->post("adicional");
		$humor = $this->input->post("humor");
		$tematica = $this->input->post("tematica");
		
		// Crear un array con los datos
		$personalizado = array($adicional,$humor,$tematica);

		//echo 'sub'.$subtotal.'* total:'.$total.'* idcliente'.$idcliente.'* serie'.$serie.'* num_docu:'.$num_documento.'* id_usuario:'.$id_usuario.'* id_comprobante:'.$id_comprobante;
			
		$data = array(
			'fecha_creacion' => date('Y-m-d H:i:s'),
			'eliminado' => "0",
			'fecha_evento'=> $fecha_evento,
			'direccion_evento'=> $direccion_evento,
			'contacto'=> $contacto,
			//'img_comprobante'=> $img,
			'pagado'=> '0',			
			'total'=> $total,	
			'serie'=> $serie,	
			'num_documento'=> $num_documento,
			'id_comprobante'=> $id_comprobante,
			'id_usuario'=> $id_usuario,
			'id_cliente'=> $id_cliente,
			'id_paquete'=> $id_paquete,

		);

		if($this->Reservar_model->save($data)){

			$idReserva= $this->Reservar_model->lastId();
			$this->update_Comprobante($id_comprobante);
			$this->buildDetallePersonalizado($personalizado,$idReserva);			
			if($this->session->userdata('rol') == 1){
				redirect(base_url()."reserva");
			}else{
				redirect(base_url()."reserva/payment/".$idReserva);
			}
			

		}else{
			redirect(base_url()."reserva");		}

	}


	public function updateDeposito(){
		$idReserva = $this->input->post("idReserva");		
		$data = array(
            'pagado' => "1",            
        );
		if($this->Reservar_model->update($idReserva, $data)){						
			if($this->session->userdata('rol') == 2){
				redirect(base_url()."reserva/misreservas");
			}	
		}
	}

	public function buildDetallePersonalizado($productos,$idReserva){
        for($i=0; $i<count($productos);$i++){
        $data = array(
            'producto_id_producto' => $productos[$i],
            'reserva_id_reserva' => $idReserva,   
        );
        $this->Reservar_model->save_personalizado($data);    
        }
   }
	protected function update_Comprobante($idComprobante)
	{
		$comprobanteActual = $this->Comprobante_model->getComprobante();
		$data = array(
			'cantidad' => $comprobanteActual->cantidad + 1, 
		);

		$this->Comprobante_model->updateComprobante($idComprobante,$data);
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
