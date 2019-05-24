<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Usuarios');
		$this->load->database('default');
	}


	public function index()
	{
		$this->load->view('inicio');
	}

	public function usuarios()
	{
		$this->load->view('usuarios');
	}

	public function agregarusuarios()
	{
		$this->load->view('nuevousuario_views');
	}

	public function insertarusuario()
	{
		$nombre = $this->input->post('nombre_vista');
		$carrera = $this->input->post('carrera');
		$guardar_datos = $this->Usuarios->insertarusuario_model($nombre, $carrera);
	}


}
