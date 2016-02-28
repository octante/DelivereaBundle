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

use Octante\DelivereaBundle\Library\AddressWrapper;

/**
 * Class AddressFactory
 * @package Octante\DelivereaBundle\Services
 */
class AddressFactory
{
    /**
     * Returns an instance of AddressWrapper.
     *
     * @param string $fullName
     * @param string $streetTYpe
     * @param string $streetName
     * @param string $streetNumber
     * @param string $floor
     * @param string $city
     * @param string $zipCode
     * @param string $countryCode
     * @param string $phone
     *
     * @return AddressWrapper
     */
    public static function create(
        $fullName,
        $streetTYpe,
        $streetName,
        $streetNumber,
        $floor,
        $city,
        $zipCode,
        $countryCode,
        $phone
    ){
        return new AddressWrapper(
            $fullName,
            $streetTYpe,
            $streetName,
            $streetNumber,
            $floor,
            $city,
            $zipCode,
            $countryCode,
            $phone
        );
    }
}