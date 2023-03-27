<?php

class SiteFormulario {
    
    public function exibirFormulario() {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Site de Notícias</title>
        </head>
        <body>
            <h1>Últimas Notícias</h1>
            <?php $site = new SiteNoticia(); $site->exibirNoticias(); ?>
            <h2>Adicionar Notícia</h2>
            <form action="index.php" method="post">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo">
          
                <label for="resumo">Resumo:</label>
                <textarea id="resumo" name="resumo"></textarea>
          
                <label for="imagem">URL da imagem:</label>
                <input type="text" id="imagem" name="imagem">
          
                <label for="data_publicacao">Data de publicação:</label>
                <input type="date" id="data_publicacao" name="data_publicacao">
          
                <button type="submit">Adicionar notícia</button>
            </form>
        </body>
        </html>
        <?php
    }
  
}