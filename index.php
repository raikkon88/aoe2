<?php
    include_once "db/aoe2DB.php";
    /* Will manage which template must load */
    include_once "templates/TemplateManager.php";
    /* Carregar la plantilla del header */
    include_once "templates/head.php";
    /* Carreguem el banner amb el menú */
    ?>
    <div class="col-xs-6" style="background-color:red">
        <?php
            include_once "templates/froala.php";
        ?>
    </div>
    <?php
    include_once "templates/header.php";
    /* Carregar la plantilla del contingut */
    include_once "aside.php";

    $db = new aoe2DB();
    $tm = new TemplateManager($db->getContentById(1));
    $contentObject = $tm->getContentObject();
    echo $contentObject->getEntireSection();

    /* Carregar la plantilla del footer */
    include_once "templates/footer.php";

?>
