<?php

require '../vendor/autoload.php';

use Prospect\Currency;

echo '--------------------------'."\n";
echo '|        Viacoin         |'."\n";
echo '--------------------------'."\n";
$viacoin = Currency::get('via');
$transaction = $viacoin->getTransaction(
    '9c57869fd7e131c0d9ddfe3ba7f62669bc6b01851323709aa96b9d7a9719dc05'
);
echo 'In: '.$transaction->getValueIn()."\n";
echo 'Out: '.$transaction->getValueOut()."\n";
echo 'Fee: '.$transaction->getFee()."\n";

echo "\n\n";
echo '--------------------------'."\n";
echo '|         Bitcoin         |'."\n";
echo '--------------------------'."\n";
$bitcoin = Currency::get('btc');
$transaction = $bitcoin->getTransaction(
    '814efde2e735d1e5fc252c2712baea9171516053d2b920c90a4d0f332eae3efc'
);
echo 'In: '.$transaction->getValueIn()."\n";
echo 'Out: '.$transaction->getValueOut()."\n";
echo 'Fee: '.$transaction->getFee()."\n";

echo "\n\n";
echo '--------------------------'."\n";
echo '|        Litecoin        |'."\n";
echo '--------------------------'."\n";
$litecoin = Currency::get('ltc');
$transaction = $litecoin->getTransaction(
    '0d624a3c5c7502c5d6f0412bc0432625b08f0d1b20eb0147cceca07a08026d01'
);
echo 'In: '.$transaction->getValueIn()."\n";
echo 'Out: '.$transaction->getValueOut()."\n";
echo 'Fee: '.$transaction->getFee()."\n";

echo "\n\n";
echo '--------------------------'."\n";
echo '|          Dash          |'."\n";
echo '--------------------------'."\n";
$dash = Currency::get('dash');
$transaction = $dash->getTransaction(
    '7ac27faec12ab290ee03862aab23761c217fbbdca63df88641deca86efc80330'
);
echo 'In: '.$transaction->getValueIn()."\n";
echo 'Out: '.$transaction->getValueOut()."\n";
echo 'Fee: '.$transaction->getFee()."\n";
