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

    public function getHtmlTitle(){
        return "<h2>" . $this->title . "</h2>";
    }

    public function getHtmlTitle(){
        return "<section class="content">" . $this->textContent . "</section>";
    }

}

?>
