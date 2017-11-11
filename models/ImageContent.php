<?php

include_once "BaseContent.php";
include_once "db/EnumResourceType.php";
//RootPath::include_path("db/EnumResourceType.php");
include_once "db/EnumDBContent.php";
//RootPath::include_path("db/EnumDBContent.php");

class ImageContent extends BaseContent {

    protected $resource;

    public function __construct($array){
        parent::__construct($array);
        if(isset($array[EnumDBContent::RESOURCES])){
            $resources = $array[EnumDBContent::RESOURCES];
            foreach ($resources as $key => $res) {
                if($res->isImage()){
                    $this->resource = $resources[$key];
                }
            }
        }
    }

    public function getHtmlResource(){
        if(isset($this->resource)){
            return $this->resource->getHtml();
        }
        return "";
    }

    public function getHtml(){
        return '<section class="page-content col-xs-9">' . $this->getHtmlTitle() . $this->getHtmlResource() . $this->getHtmlContent() . '</section>';
    }
}

?>
