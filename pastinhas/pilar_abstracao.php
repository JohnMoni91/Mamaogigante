<?php
    class Funcionario {

        //atributos
        public $nome= null;
        public $telefone= null;
        public $numFilhos= null;

        function setNome($nome) { //Adicionamos o set, pois ele apenas recebe o valor e modifica, mas não retorna
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function setTeleMove ($telefone) {
            $this->teleMove = $telefone;
        }

        function getNome() { //O get ira dar o retorno dos atributos que forem solicitados
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        function getTeleMove () {
            return $this->teleMove;
        }
            
        //funções e métodos
        function resumiCardFunc () {
            return "$this->nome e ele possui $this->numFilhos filhos(a)";
        }
        function modificarNumFilhos ($numFilhos) {
            return $this->numFilhos = $numFilhos;
        }
    }

    $y= new Funcionario();
    $y->setNome("Monique"); //Estamos declarando as informações e valores
    $y->setNumFilhos("0");
    $y->setTeleMove("");
   
    //echo $y->resumiCardFunc();
    echo $y->getNome() . " possui " . $y->getNumFilhos() . " filhos.";

//numero 14

?>

