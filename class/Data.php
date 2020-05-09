<?php


class Data
{
    private $verbs1 = [];
    private $nouns1 = [];
    private $nouns2 = [];

    function __construct(string $pathToFile, int $method)
    {
        switch ($method) {
            case 0:
                return false;
                break;
            case 1:
                require_once($pathToFile);
                if (!isset($dictionary['DICT1'], $dictionary['DICT2'], $dictionary['DICT2'])) {
                    return false;
                } else {
                    $this->verbs1 = $dictionary['DICT1'];
                    $this->nouns1 = $dictionary['DICT2'];
                    $this->nouns2 = $dictionary['DICT3'];
                }
                break;
            case 2:
                /**
                 * TODO: implement dictionary loading from json.
                 */
                break;
            default:
                break;
        }
        return $this;
    }

    public function getRandomCombination(): array {

        $index1 = rand(0, count($this->verbs1) - 1);
        $index2 = rand(0, count($this->nouns1) - 1);
        $index3 = rand(0, count($this->nouns2) - 1);

        return [$this->verbs1[$index1], $this->nouns1[$index2], $this->nouns2[$index3]];
    }

}