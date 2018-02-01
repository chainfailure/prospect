<?php

namespace Prospect;

use Money\Money;

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

    public function getBalance(): Money
    {
        return $this->balance;
    }

    public function setBalance(Money $balance): void
    {
        $this->balance = $balance;
    }

    public function getTotalReceived(): Money
    {
        return $this->totalReceived;
    }

    public function setTotalReceived(Money $totalReceived): void
    {
        $this->totalReceived = $totalReceived;
    }

    public function getTotalSent(): Money
    {
        return $this->totalSent;
    }

    public function setTotalSent(Money $totalSent): void
    {
        $this->totalSent = $totalSent;
    }

    public function getUnconfirmedBalance(): Money
    {
        return $this->unconfirmedBalance;
    }

    public function setUnconfirmedBalance(Money $unconfirmedBalance): void
    {
        $this->unconfirmedBalance = $unconfirmedBalance;
    }
}
