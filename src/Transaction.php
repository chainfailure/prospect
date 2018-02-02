<?php

namespace Prospect;

use Money\Money;

class Transaction
{
    protected $id;
    protected $blockHeight;
    protected $blockHash;
    protected $size;
    protected $confirmations;
    protected $valueIn;
    protected $valueOut;
    protected $fee;

    protected $inputs = [];
    protected $outputs = [];

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getBlockHeight(): string
    {
        return $this->blockHeight;
    }

    public function setBlockHeight(string $blockHeight): void
    {
        $this->blockHeight = $blockHeight;
    }

    public function getBlockHash(): string
    {
        return $this->blockHash;
    }

    public function setBlockHash(string $blockHash): void
    {
        $this->blockHash = $blockHash;
    }

    public function getConfirmations(): int
    {
        return $this->confirmations;
    }

    public function setConfirmations(int $confirmations): void
    {
        $this->confirmations = $confirmations;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getValueIn(): Money
    {
        return $this->valueIn;
    }

    public function setValueIn(Money $valueIn): void
    {
        $this->valueIn = $valueIn;
    }

    public function getValueOut(): Money
    {
        return $this->valueOut;
    }

    public function setValueOut(Money $valueOut): void
    {
        $this->valueOut = $valueOut;
    }
    
    public function getFee(): Money
    {
        return $this->fee;
    }

    public function setFee(Money $fee): void
    {
        $this->fee = $fee;
    }

    public function getInputs(): array
    {
        return $this->inputs;
    }

    public function setInputs(array $inputs): void
    {
        $this->inputs = $inputs;
    }

    public function addInput(Input $input): void
    {
        $this->inputs[] = $input;
    }

    public function getOutputs(): array
    {
        return $this->outputs;
    }

    public function setOutputs(array $outputs): void
    {
        $this->outputs = $outputs;
    }

    public function addOutput(Output $output): void
    {
        $this->outputs[] = $output;
    }
}
