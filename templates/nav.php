<?php
  /**
   * Initialize constant values for menu
   * Push all menu items keyed by it's link.
   */
  $items = array(
                  "1" => "Game Description",
                  "5" => "Game Modes",
                  "13" => "Element Descriptions",
                  "55" => "Extensions",
                  "38" => "Delivery Information"
                );
?>
<nav class="navbar navbar-inverse col-xs-12">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Age of Empires II</a>
    </div>
    <ul class="nav navbar-nav">
        <?php
          // Monta tots els elements del menú en la llista.
          while ($menuItem = current($items)) {
              echo '<li><a href="'. LOCAL_PATH . 'index.php?page='.key($items).'">'.$menuItem.'</a></li>';

              //echo '<button type="button" class="btn btn-default navbar-btn">' . $menuItem . '</button>';
             // echo('<a href="'. key($items) .'"><li class="menu-item">'.$menuItem.'</li></a>');
              next($items);
          }
        ?>
    </ul>
  </div>
</nav>
