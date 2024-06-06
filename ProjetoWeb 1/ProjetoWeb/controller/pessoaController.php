<?php

//Importação dos arquivos da pasta "Model" com prioridade "Pessoas.php".
require_once '../model/pessoas.php';

//Declaração de classe PessoaController.
class PessoasController{
    private $pessoa;

    //Declaração do método construtor.
    public function _construct(){
        $this->pessoa = new Pessoa(); 
        $this->inserir();
    }

    //Declaração do método Inserir e linkando Pessoa para os set de cada variável.
    public function inserir(){
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
        //Locando pessoa para o inserir.
        $this->pessoa->inserir();
    }

}    
//Instanciando PessoaControler.
new PessoasController();
?>