<?php

namespace Prospect\Backends\Insight;

use Money\Money;
use Prospect\Input;
use Prospect\Output;
use Money\Currency;
use Prospect\Address;

class AddressMapper
{
    public function fromResponse($data, Currency $currency): ?Address
    {
        $address = new Address;

        $address->setAddress($data->addrStr);
        $address->setBalance(new Money(
            $data->balanceSat, $currency
        ));
        $address->setTotalReceived(new Money(
            $data->totalReceivedSat, $currency
        ));
        $address->setTotalSent(new Money(
            $data->totalSentSat, $currency
        ));
        $address->setUnconfirmedBalance(new Money(
            $data->unconfirmedBalanceSat, $currency
        ));

        return $address;
    }
}
