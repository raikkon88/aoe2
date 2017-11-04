<?php
  /** INICIALITZACIÓ VARIABLES */
  $assignatura = "MULTIMEDIA";
  $professor = "Anton Bardera";
  $practica = "Gestor de continguts";
?>

<div class="banner" style="background-image:url('images/banner.png')">

  <!--<img src="images/banner.png" style="width:100%"/>-->

  <ul class="banner_data">
    <li><?php echo $assignatura; ?></li>
    <li><?php echo $professor; ?></li>
    <li><?php echo $practica; ?></li>
  </ul>



  <?php include('nav.php'); ?>

</div>
