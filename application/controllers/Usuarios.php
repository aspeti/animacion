<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Usuario_model');
    }

	public function index()
	{
		$lista = array(
			'usuarios'=> $this->Usuario_model->getAllUsuarios(),
		);  

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/list', $lista);
		$this->load->view('layouts/footer');			
	}

	public function add()
	{		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/add');
		$this->load->view('layouts/footer');				
	}  

	public function insert()
	{
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$ci = $this->input->post("ci");
		$direccion = $this->input->post("direccion");
		$celular = $this->input->post("celular");
		$email = $this->input->post("email");
		$id_rol = $this->input->post("rol");

		//	echo ($nombre.'-'.$apellido.'-'.$ci.'-'.$direccion.'-'.$celular.'-'.$email.'-'.$id_rol);

		$newUser = array(
			'nombre' => $nombre,
			'apellido'=> $apellido,
			'ci'=> $ci,
			'direccion'=> $direccion,
			'celular'=> $celular,
			'email' => $email,
			'id_rol' => $id_rol,
			'estado' => "1",
			'fecha_creacion' => date('Y-m-d H:i:s'),
			'fecha_actualizacion' => date('Y-m-d H:i:s')
		);

		if($this->Usuario_model->save($newUser)){
			redirect(base_url()."usuarios");
		}else{
			$this->session->set_flashdata("Error","No se pudo guardar el registro");
			redirect(base_url()."usuarios/add");
		}

		//	echo $nombre." ".$descripcion; //to make test	
		
	}

	public function edit($id){	

		$data = array(

			'usuario' => $this ->Usuario_model->getUsuarioById($id),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update(){

		$id = $this->input->post("idusuario");
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$ci = $this->input->post("ci");
		$direccion = $this->input->post("direccion");
		$celular = $this->input->post("celular");
		$email = $this->input->post("email");
		$rol = $this->input->post("rol");

		//echo $id." ".$nombre." ".$descripcion; //to make test	
        
		$data = array(
			'nombre' => $nombre,
			'apellido' => $apellido,
			'ci' => $ci,
			'direccion' => $direccion,
			'celular' => $celular,
			'email' => $email,
			'id_rol' => $rol
		);

		if($this->Usuario_model->update($id, $data)){
			redirect(base_url()."usuarios");
		}else{
			$this->session->set_flashdata("Error","No se pudo actualizar el registro");
			redirect(base_url()."usuarios/edit/".$id);
		}	
	}

	public function view($id){		
		$data = array(
			'usuario' => $this ->Usuario_model->getUsuarioById($id),
		);		
		$this->load->view("admin/usuarios/view",$data);
	}

	public function delete($id){
		$data = array(
			'estado' => "0",
		);
		$this->Usuario_model->update($id, $data); //actualizamos el registro
		echo "usuarios"; //return url to redirect
	}

	


}