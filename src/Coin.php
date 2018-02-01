<?php

namespace Prospect;

use Prospect\Coins;
use Prospect\Backends\Backend;

class Coin
{
    static protected $coins = [
        'via' => Coins\Viacoin::class,
        'ltc' => Coins\Litecoin::class,
    ];

    public static function get(string $identifier): Backend
    {
        if (!array_key_exists($identifier, self::$coins))
            throw new \InvalidArgumentException("coin [$identifier] was not found.");

        $coin = self::$coins[$identifier];

        // check if an instance is already avaible and use that instead
        if (is_object($coin)) return $coin->getBackend();

        // store the newly created instance so we can reuse it.
        self::$coins[$identifier] = new $coin;

        return self::$coins[$identifier]->getBackend();
    }
}
