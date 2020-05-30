<?php


namespace Models;


class BusBoardingCard extends BoardingCard
{

    /**
     * BusBoardingCard constructor.
     * @param $origin
     * @param $destination
     * @param $seatAssignment
     */
    public function __construct($origin, $destination, $seatAssignment)
    {
        parent::__construct($origin, $destination, $seatAssignment);
    }
    public function toString()
    {
        return "Take the airport bus from " . $this->getOrigin() . " to " . $this->getDestination() . (empty($this->getSeatAssignment()) ? ". No seat assignment" : ". Sit  in seat " . $this->getSeatAssignment());
    }
}