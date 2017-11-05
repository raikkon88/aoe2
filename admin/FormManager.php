<?php
include_once "../models/RootPath.php";
RootPath::include_path("db/aoe2DB.php");
$dbPath = RootPath::get_absolute_path("db/aoe2DB.db");

if(isset($_POST["query"])){
    $db = new aoe2DB($dbPath);
    $db->insertContent($_POST["id"],$_POST["parentID"],$_POST["title"],$_POST["contentType"],$_POST["content"],1);
    var_dump($_POST);

}

?>
