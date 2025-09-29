<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function stringParaBinario($string) {
    $binario = '';
    $bytes = unpack('C*', $string);
    foreach ($bytes as $byte) {
        $binario .= str_pad(decbin($byte), 8, '0', STR_PAD_LEFT) . ' ';
    }
    return $binario;
}

$frase = "Olá mundo!";
$fraseBinario = stringParaBinario($frase);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Binário</title>
</head>
<body>
    <h1>Frase original: <?= htmlspecialchars($frase) ?></h1>
    <h2>Frase em binário: <?= htmlspecialchars($fraseBinario) ?></h2>
</body>
</html>
