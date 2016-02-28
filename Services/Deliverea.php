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
use Octante\DelivereaBundle\Library\AddressWrapper;
use Octante\DelivereaBundle\Library\CollectionWrapper;
use Octante\DelivereaBundle\Library\ShipmentWrapper;

/**
 * Class Deliverea
 * @package Octante\DelivereaBundle\Services
 */
class Deliverea
{
    /**
     * @var DelivereaWrapper
     */
    private $deliverea;

    /**
     * Shipment constructor.
     *
     * @param DelivereaWrapper $deliverea
     */
    public function __construct(DelivereaWrapper $deliverea)
    {
        $this->deliverea = $deliverea;
    }

    /**
     * Creates a new shipment.
     *
     * @param ShipmentWrapper $shipment
     * @param integer         $from
     * @param AddressWrapper  $to
     *
     * @return \Deliverea\Response\NewShipmentResponse
     */
    public function newShipment(ShipmentWrapper $shipment, $from, AddressWrapper $to)
    {
        return $this->deliverea->newShipment($shipment, $from, $to);
    }

    /**
     * Creates a new collection.
     *
     * @param CollectionWrapper $collection
     * @param integer           $from
     * @param AddressWrapper    $to
     *
     * @return \Deliverea\Response\NewCollectionResponse
     */
    public function newCollection(CollectionWrapper $collection, $from, AddressWrapper $to)
    {
        return $this->deliverea->newCollection($collection, $from, $to);
    }

    /**
     * Get shipment tracking by reference.
     *
     * @param string $dlvrReference
     *
     * @return \Deliverea\Response\GetShipmentTrackingResponse
     */
    public function getShipmentTracking($dlvrReference)
    {
        return $this->deliverea->getShipmentTracking($dlvrReference);
    }

    /**
     * Get shipment by reference,
     *
     * @param string $dlvrReference
     *
     * @return \Deliverea\Response\GetShipmentResponse
     */
    public function getShipment($dlvrReference)
    {
        return $this->deliverea->getShipment($dlvrReference);
    }

    /**
     * Get shipment label by reference.
     *
     * @param string $dlvrReference
     *
     * @return \Deliverea\Response\GetShipmentLabelResponse
     */
    public function getShipmentLabel($dlvrReference)
    {
        return $this->deliverea->getShipmentLabel($dlvrReference);
    }

    /**
     * Get filtered shipments.
     *
     * @param array $filters
     *
     * @return array
     */
    public function getShipments($filters)
    {
        return $this->deliverea->getShipments($filters);
    }

    /**
     * Returns addresses.
     *
     * @return \Deliverea\Response\GetAddressesResponse
     */
    public function getAddresses()
    {
        return $this->deliverea->getAddresses();
    }
}