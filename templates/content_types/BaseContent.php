<?php

class BaseContent {

    private $title;
    private $textContent;

    public function __construct($title, $content){
        $this->title = $title;
        $this->textContent = $content;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getTextContent(){
        return $this->textContent;
    }
}

?>
