<?php

class SiteNoticia {
    
    public function exibirNoticias() {
      
      if(isset($_SESSION['noticias'])) {
        foreach($_SESSION['noticias'] as $noticia) {
          echo '<div class="noticia">';
          echo '<h2>' . $noticia->titulo . '</h2>';
          echo '<p>' . $noticia->resumo . '</p>';
          echo '<img src="' . $noticia->imagem . '"/>';
          echo '<p>' . $noticia->data_publicacao . '</p>';
          echo '<button data-id="'.$noticia->id.'" class="btn-excluir">Excluir</button>';
          echo '</div>';
        }
      } else {
        echo '<p>Não há notícias cadastradas.</p>';
      }
    }
  
    public function adicionarNoticia($titulo, $resumo, $imagem, $dataPublicacao) {
      session_start();
      if(!isset($_SESSION['noticias'])) {
        $_SESSION['noticias'] = array();
      }
      $id = count($_SESSION['noticias']);
      $noticia = new Noticia($id, $titulo, $resumo, $imagem, $dataPublicacao);
      array_push($_SESSION['noticias'], $noticia);
    }

    public function excluirNoticiaPorId($id) {
      session_start();
      if(isset($_SESSION['noticias'][$id])) {
        unset($_SESSION['noticias'][$id]);
        // reindexar o array
        $_SESSION['noticias'] = array_values($_SESSION['noticias']);
        return true;
      }
      return false;
    }
    
}