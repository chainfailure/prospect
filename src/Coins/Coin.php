<?php

namespace Prospect\Coins;

use Prospect\Backends\Backend;

interface Coin
{
    public function getBackend(): ?Backend;
    public function setBackend(Backend $backend): void;
}
