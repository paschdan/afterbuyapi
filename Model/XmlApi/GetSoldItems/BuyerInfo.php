<?php

namespace Wk\AfterbuyApi\Model\XmlApi\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Wk\AfterbuyApi\Model\XmlApi\AbstractModel;

/**
 * Class BuyerInfo
 */
class BuyerInfo extends AbstractModel
{
    /**
     * @Serializer\Type("Wk\AfterbuyApi\Model\XmlApi\GetSoldItems\BillingAddress")
     * @var BillingAddress
     */
    private $billingAddress;

    /**
     * @Serializer\Type("Wk\AfterbuyApi\Model\XmlApi\GetSoldItems\ShippingAddress")
     * @var ShippingAddress
     */
    private $shippingAddress;

    /**
     * @return BillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }
}