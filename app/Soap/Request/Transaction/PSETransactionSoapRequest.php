<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 11:28
 */
namespace App\Soap\Request\Transaction;

use App\Client;

class PSETransactionSoapRequest
{
    public $bankCode;
    public $bankInterface;
    public $returnURL;
    public $reference;
    public $description;
    public $language;
    public $currency;
    public $totalAmount;
    public $taxAmount;
    public $devolutionBase;
    public $tipAmount;
    public $payer;
    public $buyer;
    public $shipping;
    public $ipAddress;
    public $userAgent;
    public $additionalData = [];

    /**
     * PSETransactionSoapRequest constructor.
     * @param $bankCode
     * @param $bankInterface
     * @param $payer
     * @param $ipAddress
     * @param $userAgent
     */
    public function __construct($bankCode, $bankInterface, $payer, $ipAddress, $userAgent)
    {
        $this->bankCode = $bankCode;
        $this->bankInterface = $bankInterface;
        $this->payer = $payer;
        $this->ipAddress = $ipAddress;
        $this->userAgent = $userAgent;

        $this->buyer = $payer;
        $this->shipping = $payer;
        $this->returnURL = "http://placetopay.loc/transactions/information";
        $this->reference = "#345FFA";
        $this->description = "Test payment";
        $this->language = "ES";
        $this->currency = "COP";
        $this->totalAmount = 200000;
        $this->taxAmount = 32000;
        $this->devolutionBase = 32000;
        $this->tipAmount = 3000;
    }
    /**
     * @return mixed
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @param mixed $bankCode
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * @return mixed
     */
    public function getBankInterface()
    {
        return $this->bankInterface;
    }

    /**
     * @param mixed $bankInterface
     */
    public function setBankInterface($bankInterface)
    {
        $this->bankInterface = $bankInterface;
    }

    /**
     * @return string
     */
    public function getReturnURL()
    {
        return $this->returnURL;
    }

    /**
     * @param string $returnURL
     */
    public function setReturnURL($returnURL)
    {
        $this->returnURL = $returnURL;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return int
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @param int $taxAmount
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * @return int
     */
    public function getDevolutionBase()
    {
        return $this->devolutionBase;
    }

    /**
     * @param int $devolutionBase
     */
    public function setDevolutionBase($devolutionBase)
    {
        $this->devolutionBase = $devolutionBase;
    }

    /**
     * @return int
     */
    public function getTipAmount()
    {
        return $this->tipAmount;
    }

    /**
     * @param int $tipAmount
     */
    public function setTipAmount($tipAmount)
    {
        $this->tipAmount = $tipAmount;
    }

    /**
     * @return mixed
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param mixed $payer
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
    }

    /**
     * @return mixed
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param mixed $buyer
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
    }

    /**
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param mixed $shipping
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param mixed $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param mixed $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return array
     */
    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    /**
     * @param array $additionalData
     */
    public function setAdditionalData($additionalData)
    {
        $this->additionalData = $additionalData;
    }

}
