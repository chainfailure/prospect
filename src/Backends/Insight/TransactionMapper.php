<?php

namespace Prospect\Backends\Insight;

use Prospect\Input;
use Prospect\Output;
use Prospect\Transaction;

class TransactionMapper
{
    public function fromResponse($data): ?Transaction
    {
        $transaction = new Transaction;

        $transaction->setId($data->txid);
        $transaction->setBlockHeight($data->blockheight);
        $transaction->setConfirmations($data->confirmations);

        // since unconfirmed transactions have not been placed in a block yet...
        if ($transaction->getConfirmations() !== 0)
            $transaction->setBlockHash($data->blockhash);

        $transaction->setSize($data->size);

        $transaction->setValueIn(to_satoshi($data->valueIn));
        $transaction->setValueOut(to_satoshi($data->valueOut));
        $transaction->setFee(to_satoshi($data->fees));

        $transaction->setInputs(
            $this->mapInputs($data->vin)
        );

        $transaction->setOutputs(
            $this->mapOutputs($data->vout)
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

    protected function mapInputs($inputs): array
    {
        return array_map(function ($item) {
            $input = new Input;
            $input->setTransaction($item->txid);
            $input->setValue($item->valueSat);
            return $input;
        }, $inputs);
    }

    protected function mapOutputs($outputs): array
    {
        return array_map(function ($item) {
            $type = $item->scriptPubKey->type;

            $output = new Output;
            $output->setType($type);
            $output->setValue(to_satoshi($item->value));
            return $output;
        },$outputs);
    }
}
