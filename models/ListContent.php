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
        $res =  '<ul>';
        foreach ($this->list as $item){
            $res = $res . $item->getHtmlListItem();
        }
        $res = $res . '</ul>';
        return $res;
    }

    public function getHtml(){
        return  '<section class="col-xs-9">' .
                    $this->getHtmlTitle()  .
                    $this->getHtmlContent() .
                    $this->getHtmlList() .
                '<section>';
    }

}

?>
