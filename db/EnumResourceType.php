<?php

include_once "Enum.php";

class EnumResourceType extends Enum {

        const __default = self::AUDIO;

        const AUDIO = "Audio";
        const IMAGE = "Image";
        const VIDEO = "Video";
}

?>
