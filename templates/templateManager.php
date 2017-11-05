<?php

include_once "models/BaseContent.php";
include_once "models/ImageContent.php";
include_once "models/ListContent.php";
include_once "models/VideoContent.php";
include_once "models/ImageListContent.php";
include_once "models/ImageAudioContent.php";
include_once "db/EnumContentType.php";
include_once "db/EnumDBContent.php";


class TemplateManager {

    private $content;

    function __construct($array){
        $this->content = $array;
    }

    function getContentObject(){

        switch ($this->content[EnumDBContent::TYPE]) {
            case EnumContentType::BASE_CONTENT:
                return new BaseContent($this->content);
                break;
            case EnumContentType::IMAGE_CONTENT:
                return new ImageContent($this->content);
                break;
            case EnumContentType::LIST_CONTENT:


                break;
            case EnumContentType::VIDEO_CONTENT:
                return new VideoContent($this->content);
                break;
            case EnumContentType::IMAGE_AUDIO_CONTENT:


                break;
            case EnumContentType::IMAGE_LIST_CONTENT:


                break;

            default:
                return 0;
                break;
        }
    }
}



?>
