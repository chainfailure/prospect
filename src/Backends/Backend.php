<?php

namespace Prospect\Backends;

use Prospect\Address;
use Prospect\Transaction;

interface Backend
{
    public function getTransaction(string $id): ?Transaction;
    public function getAddress(string $address): ?Address;
}
