<?php
//echo "". $_SERVER["DOCUMENT_ROOT"] . "/aoe2/models/RootPath.php";
include_once "models/RootPath.php";
RootPath::include_path("db/aoe2DB.php");
/* Will manage which template must load */
RootPath::include_path("templates/TemplateManager.php");
/* Carregar la plantilla del header */
RootPath::include_path("templates/head.php");
/* Carreguem el banner amb el menú */
RootPath::include_path("templates/header.php");
/* Carregar la plantilla del contingut */
RootPath::include_path("templates/aside.php");

$db = new aoe2DB();

//$tm = new TemplateManager($db->getContentById(1));
//$contentObject = $tm->getContentObject();
//echo $contentObject->getEntireSection();

/* Carregar la plantilla del footer */
RootPath::include_path("templates/footer.php");

?>
