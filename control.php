<?php

spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});

//control
switch ($_GET["command"]) {
    case 1:
        //model
        $data = New Data('dict.php', 1);
        $words = $data->getRandomCombination();

        //view
        echo json_encode(['phrase' => $words[0] . ' ' . $words[1] . ', ' . $words[2]]);
        break;
    default:
        break;
}
