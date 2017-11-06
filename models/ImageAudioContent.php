<?php

include_once "ImageContent.php";

class ImageAudioContent extends ImageContent {

    protected $audio;

    public function __construct($array){
        parent::__construct($array);
        if(isset($array[EnumDBContent::RESOURCES])){
            $resources = $array[EnumDBContent::RESOURCES];
            foreach ($resources as $key => $res) {
                if($res->isAudio()){
                    $this->audio = $resources[$key];
                }
            }
        }
    }

    public function getHtml(){


        if(isset($this->audio)) {
            return '<section class="col-xs-9">' .
                       $this->getHtmlTitle() .
                       $this->resource->getHtml() .
                       $this->audio->getHtml() .
                       $this->getHtmlContent() .
                   '</section>';
        }
        else{
            return '<section class="col-xs-9">' . $this->getHtmlTitle() . $this->getHtmlContent() . '</section>';
        }
    }

}

?>
