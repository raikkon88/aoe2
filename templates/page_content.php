<?php
    include('content_types/BaseContent.php');

    $base = new BaseContent("Títol de la pàgina", "<p> aixó és un contingut </p>");
    // Aquí esperarem a fer la select i a tenir el tipus de contingut.
?>

<div class="row">
    <div class="col-xs-3">
        <?php include('aside.php'); ?>
    </div>
    <div class="col-xs-9">
        <h2><?php echo $base->getTitle(); ?></h2>
        <?php echo $base->getTextContent(); ?>
    </div>
</div>
