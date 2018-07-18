<?php

namespace App\Http\Controllers\Transaction;

use App\Proxy\SoapProxy;
use App\Repositories\ClientRepository;
use App\Repositories\TransactionRepository;
use App\Soap\Request\Auth\AuthenticationSoapRequest;
use App\Soap\Request\Transaction\InformationSoapRequest;
use App\Soap\Request\Transaction\PSETransactionSoapRequest;
use App\Soap\Request\Transaction\TransactionSoapRequest;
use App\Soap\Response\Transaction\InformationSoapResponse;
use App\Soap\Response\Transaction\PSETransactionSoapResponse;
use App\Transaction;
use App\TransactionInformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * @var SoapProxy
     */
    protected $soapProxy;

    protected $clientRepository;

    protected $transactionRepository;

    /**
     * TransactionController constructor.
     * @param $soapProxy
     */
    public function __construct(
        SoapProxy $soapProxy,
        ClientRepository $clientRepository,
        TransactionRepository $transactionRepository
    )
    {
        $this->soapProxy = $soapProxy;
        $this->clientRepository = $clientRepository;
        $this->transactionRepository = $transactionRepository;
    }

    public function create(Request $request)
    {
        $ipAddress = $request->ip();
        $userAgent = $request->header('User-Agent');
        $bankCode = $request->bankCode;
        $bankInterface = $request->bankInterface;
        $payer = $this->clientRepository->convertToPerson($request->clientId);

        $params = [
            new TransactionSoapRequest(
                new PSETransactionSoapRequest
                (
                    $bankCode,
                    $bankInterface,
                    $payer,
                    $ipAddress,
                    $userAgent
                ),
                new AuthenticationSoapRequest()
            )
        ];
        $response = $this->soapProxy->soapProxy(
            [TransactionSoapRequest::class, PSETransactionSoapResponse::class],
            'createTransaction',
            $params
        );

        if ($response->createTransactionResult->returnCode != 'SUCCESS')return back()->withInput();

        $this->transactionRepository->save($response->createTransactionResult);
        session(['tranId'=>$response->createTransactionResult->transactionID]);
        return redirect($response->createTransactionResult->bankURL);
    }

    public function information()
    {
        $transactionID = session('tranId');
        $params = [
            new InformationSoapRequest(new AuthenticationSoapRequest(),$transactionID)
        ];
        $response = $this->soapProxy->soapProxy(
            [InformationSoapRequest::class, InformationSoapResponse::class],
            'getTransactionInformation',
            $params
        );
        $transactionInformation = $response->getTransactionInformationResult;
        $this->transactionRepository->saveInformation($transactionInformation);

        return view('transaction-information',compact('transactionInformation'));
    }

    public function transactionList()
    {
        $transactions = Transaction::all();
        return view('transaction-list',compact('transactions'));
    }

    public function infoTransactionList()
    {
        $payIntents = TransactionInformation::all();
        return view('payment-intent',compact('payIntents'));
    }
}
