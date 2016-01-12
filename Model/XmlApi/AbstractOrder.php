<?php

namespace Wk\AfterbuyApi\Model\XmlApi;

use JMS\Serializer\Annotation as Serializer;
use \DateTime;

/**
 * Class AbstractOrder
 */
abstract class AbstractOrder extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("OrderID")
     * @var int
     */
    protected $orderId;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $additionalInfo;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $userComment;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    protected $invoiceMemo;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    protected $invoiceNumber;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @var DateTime
     */
    protected $feedbackDate;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @return string
     */
    public function getUserComment()
    {
        return $this->userComment;
    }

    /**
     * @return string
     */
    public function getInvoiceMemo()
    {
        return $this->invoiceMemo;
    }

    /**
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @return DateTime
     */
    public function getFeedbackDate()
    {
        return $this->feedbackDate;
    }
}