<?php

class Aside {

    public static function getHtml($items){
        $result = '<aside class="col-xs-3"><ul>';
        foreach ($items as $key => $value) {
            $result = $result . '<a href="index.php?page='.$value->getId().'"><li><span>'. $value->getTitle() . '</span></li></a>';
        }
        $result = $result.'</ul></aside>';
        return $result;
    }

}

?>
