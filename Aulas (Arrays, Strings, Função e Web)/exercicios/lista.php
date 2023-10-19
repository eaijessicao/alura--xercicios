<?php
$idadeList = [21, 19, 25, 30, 41, 18, 29, 40, 5];
$umaIdade = $idadeList [4];
echo $umaIdade;
//loop da lista
for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] .  PHP_EOL;
}
// Contar a lista
for ($i = 0;  $i < count($idadeList); $i++)  {
    echo $idadeList[$i] . PHP_EOL;
}