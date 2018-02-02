<?php

require '../vendor/autoload.php';

use Prospect\Currency;

$viacoin = Currency::get('via');
$transaction = $viacoin->getTransaction(
    '9c57869fd7e131c0d9ddfe3ba7f62669bc6b01851323709aa96b9d7a9719dc05'
);
echo 'In: '.$transaction->getValueIn()->getAmount()."\n";
echo 'Out: '.$transaction->getValueOut()->getAmount()."\n";
echo 'Fee: '.$transaction->getFee()->getAmount()."\n";

$litecoin = Currency::get('ltc');
$transaction = $litecoin->getTransaction(
    '0d624a3c5c7502c5d6f0412bc0432625b08f0d1b20eb0147cceca07a08026d01'
);
echo 'In: '.$transaction->getValueIn()->getAmount()."\n";
echo 'Out: '.$transaction->getValueOut()->getAmount()."\n";
echo 'Fee: '.$transaction->getFee()->getAmount()."\n";
