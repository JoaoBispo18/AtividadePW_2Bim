<?php
//Importação dos arquivos da pasta "controller" com prioridade "conexao.php".
require_once '../controller/conexao.php';

//Declaração de classe e variáveis para coleta e utilização do Banco de Dados.
class Pessoa{
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    //Bloco de Get e Set das variáveis referentes ao Banco.
    public function getId(){
        return $this->$id;
    }

    public function setId(){
        $this->id = $id;
    }

    public function getNome(){
        return $this->$nome;
    }

    public function setNome(){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->$endereco;
    }

    public function setEndereco(){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->$bairro;
    }

    public function setBairro(){
        $this->bairro = $bairro;
    }

    public function getCep(){
        return $this->$cep;
    }

    public function setCep(){
        $this->cep = $cep;
    }

    public function getCidade(){
        return $this->$cidade;
    }

    public function setCidade(){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->$estado;
    }

    public function setEstado(){
        $this->estado = $estado;
    }

    public function getTelefone(){
        return $this->$telefone;
    }

    public function setTelefone(){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->$celular;
    }

    public function setCelular(){
        $this->celular = $celular;
        
    }  

    public function __construct(){
        $this->conexao = new Conexao();
    }

//Método inserir.
public function inserir(){

//Usando sql para atribuir as variaveis a cima na pessoa e delimitando a quantidades de campos preenchidos.
$sql = "INSERT INTO pessoa (`nome`, ` bairro`, `cep`, `cidade`, `estado `, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";

//Linha de ação da conexcão com o que foi pego no metodo getConexao usando a função prepare levando ao sql.
$stmt = $this->conexao->getConexao()->prepare($sql);

//Cada "s" é referente aos cambos do banco que vão ser preenchidos.
$stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);

//Return no execute para os dados serem pegos/utilizados/armazenados.
return $stmt->execute();
}

}

?>