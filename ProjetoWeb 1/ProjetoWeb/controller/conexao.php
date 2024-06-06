<?php

//Declaração de Classe e variáveis com finalidade de conectar com o Banco de Dados.
class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    //Método Construtor.
    public function _construct() {
        //Conectando com MySQLi.
        $this ->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        //Verificar erros na conexão.
        if($this->conexao->connect_error) {
            //Exibição do Erro.
            die("Falha na Conexão : " . $this->conexao->connect_error);
        }
    }

    //Método para realizar conexão.
    public function getConexao() {
        return $this->conexao;
    }    
}

?>