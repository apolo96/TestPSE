<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 03:08
 */

namespace App\Repositories;

use App\Transaction;
use App\TransactionInformation;

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

    public function saveInformation($TransactionInfo)
    {
        $newTranInfo = new TransactionInformation();
        $newTranInfo->transaction_id= $TransactionInfo->transactionID;
        $newTranInfo->session_id= $TransactionInfo->sessionID;
        $newTranInfo->reference= $TransactionInfo->reference;
        $newTranInfo->request_date= $TransactionInfo->requestDate;
        $newTranInfo->bank_process_date= $TransactionInfo->bankProcessDate;
        $newTranInfo->on_test= $TransactionInfo->onTest;
        $newTranInfo->return_code= $TransactionInfo->returnCode;
        $newTranInfo->trazability_code= $TransactionInfo->trazabilityCode;
        $newTranInfo->transaction_cycle= $TransactionInfo->transactionCycle;
        $newTranInfo->transaction_state= $TransactionInfo->transactionState;
        $newTranInfo->response_code= $TransactionInfo->responseCode;
        $newTranInfo->response_reason_code= $TransactionInfo->responseReasonCode;
        $newTranInfo->response_reason_text= $TransactionInfo->responseReasonText;
        $newTranInfo->save();
    }
}