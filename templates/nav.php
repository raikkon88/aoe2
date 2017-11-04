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

<nav class="menu">
  <ul class="menu-list">
    <?php
      // Monta tots els elements del menú en la llista.
      while ($menuItem = current($items)) {
          echo('<a href="'. key($items) .'"><li class="menu-item">'.$menuItem.'</li></a>');
          next($items);
      }
    ?>
  </ul>
</nav>
