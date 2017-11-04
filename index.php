<?php

    include_once "db/aoe2DB.php";
    /* Will manage which template must load */
    include_once "templates/TemplateManager.php";
    /* Carregar la plantilla del header */
    include_once "templates/head.php";
    /* Carreguem el banner amb el menú */
    include_once "templates/header.php";
    /* Carregar la plantilla del contingut */
    include_once "templates/page_content.php";
    /* Carregar la plantilla del footer */
    include_once "templates/footer.php";

    $db = new aoe2DB();
    $result = $db->getContentById(1);

    $tm = new TemplateManager($result);




?>
