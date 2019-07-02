<?php

class TextCombination {
    function __construct($_DICT1, $_DICT2, $_DICT3) {
        $len1 = count($_DICT1);
        $len2 = count($_DICT2);
        $len3 = count($_DICT3);

        $rand1 = rand(0, $len1 - 1);
        $rand2 = rand(0, $len2 - 1);
        $rand3 = rand(0, $len3 - 1);
        
        $this->combination = $_DICT1[$rand1] . "," . $_DICT2[$rand2] . "," . $_DICT3[$rand3];
        $this->length = strlen("" . $_DICT1[$rand1] . $_DICT2[$rand2] . $_DICT3[$rand3]);
        $this->t_stamp = time();
        $this->phrase = "OK";
    }
}

class DBCombination {
    function __construct() {
    }
}

?>
