<?php

class RootPath {

    public static function include_path($relativePath){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/aoe2/" . $relativePath;
    }

    public static function get_absolute_path($relative){
        return $_SERVER['DOCUMENT_ROOT'] . "/aoe2/" . $relative;
    }
}

?>
