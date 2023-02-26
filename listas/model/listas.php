<?php

class Listas {

    /**
     * Array de itens.
     */
    private $itens = [];

    /**
     * Tipo da lista.
     */
    private $tipo;
  
    /**
     * Ctr.
     */
    public function __construct($tipo = 'ul') {
      $this->tipo = $tipo;
    }

    /**
     * Adiciona os itens no array.
     */
    public function addItem($item) {
      $this->itens[] = $item;
    }
  
    /**
     * Função nativa do PHP que transforma o conteúdo em string.
     */
    public function __toString() {
      $imprime = "<{$this->tipo}>\n";
      foreach ($this->itens as $item) {
        $imprime .= "<li>{$item}</li>\n";
      }
      $imprime .= "</{$this->tipo}>\n";
      return $imprime;
    }

}