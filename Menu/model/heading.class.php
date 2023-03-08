<?php

class Heading {

    private $text;
    private $classes;

    public function __construct(string $text, array $classes = []) {
        $this->text = $text;
        $this->classes = $classes;
    }

    public function render(): string {
        $classString = !empty($this->classes) ? ' class="' . implode(' ', $this->classes) . '"' : '';
        return "<h1{$classString}>{$this->text}</h1>";
    }
    
}