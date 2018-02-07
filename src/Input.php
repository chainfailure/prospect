<?php

namespace Prospect;

class Input
{
    protected $value;
    protected $transaction;

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): void
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
