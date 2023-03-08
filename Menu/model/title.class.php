<?php

class Title {
    
    private $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function __toString() {
        return $this->text;
    }

}