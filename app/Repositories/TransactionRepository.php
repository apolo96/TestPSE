<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 03:08
 */

namespace App\Repositories;

use App\Transaction;

class TransactionRepository
{
    public function save($transaction)
    {
        $newTransaction = new Transaction();
        $newTransaction->return_code = $transaction->returnCode;
        $newTransaction->bank_url = $transaction->bankURL;
        $newTransaction->trazability_code = $transaction->trazabilityCode;
        $newTransaction->transaction_cycle = $transaction->transactionCycle;
        $newTransaction->transaction_id = $transaction->transactionID;
        $newTransaction->session_id = $transaction->sessionID;
        $newTransaction->bank_currency = $transaction->bankCurrency;
        $newTransaction->bank_factor = $transaction->bankFactor;
        $newTransaction->response_code = $transaction->responseCode;
        $newTransaction->response_reason_code = $transaction->responseReasonCode;
        $newTransaction->response_reason_text = $transaction->responseReasonText;
        $newTransaction->save();
    }
}