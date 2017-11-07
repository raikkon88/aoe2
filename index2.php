<?php
define("LOCAL_PATH", "http://mspifarre.com");
define("INDEX_ID", 1);

$page = INDEX_ID;
if(isset($_GET["page"])){
    $page = $_GET["page"];
}

//echo "". $_SERVER["DOCUMENT_ROOT"] . "/aoe2/models/RootPath.php";
include_once "models/RootPath.php";

/* Will manage which template must load */
RootPath::include_path("templates/TemplateManager.php");
/* Carregar la plantilla del header */
RootPath::include_path("templates/head.php");
/* Carregar l'objecte Aside per generar l'aside */
RootPath::include_path("templates/aside.php");

$db = new aoe2DB("db/aoe2DB.db");

$tm = new TemplateManager($db->getContentById($page));
$contentObject = $tm->getContentObject();
/* Carreguem el banner amb el menú */
RootPath::include_path("templates/header.php");
/* Carregar la plantilla del contingut */
if($contentObject->isDad()){
    echo Aside::getHtml($contentObject->getChilds());
}
else{
    echo Aside::getHtml($db->getContentChildsIDS($contentObject->getParentId()));
}

echo $contentObject->getHtml();

/* Carregar la plantilla del footer */
RootPath::include_path("templates/footer.php");

?>
