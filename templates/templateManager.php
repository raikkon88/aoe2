<?php
include_once "content_types/BaseContent.php";
include_once "content_types/ImageContent.php";
include_once "content_types/ListContent.php";
include_once "content_types/VideoContent.php";
include_once "content_types/ImageListContent.php";
include_once "content_types/ImageAudioContent.php";
include_once "db/EnumContentType.php";
include_once "db/EnumDBContent.php";


class TemplateManager {

    private $contentType;
    private $content;

    function __construct($array){
        $this->content = $array;
    }

    function getContentObject(){
        echo "get content object";

        switch ($this->content[EnumDBContent::TYPE]) {
            case EnumContentType::BASE_CONTENT:


                break;
            case EnumContentType::IMAGE_CONTENT:


                break;
            case EnumContentType::LIST_CONTENT:


                break;
            case EnumContentType::VIDEO_CONTENT:


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
