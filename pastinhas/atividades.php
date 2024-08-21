<?php
    class Pessoa {
        public $nome = null;

    function __construct($nome) { //essa função irá dará uma mensagem quando o código for executado corretamente
        echo "objeto iniciado";
        $this->nome = $nome;
        }

        function __destruct($nome) {
            echo "objeto removido"; //essa mensagem irá aparecer quando o "unset" removerá alguma variavel
        }

        function __get($atributo) { //Ele está sendo solicitado a procurar informações
            return $this->$atributo;
        }

        function correr() {
            return $this->__get('nome') . ' está correndo!'; //aqui retornamos a informação que o get foi solicitado a fazer
        }

    }

    $pessoa = new Pessoa("João");
    echo $pessoa->correr();

    unset($pessoa); //aqui removemos a variavel
?>