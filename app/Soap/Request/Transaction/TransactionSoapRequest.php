<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 01:43
 */

namespace App\Soap\Request\Transaction;


use App\Soap\Request\Auth\AuthenticationSoapRequest;

class TransactionSoapRequest
{
    public $transaction;

    public $auth;

    /**
     * TransactionSoapRequest constructor.
     * @param $transaction
     * @param $auth
     */
    public function __construct(
        PSETransactionSoapRequest $transaction,
        AuthenticationSoapRequest $auth
    )
    {
        $this->transaction = $transaction;
        $this->auth = $auth;
    }

    /**
     * @return PSETransactionSoapRequest
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param PSETransactionSoapRequest $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

}