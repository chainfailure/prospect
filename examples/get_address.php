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
echo 'Balance: '.$address->getBalance()->getAmount()."\n";
echo 'Received: '.$address->getTotalReceived()->getAmount()."\n";
echo 'Sent: '.$address->getTotalSent()->getAmount()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()->getAmount()."\n";

echo "\n\n";
echo '--------------------------'."\n";
echo '|        Litecoin        |'."\n";
echo '--------------------------'."\n";
$litecoin = Currency::get('ltc');
$address = $litecoin->getAddress(
    'LbAw4wCLj9VAKxV4aeyRTygFdUxT1LiudY'
);
echo 'Balance: '.$address->getBalance()->getAmount()."\n";
echo 'Received: '.$address->getTotalReceived()->getAmount()."\n";
echo 'Sent: '.$address->getTotalSent()->getAmount()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()->getAmount()."\n";

echo "\n\n";
echo '--------------------------'."\n";
echo '|         Bitcoin        |'."\n";
echo '--------------------------'."\n";
$bitcoin = Currency::get('btc');
$address = $bitcoin->getAddress(
    '1Krd6pVawBzzydPm5BnrQPtBQsZ7z1HU8d'
);
echo 'Balance: '.$address->getBalance()->getAmount()."\n";
echo 'Received: '.$address->getTotalReceived()->getAmount()."\n";
echo 'Sent: '.$address->getTotalSent()->getAmount()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()->getAmount()."\n";
