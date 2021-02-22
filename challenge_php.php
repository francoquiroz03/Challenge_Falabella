<?php
    $array = [];
    $remplace = ["IT", "Falabella", "Integraciones"];
    for ($i = 1; $i <= 100; $i++) {
    (
        ($i % 3 == 0 || $i % 5 == 0) &&
        array_push($array,$remplace[(int)($i % 3 == 0 && $i % 5 >= 1) + ((int)($i % 3 == 0 && $i % 5 == 0) * 2)])
    ) ||
    array_push($array,$i);
}
print_r($array);
?>