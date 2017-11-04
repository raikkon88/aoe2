<?php
include_once "content_types/BaseContent.php";
include_once "content_types/ImageContent.php";
include_once "content_types/ListContent.php";
include_once "content_types/VideoContent.php";
include_once "content_types/ImageListContent.php";
include_once "content_types/ImageAudioContent.php";
include_once "db/EnumContentType.php";


class TemplateManager {

    private $contentType;
    private $content;

    function __construct($array){
        $this->content = $array;
    }

}



?>
