<?php

include "../src/SMCrypter.php";
$smCrypt = new SMCrypter();

//$originalValue = 65; //A
//echo 'Original Value: '.$originalValue;

echo "<br>";

$key = $smCrypt->keyGenerator();
//$key = 3000000;
//$key = 'VE16Z2pNPT1RTzVn';
//echo 'Generated Key: '.$key;

echo "<br>";

$en = $smCrypt->encode($key, "HELLO world $%!@# DEV full ! space ! ($%&*([{1354647}])) ");
echo 'Encrypted Value: '.$en;

echo "<br>";

echo 'Decrypted Value: '.$smCrypt->decode($key, $en);
