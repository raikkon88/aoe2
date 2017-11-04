<?php

RootPath::include_path("db/EnumReosourceType.php");

class Resource {
    private $id;
    private $url;
    private $contentType;
    private $parenId;

    function __construct($id, $url, $contentType, $parentId){
        $this->id=$id;
        $this->url = $url;
        $this->contentType = $contentType;
        $this->parentId = $parentId;
    }

    function getHtml($class){
        if($this->contentType == EnumReosourceType::AUDIO){
            //TODO : Change to audio tag
            return $this->url;
        }
        else if($this->contentType == EnumReosourceType::VIDEO){
            // TODO: Change to video tag
            return $this->url;
        }
        else{
            // IS AN Image
            return '<img src="'. $this->url .'" class="'. $class .'"/>';
        }
    }

}

?>
