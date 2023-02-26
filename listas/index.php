<?php

include_once "model/listas.php";

$lista_ul = new Listas();

$lista_ul->addItem("Item 1");
$lista_ul->addItem("Item 2");
$lista_ul->addItem("Item 3");

echo $lista_ul;

$lista_ol = new Listas('ol');

$lista_ol->addItem("Item A");
$lista_ol->addItem("Item B");
$lista_ol->addItem("Item C");

echo $lista_ol;