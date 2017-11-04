<?php
    include('db/aoe2DB.php');
    /* Will manage which template must load */
    include('templates/TemplateManager.php');
    /* Carregar la plantilla del header */
    include('templates/head.php');
    /* Carreguem el banner amb el menú */
    include('templates/header.php');
    /* Carregar la plantilla del contingut */
    include('templates/page_content.php');
    /* Carregar la plantilla del footer */
    include('templates/footer.php');

    $db = new aoe2DB();
    $result = $db->getContentById(1);

    $tm = new TemplateManager($result);




?>
