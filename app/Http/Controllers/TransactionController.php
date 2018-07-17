<?php

namespace App\Http\Controllers;

use App\Soap\Request\BankList\AuthenticationSoapRequest;
use App\Soap\Request\BankList\AuthSoapRequest;
use App\Proxy\SoapProxy;
use App\Soap\Response\BankList\GetBankListSoapResponse;
use Illuminate\Support\Facades\Cache;

class TransactionController extends Controller
{
    /**
     * @var soapProxy
     */
    protected $soapProxy;

    /**
     * SoapController constructor.
     *
     * @param soapProxy $soapProxy
     */
    public function __construct(soapProxy $soapProxy)
    {
        $this->soapProxy = $soapProxy;
    }

    public function index()
    {
        $expiresAt = now()->addDay(1);
        $message = "";
        try
        {
            $banks = Cache::remember('bankList', $expiresAt, function () {
                $params = [new AuthSoapRequest(new AuthenticationSoapRequest())];
                $response = $this->soapProxy->soapProxy(
                    [AuthSoapRequest::class, GetBankListSoapResponse::class],
                    'getBankList',
                    $params
                );
                return $response->getBankListResult->item;
            });
        }
        catch (\Exception $exception){
            $banks = [];
            $message = "No se pudo obtener la lista de Entidades Financieras, por favor intente más tarde" ;
        }
        return view('payment',compact('banks','message'));
    }
}
