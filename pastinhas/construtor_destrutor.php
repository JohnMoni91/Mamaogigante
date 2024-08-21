<?php
    class Pessoa { 
        public $nome = null;

    function __construct($nome) { //essa função irá dará uma mensagem quando o código for executado corretamente
        echo 'Objeto iniciado';
        $this->nome = $nome;
        }

        function __get($atributo) { //Ele está sendo solicitado a procurar informações
            return $this->$atributo;
        }

    }

    $pessoa = new Pessoa("João"); //o "new" serve para dar uma nova informação ou substituir para certa variavel
    echo "<br/> Nome: " . $pessoa->__get("nome"); //o resultado
?>