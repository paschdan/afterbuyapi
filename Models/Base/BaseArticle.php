<?php

namespace Wk\AfterbuyApi\Models\Base;

/**
 * Class BaseArticle
 */
class BaseArticle
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var integer
     */
    protected $weight;

    /**
     * @var string
     */
    protected $alternativeId1;

    /**
     * @var string
     */
    protected $alternativeId2;

    /**
     * @var float
     */
    protected $tax;

    /**
     * @return string
     */
    public function getAlternativeId2()
    {
        return $this->alternativeId2;
    }

    /**
     * @param string $alternativeId2
     */
    public function setAlternativeId2($alternativeId2)
    {
        $this->alternativeId2 = $alternativeId2;
    }

    /**
     * @return string
     */
    public function getAlternativeId1()
    {
        return $this->alternativeId1;
    }

    /**
     * @param string $alternativeId1
     */
    public function setAlternativeId1($alternativeId1)
    {
        $this->alternativeId1 = $alternativeId1;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}