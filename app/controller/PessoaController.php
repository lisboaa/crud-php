<?php
include '../../model/Pessoa.php';

class PessoaControl{
	function insert(){
        $pessoa = new Pessoa();
        $pessoa->populate($_POST);

        //$pessoa->setNome($_POST['nome']);
        //$pessoa->setNascimento($_POST['nascimento']);
        
		return $pessoa->insert();
		//header('Location:listar.php');
	}

	function update($objeto,$id){
        $pessoa = new Pessoa();

		return $pessoa->update($objeto,$id);
	}

	function delete($obj,$id){
		$pessoa = new Pessoa();
		return $pessoa->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$conteudo = new Pessoa();
		return $conteudo->findAll();
	}
}