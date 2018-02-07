<?php

namespace Prospect\Currencies;

use Prospect\Backends\Backend;
use Prospect\Backends\Insight;

class Viacoin extends BaseCurrency implements Currency
{
    public function createNewBackend(): Backend
    {
        return new Insight('https://explorer.viacoin.org/api/');
    }
}
