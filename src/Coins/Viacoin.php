<?php

namespace Prospect\Coins;

use Prospect\Backends\Backend;
use Prospect\Backends\Insight;

class Viacoin extends BaseCoin implements Coin
{
    public function createNewBackend(): Backend
    {
        return new Insight('https://explorer.viacoin.org/insight-via-api/');
    }
}
