<?php

define('SATOSHI_DECIMALS', 8);

function to_satoshi($amount): ?int {
    if (!is_numeric($amount)) 
        throw new InvalidArgumentException("specified amount [$amount] is not numeric!");

    if ($amount <= 0) 
        throw new InvalidArgumentException("specified amount [$amount] is not positive!");

    return (int) ($amount * 100000000);
}
