<?php

namespace Prospect\Coins;

use Prospect\Backends\Backend;
use Prospect\Backends\Insight;

class Litecoin extends BaseCoin implements Coin
{
    public function createNewBackend(): Backend
    {
        return new Insight('https://insight.litecore.io/api/');
    }
}
