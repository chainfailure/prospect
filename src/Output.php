<?php

namespace Prospect;

use Money\Money;

class Output
{
    const TYPE_PUBKEYHASH = 'pubkeyhash';

    protected $type;
    protected $value;

    public function getType(): ?string
    {
        return $this->string;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getValue(): ?Money
    {
        return $this->value;
    }

    public function setValue(Money $value): void
    {
        $this->value = $value;
    }
}
