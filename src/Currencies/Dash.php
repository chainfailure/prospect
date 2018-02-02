<?php

namespace Prospect\Currencies;

use Prospect\Backends\Backend;
use Prospect\Backends\Insight;

class Dash extends BaseCurrency implements Currency
{
    public function createNewBackend(): Backend
    {
        return new Insight('https://insight.dash.org/insight-api-dash/');
    }
}
