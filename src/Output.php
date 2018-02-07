<?php

namespace Prospect;

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

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}
