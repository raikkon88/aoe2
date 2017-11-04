<?php

include("Enum.php");

class EnumDBContent extends Enum {

    const __default = self::ID;

    const ID = 0;
    const PARENT_ID = 1;
    const TITLE = 2;
    const CONTENT = 3;
    const TYPE = 4;
    const POSITION = 5;
}

?>
