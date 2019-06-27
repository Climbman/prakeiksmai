<?php
require_once('dict.php');

class ResponseObject {
    function __construct($word1, $word2, $word3) {
        $this->combination = $word1 . "," . $word2 . "," . $word3;
        $this->length = strlen("" . $word1 . $word2 . $word3);
        $this->t_stamp = time();
        $this->phrase = "OK";
    }
}

$_GET["command"] = 1;

switch ($_GET["command"]) {
    case 1:
        $len1 = count($_DICT1);
        $len2 = count($_DICT2);
        $len3 = count($_DICT3);

        $rand1 = rand(0, $len1 - 1);
        $rand2 = rand(0, $len2 - 1);
        $rand3 = rand(0, $len3 - 1);
        
        $obj = New ResponseObject($_DICT1[$rand1], $_DICT2[$rand2], $_DICT3[$rand3]);
        $response_json = json_encode($obj);
        echo $response_json;
        break;
        
        
    default:
        echo null;
        break;
}
?>
