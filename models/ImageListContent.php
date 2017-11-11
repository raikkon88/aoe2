<?php

include_once "ImageContent.php";

class ImageListContent extends ImageContent{

    protected $list;

    public function __construct($array){
        parent::__construct($array);
        if(isset($array[EnumDBContent::CHILDS])){
            $this->list = $array[EnumDBContent::CHILDS];
        }
    }

    public function getHtmlList(){
        $res =  '<ul class="list-group">';
        foreach ($this->list as $item){
            $res = $res . $item->getHtmlListItem();
        }
        $res = $res . '</ul>';
        return $res;
    }

    public function getHtml(){
        return  '<section class="page-content col-xs-9">' .
                    $this->getHtmlTitle()  .
                    $this->getHtmlResource() .
                    $this->getHtmlContent() .
                    $this->getHtmlList() .
                '</section>';
    }

}

?>
