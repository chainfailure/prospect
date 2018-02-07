<?php

require '../vendor/autoload.php';

use Prospect\Currency;

echo '--------------------------'."\n";
echo '|        Viacoin         |'."\n";
echo '--------------------------'."\n";
$viacoin = Currency::get('via');
$address = $viacoin->getAddress(
    'Vrh9ro5WhykxrPPBe2cgyNiB2sAVqzkWjX'
);
echo 'Balance: '.$address->getBalance()."\n";
echo 'Received: '.$address->getTotalReceived()."\n";
echo 'Sent: '.$address->getTotalSent()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()."\n";

echo "\n\n";
echo '--------------------------'."\n";
echo '|         Bitcoin        |'."\n";
echo '--------------------------'."\n";
$bitcoin = Currency::get('btc');
$address = $bitcoin->getAddress(
    '1Krd6pVawBzzydPm5BnrQPtBQsZ7z1HU8d'
);
echo 'Balance: '.$address->getBalance()."\n";
echo 'Received: '.$address->getTotalReceived()."\n";
echo 'Sent: '.$address->getTotalSent()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()."\n";

echo "\n\n";
echo '--------------------------'."\n";
echo '|        Litecoin        |'."\n";
echo '--------------------------'."\n";
$litecoin = Currency::get('ltc');
$address = $litecoin->getAddress(
    'LbAw4wCLj9VAKxV4aeyRTygFdUxT1LiudY'
);
echo 'Balance: '.$address->getBalance()."\n";
echo 'Received: '.$address->getTotalReceived()."\n";
echo 'Sent: '.$address->getTotalSent()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()."\n";

echo "\n\n";
echo '--------------------------'."\n";
echo '|          Dash          |'."\n";
echo '--------------------------'."\n";
$litecoin = Currency::get('dash');
$address = $litecoin->getAddress(
    'XmirwBzURUom15N428pe3RLMhuU9AFy8Gx'
);
echo 'Balance: '.$address->getBalance()."\n";
echo 'Received: '.$address->getTotalReceived()."\n";
echo 'Sent: '.$address->getTotalSent()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()."\n";
