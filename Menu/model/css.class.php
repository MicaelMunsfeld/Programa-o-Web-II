<?php

class Css {
    
    private $links;

    public function __construct($links) {
        $this->links = $links;
    }

    public function render() {
        $output = "";
        foreach ($this->links as $link) {
            $output .= "<link href=\"" . $link . "\" rel=\"stylesheet\">";
        }
        return $output;
    }

}