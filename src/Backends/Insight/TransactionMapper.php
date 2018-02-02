<?php

namespace Prospect\Backends\Insight;

use Money\Money;
use Prospect\Input;
use Prospect\Output;
use Money\Currency;
use Prospect\Transaction;

class TransactionMapper
{
    public function fromResponse($data, Currency $currency): ?Transaction
    {
        $transaction = new Transaction;

        $transaction->setId($data->txid);
        $transaction->setBlockHeight($data->blockheight);
        $transaction->setConfirmations($data->confirmations);

        // since unconfirmed transactions have not been placed in a block yet...
        if ($transaction->getConfirmations() !== 0)
            $transaction->setBlockHash($data->blockhash);

        $transaction->setSize($data->size);

        $valueIn  = new Money(to_satoshi($data->valueIn), $currency);
        $valueOut = new Money(to_satoshi($data->valueOut), $currency);
        $fee      = new Money(to_satoshi($data->fees), $currency);
        $transaction->setValueIn($valueIn);
        $transaction->setValueOut($valueOut);
        $transaction->setFee($fee);

        $transaction->setInputs(
            $this->mapInputs($data->vin, $currency)
        );

        $transaction->setOutputs(
            $this->mapOutputs($data->vout, $currency)
        );

        return $transaction;
    }

    protected function translateType($type): string
    {
        switch ($type) {
            case Output::TYPE_PUBKEYHASH:
                $output->setType(Output::TYPE_PUBKEYHASH);
                break;
            default:
                throw new Exception("could not determine transaction type for type [$type]!");
                break;
        }
    }

    protected function mapInputs($inputs, $currency): array
    {
        return array_map(function ($item) use ($currency) {
            $input = new Input;
            $input->setTransaction($item->txid);
            $input->setValue(
                new Money($item->valueSat, $currency)
            );
            return $input;
        }, $inputs);
    }

    protected function mapOutputs($outputs, $currency): array
    {
        return array_map(function ($item) use ($currency) {
            $type = $item->scriptPubKey->type;

            $output = new Output;
            $output->setType($type);
            $output->setValue(
                new Money(to_satoshi($item->value), $currency)
            );
            return $output;
        },$outputs);
    }
}
