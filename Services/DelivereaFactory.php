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

use Octante\DelivereaBundle\Library\DelivereaWrapper;

/**
 * Class DelivereaFactory
 * @package Octante\DelivereaBundle\Services
 */
class DelivereaFactory
{
    /**
     * @param string $apiUser
     * @param string $apiSecret
     * @param boolean $sandbox
     *
     * @return DelivereaWrapper
     */
    public static function create($apiUser, $apiSecret, $sandbox)
    {
        $deliverea= new DelivereaWrapper($apiUser, $apiSecret);
        $deliverea->setSandbox($sandbox);

        return $deliverea;
    }
}