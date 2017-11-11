<?php
define("LOCAL_PATH", "http://mspifarre.com/aoe2/");
define("INDEX_ID", 1);

$page = INDEX_ID;
if(isset($_GET["page"])){
    $page = $_GET["page"];
}

//echo "". $_SERVER["DOCUMENT_ROOT"] . "/aoe2/models/RootPath.php";
include_once "models/RootPath.php";
include_once "db/aoe2DB.php";
include_once "models/Resource.php";

/* Will manage which template must load */
include_once "templates/templateManager.php";
//RootPath::include_path("templates/TemplateManager.php");
/* Carregar la plantilla del header */
include_once "templates/head.php";
//RootPath::include_path("templates/head.php");
/* Carregar l'objecte Aside per generar l'aside */
include_once "templates/aside.php";
//RootPath::include_path("templates/aside.php");

$dbpath = "db/aoe2DB.db";

//$db = new aoe2DB($dbpath);
$db = new aoe2DB($dbpath);

//echo $_SERVER['DOCUMENT_ROOT'];
//echo RootPath::get_absolute_path("");
$tm = new TemplateManager($db->getContentById($page));
$contentObject = $tm->getContentObject();
/* Carreguem el banner amb el menú */
include_once "templates/header.php";
//RootPath::include_path("templates/header.php");
/* Carregar la plantilla del contingut */
if($contentObject->isDad()){
    echo Aside::getHtml($contentObject->getChilds());
}
else{
    echo Aside::getHtml($db->getContentChildsIDS($contentObject->getParentId()));
}

echo $contentObject->getHtml();

/* Carregar la plantilla del footer */
include_once "templates/footer.php";
//RootPath::include_path("templates/footer.php");

?>
