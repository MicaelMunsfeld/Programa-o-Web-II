<?php

class Meta {

    private $charset;

    public function __construct($charset) {
        $this->charset = $charset;
    }

    public function render() {
        return "<meta charset=\"" . $this->charset . "\">";

    }
    
}