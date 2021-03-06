<?php

include_once "BaseContent.php";

class ListContent extends BaseContent{
    protected $list;

    public function __construct($array){
        parent::__construct($array);
        if(isset($array[EnumDBContent::CHILDS])){
            $this->list = $array[EnumDBContent::CHILDS];
        }
    }

    public function getHtmlList(){
        $res =  '<div class="col-xs-12">';
        foreach ($this->list as $item){
            $res = $res . $item->getHtmlListItem();
        }
        $res = $res . '</div>';
        return $res;
    }

    public function getHtml(){
        return  '<section class="page-content col-xs-9">' .
                    $this->getHtmlTitle()  .
                    $this->getHtmlContent() .
                    $this->getHtmlList() .
                '</section>';
    }

}

?>
