<?php

class Div {
    
    private $content;
    private $classes;

    public function __construct(string $content, array $classes = []) {
        $this->content = $content;
        $this->classes = $classes;
    }

    public function render(): string {
        $classString = !empty($this->classes) ? ' class="' . implode(' ', $this->classes) . '"' : '';
        return "<div{$classString}>{$this->content}</div>";
    }

}