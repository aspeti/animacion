<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paquetes extends CI_Controller {

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
		$this->load->view('admin/paquetes/list',$lista);
		$this->load->view('layouts/footer');			
	}

    public function add()
	{
		$lista = array(
			'productos'=> $this->Producto_model->getAllproductos(),
		);  

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/paquetes/add', $lista);
		$this->load->view('layouts/footer');			
	}

	public function edit($id){	

		$data = array(

			'paquete' => $this ->Paquete_model->getPaqueteById($id),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/paquetes/edit', $data);
		$this->load->view('layouts/footer');
	}


    public function agregar()
	{
        $nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$categoria = $this->input->post("categoria");
        $precio = $this->input->post("txttotal");
        $img = "customFile";

        $productos_id = $this->input->post("idcodigo");		
		$precios =      $this->input->post("precios");
		$cantidades =   $this->input->post("cantidad");
		$importes =     $this->input->post("txt_subtotal");

		//echo 'sub'.$subtotal.'* igv:'.$igv.'* total:'.$total.'* idcliente'.$idcliente.'* serie'.$serie.'* num_docu:'.$num_documento.'* id_usuario:'.$id_usuario.'* id_comprobante:'.$id_comprobante;
			
		$data = array(
			'fecha_creacion' => date('Y-m-d H:i:s'),
			'eliminado' => "0",	
            'nombre'=> $nombre,	
            'descripcion'=> $descripcion,	
            'categoria'=> $categoria,						
			'precio'=> $precio,	
		);

		if($this->Paquete_model->save($data)){
			$idPaquete= $this->Paquete_model->getlastId();
			$this->uploadFile($idPaquete,$img);
			$this->save_detalle($productos_id,$idPaquete,$cantidades,$precios,$importes);
			redirect(base_url()."paquetes");

		}else{
			redirect(base_url()."ventas/add");		}		
	}

	public function update()
	{
		$id = $this->input->post("idPaquete");
        $nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$categoria = $this->input->post("categoria");       
        $img = "customFile";		
			
		$data = array(
			'fecha_actualizacion' => date('Y-m-d H:i:s'),			
            'nombre'=> $nombre,	
            'descripcion'=> $descripcion,	
            'categoria'=> $categoria,
		);

		if($this->Paquete_model->update($id,$data)){		
			$this->uploadFile($id,$img);			
			redirect(base_url()."paquetes");

		}else{
			$this->session->set_flashdata("Error","No se pudo actualizar el registro");
			redirect(base_url()."paquetes/edit/".$id);		}		
	}

    protected function uploadFile($idPaquete, $img){

        $config['upload_path'] = './assets/img/paquetes/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['file_name'] = $idPaquete;
		$config['max_size']  = '2000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);

        if ($this->upload->do_upload($img)) {
			// Archivo subido exitosamente
			$file_info = $this->upload->data();			
			$file_type = $file_info['file_ext'];
		}	

        $imgPath = 'assets/img/paquetes/'.$idPaquete.$file_type;

        $this->updateImgPath($idPaquete,$imgPath);       

    }

    protected function updateImgPath($idPaquete,$imgPath){
        $data = array(
            'img' => $imgPath,  			
        );
        $this->Paquete_model->update($idPaquete, $data);
    }

    protected function save_detalle($productos,$idPaquete,$cantidades,$precios,$importes){
        for($i=0; $i<count($productos);$i++){
            $data = array(
                'id_producto' => $productos[$i],
                'id_paquete' => $idPaquete,
                'cantidad' => $cantidades[$i],
                'precio' => $precios[$i],                
                'importe' => $importes[$i]			
            );
            $this->Paquete_model->save_detalle($data);		
        }

    }

	public function delete($id){
		$data = array(
			'eliminado' => "1",
		);
		$this->Paquete_model->update($id, $data); 
		echo "paquetes"; 
	}


}