<?php

require "autoload.php";

$meta = new Meta("UTF-8");
$title = new Title("Gugu Gaiteiro");
$css = new Css(["https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css",]);
$head = new Head($meta, $title, $css);

$items = [
    ['url' => 'index.php'                 , 'label' => 'Início' ],
    ['url' => 'https://brazino777.com/pt/', 'label' => 'Sobre'  ],
    ['url' => 'https://brazino777.com/pt/', 'label' => 'Contato']
];

$menu = new Menu($items);
    
$heading = new Heading("Cepo de madera", ["text-center"]);
$content = new Paragraph("Qual é rapaziada. Fazendo qualquer parada aqui");
$container = new Div($heading->render() . $content->render() . $menu->render(), ["container"]);
$body = new Body($container->render());
$html = new Html($head, $body);

echo $html->render();