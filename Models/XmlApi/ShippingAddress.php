<?php

namespace Wk\AfterbuyApi\Models\XmlApi;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ShippingAddress
 *
 * @Serializer\XmlRoot("ShippingAddress")
 *
 * @package Wk\AfterbuyApi\Models\XmlApi
 */
class ShippingAddress
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    private $useShippingAddress;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $firstName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $lastName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $company;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $street;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $postalCode;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $city;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $country;

    /**
     * @return int
     */
    public function getUseShippingAddress()
    {
        return $this->useShippingAddress;
    }

    /**
     * @param int $useShippingAddress
     *
     * @return $this
     */
    public function setUseShippingAddress($useShippingAddress)
    {
        $this->useShippingAddress = $useShippingAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}