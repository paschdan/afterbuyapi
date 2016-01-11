<?php

namespace Wk\AfterbuyApi\Models\XmlApi\Filter;

use JMS\Serializer\Annotation as Serializer;
use Wk\AfterbuyApi\Models\XmlApi\AbstractModel;

/**
 * Class AbstractFilter
 *
 * @package Wk\AfterbuyApi\Models\XmlApi
 */
abstract class AbstractFilter extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $filterName;

    /**
     * @Serializer\Type("array<string,string>")
     * @Serializer\XmlKeyValuePairs()
     * @var array
     */
    protected $filterValues;

    /**
     * @param string $filterName
     */
    public function __construct($filterName)
    {
        $this->filterName = $filterName;
    }

    /**
     * @return string
     */
    public function getFilterName()
    {
        return $this->filterName;
    }

    /**
     * @param string $filterName
     *
     * @return $this
     */
    public function setFilterName($filterName)
    {
        $this->filterName = $filterName;

        return $this;
    }
}