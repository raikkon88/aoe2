<?php
include_once "../models/RootPath.php";
RootPath::include_path("db/aoe2DB.php");
RootPath::include_path("db/EnumResourceType.php");
$dbPath = RootPath::get_absolute_path("db/aoe2DB.db");

if(isset($_POST["query"])){
    $db = new aoe2DB($dbPath);
    $db->insertContent($_POST["id"],$_POST["parentID"],$_POST["title"],$_POST["contentType"],$_POST["content"],1);
    if(strlen($_POST[EnumResourceType::IMAGE]) > 0){
        $db->insertResource($_POST[EnumResourceType::IMAGE], EnumResourceType::IMAGE, $_POST["id"]);
    }
    if(strlen($_POST[EnumResourceType::AUDIO]) > 0){
        $db->insertResource($_POST[EnumResourceType::AUDIO], EnumResourceType::AUDIO, $_POST["id"]);
    }
    if(strlen($_POST[EnumResourceType::VIDEO]) > 0){
        $db->insertResource($_POST[EnumResourceType::VIDEO], EnumResourceType::VIDEO, $_POST["id"]);
    }
    var_dump($_POST);

}

?>
