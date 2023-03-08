<?php

class Menu {

    private $items;

    public function __construct($items) {
        $this->items = $items;
    }

    public function render() {
        $menuItems = '';
        foreach ($this->items as $item) {
            $menuItems .= '<li class="nav-item"><a class="nav-link" href="' . $item['url'] . '">' . $item['label'] . '</a></li>';
        }
        return '<nav class="navbar navbar-expand-lg navbar-light bg-light"><div class="collapse navbar-collapse" id="navbarSupportedContent"><ul class="navbar-nav mr-auto">' . $menuItems . '</ul></div></nav>';
    }
    
}