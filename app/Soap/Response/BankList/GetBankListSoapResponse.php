<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 16/07/2018
 * Time: 05:48
 */

namespace App\Soap\Response\BankList;


class GetBankListSoapResponse
{
    public $getBankListResponse;

    /**
     * @return mixed
     */
    public function getGetBankListResponse()
    {
        return $this->getBankListResponse;
    }

    /**
     * getBankListResponse constructor.
     * @param $getBankListResponse
     */
    public function __construct($getBankListResponse)
    {
        $this->getBankListResponse = $getBankListResponse;
    }



}