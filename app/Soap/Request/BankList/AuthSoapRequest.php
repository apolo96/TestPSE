<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 16/07/2018
 * Time: 05:44
 */

namespace App\Soap\Request\BankList;

class AuthSoapRequest
{
    public $auth;

    /**
     * getBankList constructor.
     * @param $auth
     */
    public function __construct(AuthenticationSoapRequest $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @return mixed
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @param mixed $auth
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;
    }

}