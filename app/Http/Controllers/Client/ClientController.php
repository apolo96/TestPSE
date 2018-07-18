<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Http\Requests\ClientRequest;
use App\Repositories\ClientRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    protected $clientRepository;

    /**
     * ClientController constructor.
     */
    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function register(ClientRequest $request)
    {
        $client = $this->clientRepository->save($request);
        return redirect('banks')->with('clientId',$client->id);
    }
}
