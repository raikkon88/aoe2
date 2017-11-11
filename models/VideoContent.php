<?php
include_once "BaseContent.php";

class VideoContent extends BaseContent{

    protected $resource;

    public function __construct($array){
        parent::__construct($array);
        if(isset($array[EnumDBContent::RESOURCES])){
            $resources = $array[EnumDBContent::RESOURCES];
            foreach ($resources as $key => $res) {
                if($res->isVideo()){
                    $this->resource = $resources[$key];
                }
            }
        }
    }

    public function getHtml(){
        if(isset($this->resource)) {
            return '<section class="page-content col-xs-9">' . $this->getHtmlTitle() . $this->resource->getHtml() . $this->getHtmlContent() . '</section>';
        }
        else{
            return '<section class="col-xs-9">' . $this->getHtmlTitle() . $this->getHtmlContent() . '</section>';
        }
    }

}

?>
