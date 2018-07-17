<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 05:01
 */

namespace App\Soap\Request\Transaction;


class InformationSoapRequest
{
    public $auth;

    public $transactionID;

    /**
     * InformationSoapRequest constructor.
     * @param $auth
     * @param $transactionID
     */
    public function __construct($auth, $transactionID)
    {
        $this->auth = $auth;
        $this->transactionID = $transactionID;
    }


}