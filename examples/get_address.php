<?php

require '../vendor/autoload.php';

use Prospect\Coin;

echo '--------------------------'."\n";
echo '|        Viacoin         |'."\n";
echo '--------------------------'."\n";
$viacoin = Coin::get('via');
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
$litecoin = Coin::get('ltc');
$address = $litecoin->getAddress(
    'LbAw4wCLj9VAKxV4aeyRTygFdUxT1LiudY'
);
echo 'Balance: '.$address->getBalance()->getAmount()."\n";
echo 'Received: '.$address->getTotalReceived()->getAmount()."\n";
echo 'Sent: '.$address->getTotalSent()->getAmount()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()->getAmount()."\n";
