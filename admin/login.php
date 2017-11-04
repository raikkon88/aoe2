<?php

include('../db/aoe2DB.php');

$db=new aoe2DB("../db/aoe2DB.db");


$db->insertContent(2, 'null', 'test2', 'tipus1','<p>aquesta es la prova2</p>',1);

$db->getContent();

?>
