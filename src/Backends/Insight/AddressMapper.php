<?php

namespace Prospect\Backends\Insight;

use Prospect\Input;
use Prospect\Output;
use Prospect\Address;

class AddressMapper
{
    public function fromResponse($data): ?Address
    {
        $address = new Address;

        $address->setAddress($data->addrStr);
        $address->setBalance($data->balanceSat);
        $address->setTotalReceived($data->totalReceivedSat);
        $address->setTotalSent($data->totalSentSat);
        $address->setUnconfirmedBalance($data->unconfirmedBalanceSat);

        return $address;
    }
}
