<?php

namespace App\Http\Controllers\Client;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function register(Request $request)
    {
        $client = new Client();
        $client->document = $request->document;
        $client->document_type = $request->documentType;
        $client->first_name = $request->firstName;
        $client->last_name = $request->lastName;
        $client->company = $request->company;
        $client->emailAddress = $request->emailAddress;
        $client->address = $request->address;
        $client->city = $request->city;
        $client->province = $request->province;
        $client->country = $request->country;
        $client->phone = $request->phone;
        $client->mobile = $request->mobile;
        $client->save();
        return redirect('banks')->with('clientId',$client->id);
    }
}
