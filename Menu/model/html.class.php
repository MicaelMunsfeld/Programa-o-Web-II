<?php

class Html {

    private $head;
    private $body;

    public function __construct($head, $body) {
        $this->head = $head;
        $this->body = $body;
    }

    public function render() {
        return "<html>" . $this->head->render() . $this->body->render() . "</html>";
    }

}