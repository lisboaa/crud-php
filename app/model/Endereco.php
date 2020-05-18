<?php
include '../conexao/Conexao.php';

class Endereco extends Conexao{
    private $id_pessoa;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $uf;

    function getLogradouro() {
        return $this->logradouro;
    }
    
    function setLogradouro($logradouro) {
        return $this->logradouro;
    }

    function getBairro() {
        return $this->bairro;
    }

    function setBrairro($bairro) {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setCidade($cidade) {
        return$this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function setUf($uf) {
        return $this->uf;
    }

    function getIdPessoa() {
        return $this->id_pessoa;
    }

    function setIdPessoa($id_pessoa) {
        return $this->id_pessoa;
    }

    public function insert($objeto){
    	$sql = "INSERT INTO endereco(cidade,bairro,logradouro,id_pessoa,uf) VALUES (:cidade,:bairro,:logradouro,:id_pessoa,:uf)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('cidade',  $objeto->cidade);
        $consulta->bindValue('bairro', $objeto->bairro);
        $consulta->bindValue('logradouro' , $objeto->logradouro);
        $consulta->bindValue('id_pessoa' , $objeto->id_pessoa);
        $consulta->bindValue('uf', $objeto->uf);
    	return $consulta->execute();
    }

    public function update($objeto,$id = null){
		$sql = "UPDATE endereco SET cidade = :cidade, bairro = :bairro,logradouro = :logradouro, id_pessoa = :id_pessoa,uf =:uf WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('cidade', $objeto->cidade);
		$consulta->bindValue('bairro', $objeto->bairro);
		$consulta->bindValue('logradouro' , $objeto->logradouro);
		$consulta->bindValue('id_pessoa', $objeto->id_pessoa);
		$consulta->bindValue('uf' , $objeto->uf);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
    }
    
    public function delete($objeto,$id = null){
		$sql =  "DELETE FROM endereco WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
    }

    public function findAll(){
		$sql = "SELECT * FROM endereco";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
    

}