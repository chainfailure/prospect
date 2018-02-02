# Prospect

***This project is still in early development, shit will change.***

A PHP library for interaction with various cryptocurrencies.

## Who is this for?
Everyone seeking to build applications that utilize cryptocurrencies.

## What can it do?
|Currency|Code|Fetch transactions|Fetch addresses|
|---|:---:|:---:|:---:|
|Viacoin|`via`|:white_check_mark:|:white_check_mark:
|Litecoin|`ltc`|:white_check_mark:|:white_check_mark:

## Fine, show me some code

How to fetch a Viacoin transaction:
```php
use Prospect\Currency;

$viacoin = Currency::get('via');
$transaction = $viacoin->getTransaction(
    '9c57869fd7e131c0d9ddfe3ba7f62669bc6b01851323709aa96b9d7a9719dc05'
);
echo 'In: '.$transaction->getValueIn()->getAmount()."\n";
echo 'Out: '.$transaction->getValueOut()->getAmount()."\n";
echo 'Fee: '.$transaction->getFee()->getAmount()."\n";
```

How to fetch a Litecoin address's transactions and balance:
```php
use Prospect\Currency;

$litecoin = Currency::get('ltc');
$address = $litecoin->getAddress(
    'LbAw4wCLj9VAKxV4aeyRTygFdUxT1LiudY'
);
echo 'Balance: '.$address->getBalance()->getAmount()."\n";
echo 'Received: '.$address->getTotalReceived()->getAmount()."\n";
echo 'Sent: '.$address->getTotalSent()->getAmount()."\n";
echo 'Unconfirmed: '.$address->getUnconfirmedBalance()->getAmount()."\n";
```

As you can see, all monetary values are wrapped in [`Money`](https://github.com/moneyphp/money) objects as it provides a sane API for dealing with currencies in PHP.

Now get off my lawn.
