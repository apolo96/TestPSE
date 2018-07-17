<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 05:04
 */

namespace App\Soap\Response\Transaction;


class InformationSoapResponse
{
    public $transactionID;
    public $sessionID;
    public $reference;
    public $requestDate;
    public $bankProcessDate;
    public $onTest;
    public $returnCode;
    public $trazabilityCode;
    public $transactionCycle;
    public $transactionState;
    public $responseCode;
    public $responseReasonCode;
    public $responseReasonText;
}