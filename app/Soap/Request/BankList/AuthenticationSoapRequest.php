<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 16/07/2018
 * Time: 08:12
 */

namespace App\Soap\Request\BankList;


class AuthenticationSoapRequest
{
    public $login;

    public $tranKey;

    public $seed;

    public $additional = [];

    public function __construct()
    {
        $this->login = '6dd490faf9cb87a9862245da41170ff2';
        $this->seed = date('c');
        $this->tranKey = sha1($this->seed.'024h1IlD', false);;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getTranKey()
    {
        return $this->tranKey;
    }

    /**
     * @param string $tranKey
     */
    public function setTranKey($tranKey)
    {
        $this->tranKey = $tranKey;
    }

    /**
     * @return string
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * @param string $seed
     */
    public function setSeed($seed)
    {
        $this->seed = $seed;
    }

    /**
     * @return array
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * @param array $additional
     */
    public function setAdditional($additional)
    {
        $this->additional = $additional;
    }
}