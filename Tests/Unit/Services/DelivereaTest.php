<?php

/*
 * This file is part of the DelivereaBundle package.
 *
 * (c) Issel Guberna <issel.guberna@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octante\DelivereaBundle\Tests\Unit\Services;

use Octante\DelivereaBundle\Services\Deliverea;

/**
 * Class DelivereaTest
 * @package Octante\DelivereaBundle\Services
 */
class DelivereaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var
     */
    private $delivereaMock;

    public function setUp()
    {
        $this->delivereaMock = $this
            ->getMockBuilder('Octante\DelivereaBundle\LIbrary\DelivereaWrapper')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * when: newShipment is called
     * should: call DelivereaWrapper newShipment method
     */
    public function testNewShipment()
    {
        $shipmentWrapperMock = $this
            ->getMockBuilder('Octante\DelivereaBundle\Library\ShipmentWrapper')
            ->disableOriginalConstructor()
            ->getMock();

        $addressWrapperMock = $this
            ->getMockBuilder('Octante\DelivereaBundle\Library\AddressWrapper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->delivereaMock
            ->expects($this->once())
            ->method('newShipment');

        $sut = new Deliverea($this->delivereaMock);

        $sut->newShipment($shipmentWrapperMock, 'from address', $addressWrapperMock);
    }

    /**
     * when: newCollection is called
     * should: call DelivereaWrapper newCollection method
     */
    public function testNewCollection()
    {
        $collectionWrapperMock = $this
            ->getMockBuilder('Octante\DelivereaBundle\Library\CollectionWrapper')
            ->disableOriginalConstructor()
            ->getMock();

        $addressWrapperMock = $this
            ->getMockBuilder('Octante\DelivereaBundle\Library\AddressWrapper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->delivereaMock
            ->expects($this->once())
            ->method('newCollection');

        $sut = new Deliverea($this->delivereaMock);

        $sut->newCollection($collectionWrapperMock, 'from address', $addressWrapperMock);
    }

    /**
     * when: getShipmentTracking is called
     * should: call DelivereaWrapper getShipmentTracking method
     */
    public function testGetShipmentTracking()
    {
        $this->delivereaMock
            ->expects($this->once())
            ->method('getShipmentTracking');

        $sut = new Deliverea($this->delivereaMock);

        $sut->getShipmentTracking('dlvr reference');
    }

    /**
     * when: getShipment is called
     * should: call DelivereaWrapper getShipment method
     */
    public function testGetShipment()
    {
        $this->delivereaMock
            ->expects($this->once())
            ->method('getShipment');

        $sut = new Deliverea($this->delivereaMock);

        $sut->getShipment('dlvr reference');
    }

    /**
     * when: getShipmentLabel is called
     * should: call DelivereaWrapper getShipmentLabel method
     */
    public function testGetShipmentLabel()
    {
        $this->delivereaMock
            ->expects($this->once())
            ->method('getShipmentLabel');

        $sut = new Deliverea($this->delivereaMock);

        $sut->getShipmentLabel('dlvr reference');
    }

    /**
     * when: getShipments is called
     * should: call DelivereaWrapper getShipments method
     */
    public function testGetShipments()
    {
        $this->delivereaMock
            ->expects($this->once())
            ->method('getShipments');

        $sut = new Deliverea($this->delivereaMock);

        $sut->getShipments(array('filters'));
    }

    /**
     * when: getAddresses is called
     * should: call DelivereaWrapper getAddresses method
     */
    public function testGetAddresses()
    {
        $this->delivereaMock
            ->expects($this->once())
            ->method('getAddresses');

        $sut = new Deliverea($this->delivereaMock);

        $sut->getAddresses();
    }
}
