<?php

    include_once "db/aoe2DB.php";
    /* Will manage which template must load */
    include_once "templates/TemplateManager.php";
    /* Carregar la plantilla del header */
    include_once "templates/head.php";
    /* Carreguem el banner amb el menú */
    include_once "templates/header.php";
    /* Carregar la plantilla del contingut */
    //include_once "templates/page_content.php";
    echo "ha me carregat algu aqui dalt.";
    $db = new aoe2DB();
    echo "db oberta";
    $result = $db->getContentById(1);
    echo "content obtingut";

    $tm = new TemplateManager($result);
    echo $tm->getContentObject();

    /* Carregar la plantilla del footer */
    include_once "templates/footer.php";






?>
