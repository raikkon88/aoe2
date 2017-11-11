<?php
//include_once "db/EnumResourceType.php";
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

            if(strpos($this->url,'youtu.be')!==false){
                return '<div class="video-frame"><iframe width="420" height="315" src="https://www.youtube.com/embed'.substr($this->url,strrpos($this->url, "/"),strlen($this->url)).'"></iframe></div>';

            }
            else {
                return '<video width="320" height="240" class="video" controls>
                          <source src="'.$this->url.'" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>';
            }
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
