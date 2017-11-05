<?php

RootPath::include_path("db/EnumResourceType.php");

class Resource {
    private $id;
    private $url;
    private $contentType;
    private $parentId;

    public function __construct($id, $url, $contentType, $parentId){
        $this->id = $id;
        $this->url = $url;
        $this->contentType = $contentType;
        $this->parentId = $parentId;
    }

    public function getHtml($class = "img"){
        if($this->contentType == EnumResourceType::AUDIO){
            //TODO : Change to audio tag
            return $this->url;
        }
        else if($this->contentType == EnumResourceType::VIDEO){
            // TODO: Change to video tag
            return $this->url;
        }
        else{
            // IS AN Image
            return '<img src="'. $this->url .'" class="img '. $class .'" />';
        }
    }

    public function isImage(){
        return $this->contentType == EnumResourceType::IMAGE;
    }
    public function isAudio(){
        return $this->contentType == EnumResourceType::AUDIO;
    }
    public function isVideo(){
        return $this->contentType == EnumResourceType::VIDEO;
    }
}

?>
