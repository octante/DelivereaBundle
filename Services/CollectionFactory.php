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

use Octante\DelivereaBundle\Library\CollectionWrapper;

/**
 * Class CollectionFactory
 * @package Octante\DelivereaBundle\Services
 */
class CollectionFactory
{
    /**
     * Returns an instance of CollectionWrapper.
     *
     * @param string $collectionClientRef
     * @param \DateTime $collectionDate
     * @param string $carrierCode
     * @param string $serviceCode
     * @param string $hourStart1
     * @param string $hourEnd1
     *
     * @return CollectionWrapper
     */
    public static function create(
        $collectionClientRef,
        \DateTime $collectionDate,
        $carrierCode,
        $serviceCode,
        $hourStart1,
        $hourEnd1
    ){
        return new CollectionWrapper(
            $collectionClientRef,
            $collectionDate,
            $carrierCode,
            $serviceCode,
            $hourStart1,
            $hourEnd1
        );
    }
}