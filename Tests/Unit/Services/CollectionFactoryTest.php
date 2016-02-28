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
 * Class CollectionFactoryTest
 * @package Octante\DelivereaBundle\Services
 */
class CollectionFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * when: create method is called
     * should: return an CollectionWrapper instance
     */
    public function testCreate()
    {
        $sut = new CollectionFactory();

        $collectionWrapper = $sut->create(
            substr(md5(strtotime('now')), 0, 14),
            new \DateTime(),
            'ovirtual',
            'ovirtual-servicio-19',
            '11:00',
            '16:00'
        );

        $this->assertInstanceOf(
            'Octante\DelivereaBundle\Library\CollectionWrapper',
            $collectionWrapper
        );
    }
}
