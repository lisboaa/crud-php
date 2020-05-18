<?php
include '../conexao/Conexao.php';

class Pessoa extends Conexao{
    private $id;
    private $nome;
    private $nascimento;
    private $sexo;

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function setNascimento($nascimento) {
        return $this->nascimento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setSexo($sexo) {
        return $this->sexo;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        return $this->id;
    }

    public function salvar(){
        $db = Conexao::getInstance();
    	$consulta = $db->prepare("INSERT INTO pessoa(nome,nascimento,sexo) VALUES (:nome,:nascimento,:sexo)");
        $consulta->bindValue('nome',  $this->cidade);
        $consulta->bindValue('nascimento', $this->bairro);
        $consulta->bindValue('sexo' , $this->logradouro);
        $this->id = $db->lastInsertId();
    	return $consulta->execute();
    }

    public function editar($objeto,$id = null){
		$sql = "UPDATE pessoa SET nome = :nome, nascimento = :nascimento, sexo = :sexo WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $objeto->nome);
		$consulta->bindValue('nascimento', $objeto->nascimento);
		$consulta->bindValue('sexo' , $objeto->sexo);
		$consulta->bindValue('id', $id->id);
		return $consulta->execute();
    }

    public function deletar($objeto,$id = null){
		$sql =  "DELETE FROM pessoa WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
    }
    
    public function buscarPessoa(){
		$sql = "SELECT * FROM pessoa";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
    }
    

    public function populate($dados){

        foreach($this as $attr) {
            if(isset($dados[$attr]))
                $this->{$attr} = $dados[$attr];
        }

    }

}
