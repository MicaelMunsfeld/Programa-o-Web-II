<?php

require_once('autoload.php');

$site = new SiteNoticia();

if(isset($_POST['titulo']) && isset($_POST['resumo']) && isset($_POST['imagem']) && isset($_POST['data_publicacao'])) {
  $site->adicionarNoticia($_POST['titulo'], $_POST['resumo'], $_POST['imagem'], $_POST['data_publicacao']);
}

$siteFormulario = new SiteFormulario();
$siteFormulario->exibirFormulario();