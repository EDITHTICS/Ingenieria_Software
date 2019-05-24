<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function verusuarios()
	{

		$us = $this->db->query("SELECT * FROM usuarios");
		$data = $us->result_array();
		return $data;
	}

	public function insertarusuario_model($nombre,$carrera)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO usuarios (nombre, carrera) VALUES ('$nombre' , '$carrera')");
	}

	
}
