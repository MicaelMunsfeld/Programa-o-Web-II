<?php

require_once('model/siteNoticia.class.php');

class ExclusaoNoticia {

    public function excluirPorId($id) {
        $siteNoticia = new SiteNoticia();
        $excluiu = $siteNoticia->excluirNoticiaPorId($id);
        if($excluiu) {
            return 'Notícia excluída com sucesso.';
        } else {
            return 'Notícia não encontrada.';
        }
    }

}

?>