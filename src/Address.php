<?php

namespace Prospect;

class Address
{
    protected $address;
    protected $balance;
    protected $totalReceived;
    protected $totalSent;
    protected $unconfirmedBalance;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function setBalance(int $balance): void
    {
        $this->balance = $balance;
    }

    public function getTotalReceived(): int
    {
        return $this->totalReceived;
    }

    public function setTotalReceived(int $totalReceived): void
    {
        $this->totalReceived = $totalReceived;
    }

    public function getTotalSent(): int
    {
        return $this->totalSent;
    }

    public function setTotalSent(int $totalSent): void
    {
        $this->totalSent = $totalSent;
    }

    public function getUnconfirmedBalance(): int
    {
        return $this->unconfirmedBalance;
    }

    public function setUnconfirmedBalance(int $unconfirmedBalance): void
    {
        $this->unconfirmedBalance = $unconfirmedBalance;
    }
}
