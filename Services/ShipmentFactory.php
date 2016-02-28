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

use Octante\DelivereaBundle\Library\ShipmentWrapper;

/**
 * Class ShipmentFactory
 * @package Octante\DelivereaBundle\Services
 */
class ShipmentFactory
{
    /**
     * @param string $parcelNumber
     * @param string $shippingClientRef
     * @param \DateTime $shippingDate
     * @param string $serviceType
     * @param string $carrierCode
     * @param string $serviceCode
     *
     * @return ShipmentWrapper
     */
    public static function create(
        $parcelNumber,
        $shippingClientRef,
        \DateTime $shippingDate,
        $serviceType,
        $carrierCode,
        $serviceCode
    ){
        return new ShipmentWrapper(
            $parcelNumber,
            $shippingClientRef,
            $shippingDate,
            $serviceType,
            $carrierCode,
            $serviceCode
        );
    }
}