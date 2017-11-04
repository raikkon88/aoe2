<?php

class RootPath {

    public static function include_path($relativePath){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/aoe2/" . $relativePath;
    }
}

?>
