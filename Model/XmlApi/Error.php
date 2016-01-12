<?php

namespace Wk\AfterbuyApi\Model\XmlApi;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Error
 */
class Error extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    private $errorCode;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $errorDescription;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $errorLongDescription;

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * @return string
     */
    public function getErrorLongDescription()
    {
        return $this->errorLongDescription;
    }
}