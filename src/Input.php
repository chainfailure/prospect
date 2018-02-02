<?php

namespace Prospect;

use Money\Money;

class Input
{
    protected $value;
    protected $transaction;

    public function getValue(): ?Money
    {
        return $this->value;
    }

    public function setValue(Money $value): void
    {
        $this->value = $value;
    }

    public function getTransaction(): ?string
    {
        return $this->transaction;
    }

    public function setTransaction(string $transaction): void
    {
        $this->transaction = $transaction;
    }
}
