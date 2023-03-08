<?php

class Head {

    private $meta;
    private $title;
    private $css;

    public function __construct($meta, $title, $css) {
        $this->meta = $meta;
        $this->title = $title;
        $this->css = $css;
    }

    public function render() {
        return "<head>" . $this->meta->render() . "<title>" . $this->title . "</title>" . $this->css->render() . "</head>";
    }
    
}