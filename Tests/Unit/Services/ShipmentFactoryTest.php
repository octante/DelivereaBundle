<?php

/*
 * This file is part of the DelivereaBundle package.
 *
 * (c) Issel Guberna <issel.guberna@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octante\DelivereaBundle\Services;

/**
 * Class ShipmentFactoryTest
 * @package Octante\DelivereaBundle\Services
 */
class ShipmentFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * when: create method is called
     * should: return an ShipmentWrapper instance
     */
    public function testCreate()
    {
        $sut = new ShipmentFactory();

        $shipmentWrapper = $sut->create(
            1,
            substr(md5(strtotime('now')), 0, 14),
            new \DateTime(),
            'custom',
            'ovirtual',
            'ovirtual-servicio-19'
        );

        $this->assertInstanceOf(
            'Octante\DelivereaBundle\Library\ShipmentWrapper',
            $shipmentWrapper
        );
    }
}
