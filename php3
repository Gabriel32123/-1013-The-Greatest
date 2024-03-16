(1133) Rest of a Division

function restoDivisao($numero) {
    $resto = $numero % 5;
    return ($resto == 2 || $resto == 3);
}


$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));


$inicio = min($x, $y);
$fim = max($x, $y);


for ($i = $inicio + 1; $i < $fim; $i++) {
    if (restoDivisao($i)) {
        echo $i . PHP_EOL;
    }
}

?>
