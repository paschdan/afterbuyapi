<?php

namespace Wk\AfterbuyApi\Tests\Models\XmlApi;

use Wk\AfterbuyApi\Models\XmlApi\SoldItemsList;

/**
 * Class SoldItemsListTest
 */
class SoldItemsListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SoldItemsList
     */
    private $soldItemsList;

    /**
     * initialize global variable
     */
    public function setUp()
    {
        $this->soldItemsList = new SoldItemsList();
    }

    /**
     * @return array
     */
    public function dataSetterAndGetter()
    {
        return array(
            array('setDefaultFilters', array(), 'getDefaultFilters', array()),
            array('setDefaultFilters', array('abc'), 'getDefaultFilters', array('abc')),
            array('setDefaultFilters', array('abc', 'def'), 'getDefaultFilters', array('abc', 'def')),
            array('setUserDefinedFlag', null, 'getUserDefinedFlag', 0),
            array('setUserDefinedFlag', 123456789, 'getUserDefinedFlag', 123456789),
            array('setUserDefinedFlag', '123456789', 'getUserDefinedFlag', 123456789),
            array('setUserDefinedFlag', 'abcdef', 'getUserDefinedFlag', 0),
            array('setMustHaveFeedbackDate', false, 'getMustHaveFeedbackDate', false),
            array('setMustHaveFeedbackDate', true, 'getMustHaveFeedbackDate', true)
        );
    }

    /**
     * @param string $setter
     * @param mixed  $setterValue
     * @param string $getter
     * @param mixed  $expectedGetterValue
     *
     * @dataProvider dataSetterAndGetter
     */
    public function testSetterAndGetter($setter, $setterValue, $getter, $expectedGetterValue)
    {
        $soldItemsList = $this->soldItemsList->{$setter}($setterValue);

        $this->assertInstanceOf('Wk\AfterbuyApi\Models\XmlApi\SoldItemsList', $soldItemsList);

        $this->assertSame($expectedGetterValue, $this->soldItemsList->{$getter}());
    }

    /**
     * test if getData returns the correct SimpleXMLElement object and with correct attributes
     */
    public function testGetData()
    {
        $credentials = array(
            'partner_id' => '1',
            'partner_pass' => '1',
            'user_id' => '1',
            'user_pass' => '1'
        );

        $result = $this->soldItemsList
            ->setUserDefinedFlag(17733)
            ->setMustHaveFeedbackDate(true);

        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/../Data/GetSoldItems.xml', $result->getData($credentials));
    }
}