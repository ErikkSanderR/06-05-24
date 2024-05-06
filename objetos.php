<?php
class Fruta {
    public $nome;
    public $estilos;

    function __construct($nome, $estilos) {
        $this->nome = $nome;
        $this->estilos = $estilos;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_cor() {
        return $this->estilos;
    }
}

$celular = new Celures("Celular", "Preto");

echo "O nome da marca do aparelho é: " . $celular->get_nome();

echo"<br/>",

echo "A cor do aparelho é: " . $celular->get_estilos();