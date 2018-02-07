<?php

namespace Prospect\Currencies;

use Prospect\Backends\Backend;

abstract class BaseCurrency
{
    protected $backend;

    public function __construct(Backend $backend = null)
    {
        if (!$backend) {
            $backend = $this->createNewBackend();
        }

        $this->setBackend($backend);
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
