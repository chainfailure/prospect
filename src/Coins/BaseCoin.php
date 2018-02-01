<?php

namespace Prospect\Coins;

use Prospect\Backends\Backend;

abstract class BaseCoin
{
    protected $backend;

    public function __construct()
    {
        $this->backend = $this->createNewBackend();
    }

    public function getBackend(): ?Backend
    {
        return $this->backend;
    }

    public function setBackend(Backend $backend): void
    {
        $this->backend = $backend;
    }
}
