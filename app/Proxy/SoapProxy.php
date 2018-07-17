<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 16/07/2018
 * Time: 07:07
 */
namespace App\Proxy;

use App\Soap\Request\BankList\Auth;
use App\Soap\Request\BankList\AuthenticationSoapRequest;
use App\Soap\Response\BankList\getBankListResponse;
use Artisaninweb\SoapWrapper\SoapWrapper;

class SoapProxy
{
    protected $wsdl = 'https://test.placetopay.com/soap/pse/?wsdl';

    protected $soapWrapper;

    protected $nameService = "pse";

    /**
     * SoapProxy constructor.
     * @param $soapWrapper
     */
    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
    }

    public function soapProxy($classMap,$method,$params)
    {
        $this->soapWrapper->add($this->nameService, function ($service) use ($classMap) {
            $service
                ->wsdl($this->wsdl)
                ->trace(true)
                ->classmap($classMap);
        });

        return $this->soapWrapper->call(
            $this->nameService.'.'.$method,
            $params
        );
    }
}