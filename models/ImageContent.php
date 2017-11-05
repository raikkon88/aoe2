<?php

include_once "BaseContent.php";
RootPath::include_path("db/EnumResourceType.php");
RootPath::include_path("db/EnumDBContent.php");

class ImageContent extends BaseContent {

    protected $resource;

    public function __construct($array){
        parent::__construct($array);
        $resources = $array[EnumDBContent::RESOURCES];
        foreach ($resources as $key => $res) {
            if($res->isImage()){
                $this->resource = $resources[$key];
            }
        }
    }

    public function getHtml(){
        return '<section class="col-xs-9">' . $this->getHtmlTitle()  .
            $this->resource->getHtml() .
               $this->getHtmlContent() . '</section>';
    }
}

?>
