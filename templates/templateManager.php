<?php
include('content_types/BaseContent.php');
include('content_types/ImageContent.php');
include('content_types/ListContent.php');
include('content_types/VideoContent.php');
include('content_types/ImageListContent.php');
include('content_types/ImageAudioContent.php');


class TemplateManager {

    const BASE_CONTENT = "B";
    const IMAGE_CONTENT = "CI";
    const IMAGE_LIST_CONTENT = "CIL";
    const IMAGE_AUDIO_CONTENT = "CIA";
    const LIST_CONTENT = "CL";
    const VIDEO_CONTENT = "CV";

    private $contentType;

    function __construct($array){
        
        //echo $array[EnumDBContent::ID];
    }
}



?>
