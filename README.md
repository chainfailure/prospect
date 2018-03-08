# Prospect

***This project is still in early development, shit will break, shit will change.***

A PHP library for interaction with various cryptocurrencies.

## Who is this for?
Everyone seeking to query specific information from a cryptocurrency's blockchain.

## What can it do?
|Currency|Code|Fetch transactions|Fetch addresses|
|---|:---:|:---:|:---:|
|Viacoin|`via`|:white_check_mark:|:white_check_mark:
|Bitcoin|`btc`|:white_check_mark:|:white_check_mark:
|Litecoin|`ltc`|:white_check_mark:|:white_check_mark:
|Dash|`dash`|:white_check_mark:|:white_check_mark:

## Fine, show me some code

How to fetch a Viacoin transaction:
```php
use Prospect\Currency;

$viacoin = Currency::get('via');
$transaction = $viacoin->getTransaction(
    '9c57869fd7e131c0d9ddfe3ba7f62669bc6b01851323709aa96b9d7a9719dc05'
);
echo 'In: '.$transaction->getValueIn()."\n";
echo 'Out: '.$transaction->getValueOut()."\n";
echo 'Fee: '.$transaction->getFee()."\n";
```

How to fetch a Litecoin address's transactions and balance:
```php
use Prospect\Currency;

$litecoin = Currency::get('ltc');
$address = $litecoin->getAddress(
    'LbAw4wCLj9VAKxV4aeyRTygFdUxT1LiudY'
);
echo 'Balance: '.$address->getBalance()."\n";
echo 'Received: '.$address->getTotalReceived()."\n";
echo 'Sent: '.$address->getTotalSent()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()."\n";
```

Now get off my lawn.
