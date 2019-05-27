<?php
require_once('dict.php');

$len1 = count($_DICT1);
$len2 = count($_DICT2);
$len3 = count($_DICT3);

$rand1 = rand(0, $len1 - 1);
$rand2 = rand(0, $len2 - 1);
$rand3 = rand(0, $len3 - 1);

$_GET["command"] = 0;

switch ($_GET["command"]) {
    case 0:
        echo $_DICT1[$rand1] . " " . $_DICT2[$rand2] . ", " . $_DICT3[$rand3];
        break;
    default:
        echo null;
        break;
}
?>
