<?php

include_once "../../db/EnumDBContent.php";

class BaseContent {

    protected $id;
    protected $parent_id;
    protected $title;
    protected $textContent;
    protected $type;
    protected $position;
    protected $childs; // This is an array of integers.

    public function __construct($array){
        $this->id = $array[EnumDBContent::ID];
        $this->parent_id = $array[EnumDBContent::PARENT_ID];
        $this->type = $array[EnumDBContent::TYPE];
        $this->title = $array[EnumDBContent::TITLE];
        $this->position= $array[EnumDBContent::POSITION];
        $this->textContent = $array[EnumDBContent::CONTENT];
        $this->childs = $array[EnumDBContent::CHILDS];
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

    public function getHtmlContent(){
        return "<div class='content'>" . $this->textContent . "</div>";
    }

    public function getEntireSection(){
        return '<section class="col-xs-9">' . $this->getHtmlTitle()  . $this->getHtmlContent() . '</section>';
    }

}

?>
