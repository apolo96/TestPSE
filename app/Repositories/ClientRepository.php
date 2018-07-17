<?php

namespace App\Repositories;

use App\Client;
use App\Soap\Request\Transaction\PersonSoapRequest;

/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 03:01
 */
class ClientRepository
{
    public function save($attributes)
    {

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
