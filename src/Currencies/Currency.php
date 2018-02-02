<?php

namespace Prospect\Currencies;

use Prospect\Backends\Backend;

interface Currency
{
    public function getBackend(): ?Backend;
    public function setBackend(Backend $backend): void;
}
