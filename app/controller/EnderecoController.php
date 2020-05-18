<?php

require_once '../model/Endereco.php';


class EnderecoController{
	function insert($objeto){
		$endereco = new Endereco();
		//echo $obj->titulo;
		return $endereco->insert($objeto);
		header('Location:listar.php');
	}

	function update($objeto,$id){
		$endereco = new Endereco();
		return $endereco->update($objeto,$id);
	}

	function delete($obj,$id){
		$endereco = new Pessoa();
		return $endereco->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$endereco = new Endereco();
		return $endereco->findAll();
	}
}