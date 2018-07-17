<?php
/**
 * Created by PhpStorm.
 * User: apolo96
 * Date: 17/07/2018
 * Time: 11:33
 */

namespace App\Soap\Request\Transaction;

class PersonSoapRequest
{
    public $document;
    public $documentType;
    public $firstName;
    public $lastName;
    public $company;
    public $emailAddress;
    public $address;

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @return mixed
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    public $city;
    public $province;
    public $country;
    public $phone;
    public $mobile;

    /**
     * PersonSoapRequest constructor.
     * @param $document
     * @param $documentType
     * @param $firstName
     * @param $lastName
     * @param $company
     * @param $emailAddress
     * @param $address
     * @param $city
     * @param $province
     * @param $country
     * @param $phone
     * @param $mobile
     */
    public function __construct($document, $documentType, $firstName, $lastName, $company, $emailAddress, $address, $city, $province, $country, $phone, $mobile)
    {
        $this->document = $document;
        $this->documentType = $documentType;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->company = $company;
        $this->emailAddress = $emailAddress;
        $this->address = $address;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->phone = $phone;
        $this->mobile = $mobile;
    }
}
