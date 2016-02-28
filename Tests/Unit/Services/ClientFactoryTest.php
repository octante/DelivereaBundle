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
 * Class DelivereaFactoryTest
 * @package Octante\DelivereaBundle\Services
 */
class DelivereaFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * when: create method is called with sandbox
     * should: return an ClientWrapper instance
     */
    public function testCreateWithSandbox()
    {
        $sut = new DelivereaFactory();

        $delivereaWrapper = $sut->create(
            'api user',
            'api secret',
            true
        );

        $this->assertInstanceOf(
            'Octante\DelivereaBundle\Library\DelivereaWrapper',
            $delivereaWrapper
        );

        $this->assertTrue($delivereaWrapper->getSandbox());
    }


    /**
     * when: create method is called without sandbox
     * should: return an ClientWrapper instance
     */
    public function testCreateWithoutSandbox()
    {
        $sut = new DelivereaFactory();

        $delivereaWrapper = $sut->create(
            'api user',
            'api secret',
            false
        );

        $this->assertInstanceOf(
            'Octante\DelivereaBundle\Library\DelivereaWrapper',
            $delivereaWrapper
        );

        $this->assertFalse($delivereaWrapper->getSandbox());
    }
}
