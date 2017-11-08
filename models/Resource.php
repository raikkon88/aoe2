<?php
include_once "db/EnumResourceType.php";
//RootPath::include_path("db/EnumResourceType.php");

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
            return '<audio controls>
                      <source src="'.$this->url.'" type="audio/wav">
                      Your browser does not support the audio tag.
                    </audio>';
        }
        else if($this->contentType == EnumResourceType::VIDEO){
            return '<video width="320" height="240" class="video" controls>
                      <source src="'.$this->url.'" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>';
        }
        else{
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
