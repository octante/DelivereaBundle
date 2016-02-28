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
 * Class AddressFactoryTest
 * @package Octante\DelivereaBundle\Services
 */
class AddressFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * when: create method is called
     * should: return an AddressWrapper instance
     */
    public function testCreate()
    {
        $sut = new AddressFactory();

        $addressWrapper = $sut->create(
            'full name',
            'street type',
            'street name',
            'street number',
            'floor',
            'city',
            'zip code',
            'country code',
            'phone'
        );

        $this->assertInstanceOf(
            'Octante\DelivereaBundle\Library\AddressWrapper',
            $addressWrapper
        );
    }
}
