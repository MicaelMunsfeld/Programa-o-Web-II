<?php

class Body {

    private $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function render() {
        return "<body>" . $this->content . "</body>";
    }

}