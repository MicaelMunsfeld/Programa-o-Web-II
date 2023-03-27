<?php

class Noticia {

  public $id;
  public $titulo;
  public $resumo;
  public $imagem;
  public $data_publicacao;
  
  public function __construct($id, $titulo, $resumo, $imagem, $data_publicacao) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->resumo = $resumo;
    $this->imagem = $imagem;
    $this->data_publicacao = $data_publicacao;
  }

  public function getId() {
    return $this->id;
  }
    
  public function getTitulo() {
    return $this->titulo;
  }
  
  public function getResumo() {
    return $this->resumo;
  }
  
  public function getImagem() {
    return $this->imagem;
  }
  
  public function getDataPublicacao() {
    return $this->data_publicacao;
  }

  public function exibir() {
    echo '<div class="noticia">';
    echo '<h3>'.$this->titulo.'</h3>';
    echo '<p>'.$this->resumo.'</p>';
    echo '<img src="'.$this->imagem.'" alt="">';
    echo '<p>Publicado em '.$this->data_publicacao.'</p>';
    echo '</div>';
  }
    
}  