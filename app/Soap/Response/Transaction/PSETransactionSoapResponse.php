<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 11:28
 */

namespace App\Soap\Response\Transaction;

class PSETransactionSoapResponse
{
    public $transactionID;
    public $sessionID;
    public $returnCode;
    public $trazabilityCode;
    public $transactionCycle;
    public $bankCurrency;
    public $bankFactor;
    public $bankURL;
    public $responseCode;
    public $responseReasonCode;
    public $responseReasonText;

}