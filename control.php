<?php
require_once('config.php');
require_once('db.php');
require_once('dict.php');


switch ($_GET["command"]) {
    case 1:
        $obj = New TextCombination($_DICT1, $_DICT2, $_DICT3);
        $response_json = json_encode($obj);
        echo $response_json;
        break;
    case 2:
        $obj = New DBCombination();
        $response_json = json_encode($obj);
        echo $response_json;
        break;
    default:
        echo null;
        break;
}
?>
