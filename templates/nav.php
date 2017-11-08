<?php
  /**
   * Initialize constant values for menu
   * Push all menu items keyed by it's link.
   */
  $items = array(
                  "link1" => "Game Description",
                  "link2" => "Game Modes",
                  "link3" => "Element Descriptions",
                  "link4" => "Community",
                  "link5" => "Extensions"
                );
?>
<nav class="navbar navbar-inverse col-xs-12">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Age Of Empires II</a>
    </div>
    <ul class="nav navbar-nav">
        <?php
          // Monta tots els elements del menú en la llista.
          while ($menuItem = current($items)) {
              echo '<li><a href="#">Page 1</a></li>';

              //echo '<button type="button" class="btn btn-default navbar-btn">' . $menuItem . '</button>';
             // echo('<a href="'. key($items) .'"><li class="menu-item">'.$menuItem.'</li></a>');
              next($items);
          }
        ?>
    </ul>
  </div>
</nav>
