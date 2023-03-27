<?php

class NoticiaGerenciador {
    
    private $noticias;
  
    public function __construct() {
      session_start();
  
      if (!isset($_SESSION['noticias'])) {
        $_SESSION['noticias'] = array();
      }
      $this->noticias = &$_SESSION['noticias'];
    }
  
    public function adicionarNoticia($id, $titulo, $resumo, $imagem, $data_publicacao) {
      $noticia = new Noticia($id, $titulo, $resumo, $imagem, $data_publicacao);
      array_push($this->noticias, $noticia);
    }
  
    public function listarNoticias() {
      return $this->noticias;
    }
    
}  