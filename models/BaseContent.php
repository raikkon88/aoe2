<?php

RootPath::include_path("db/EnumDBContent.php");

class BaseContent {

    protected $id;
    protected $parent_id;
    protected $title;
    protected $textContent;
    protected $type;
    protected $position;
    protected $childs; // This is an array of integers.

    public function __construct($array){
        if(isset($array[EnumDBContent::ID]))        { $this->id = $array[EnumDBContent::ID]; }
        if(isset($array[EnumDBContent::PARENT_ID])) { $this->parent_id = $array[EnumDBContent::PARENT_ID]; }
        if(isset($array[EnumDBContent::TYPE]))      { $this->type = $array[EnumDBContent::TYPE]; }
        if(isset($array[EnumDBContent::TITLE]))     { $this->title = $array[EnumDBContent::TITLE]; }
        if(isset($array[EnumDBContent::POSITION]))  { $this->position= $array[EnumDBContent::POSITION]; }
        if(isset($array[EnumDBContent::CONTENT]))   { $this->textContent = $array[EnumDBContent::CONTENT]; }
        if(isset($array[EnumDBContent::CHILDS]))    { $this->childs = $array[EnumDBContent::CHILDS]; }
    }

    public function getTitle(){
        return $this->title;
    }

    public function getTextContent(){
        return $this->textContent;
    }

    public function getChilds(){
        return $this->childs;
    }

    public function getHtmlTitle(){
        return "<h2>" . $this->title . "</h2>";
    }

    public function getHtmlContent(){
        return "<div class='content'>" . $this->textContent . "</div>";
    }

    public function getHtml(){
        return '<section class="col-xs-9">' . $this->getHtmlTitle()  . $this->getHtmlContent() . '</section>';
    }

}

?>
