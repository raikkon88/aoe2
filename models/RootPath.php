<?php

class RootPath {

    public static function include_path($relativePath){
        include_once "/home/marc/aoe2/" . $relativePath;
    }

    public static function get_absolute_path($relative){
        return  "/home/marc/aoe2/"  . $relative;
    }

    public static function get_server_name(){
        return LOCAL_PATH . "/aoe2/";
    }

    public static function get_index(){
        return RootPath::get_server_name() . "index.html";
    }
}

?>
