<?php

namespace App\Repositories;

use App\Client;
use App\Soap\Request\Transaction\PersonSoapRequest;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 03:01
 */
class ClientRepository
{
    public function save(Request $request)
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
        return $client;
    }

    public function get($id)
    {
        return Client::find($id);
    }

    public function convertToPerson($id)
    {
        $client = Client::find($id);
        return new PersonSoapRequest(
            $client->document,
            $client->document_type,
            $client->first_name,
            $client->last_name,
            $client->company,
            $client->emailAddress,
            $client->address,
            $client->city,
            $client->province,
            $client->country,
            $client->phone,
            $client->mobile
        );
    }
}
