<?php

namespace Prospect\Currencies;

use Prospect\Backends\Backend;
use Prospect\Backends\Insight;

class Litecoin extends BaseCurrency implements Currency
{
    public function createNewBackend(): Backend
    {
        return new Insight('https://insight.litecore.io/api/');
    }
}
