<?php

include_once "Enum.php";

class EnumContentType extends Enum {

    const __default = self::BASE_CONTENT;

    const BASE_CONTENT = "B";
    const IMAGE_CONTENT = "CI";
    const IMAGE_LIST_CONTENT = "CIL";
    const IMAGE_AUDIO_CONTENT = "CIA";
    const LIST_CONTENT = "CL";
    const VIDEO_CONTENT = "CV";
}

?>
