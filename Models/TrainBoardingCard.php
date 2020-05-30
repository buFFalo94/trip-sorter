<?php


namespace Models;


class TrainBoardingCard extends BoardingCard
{

    /**
     * TrainBoardingCard constructor.
     * @param $origin
     * @param $destination
     * @param $seatAssignment
     * @param $trainNumber
     */
    private $trainNumber;
    public function __construct($origin, $destination, $seatAssignment, $trainNumber)
    {
        parent::__construct($origin, $destination, $seatAssignment);
        $this->trainNumber = $trainNumber;
    }
    public function toString()
    {
        return "Take train ". $this->trainNumber . " from " . $this->getOrigin() . " to " . $this->getDestination() . (empty($this->getSeatAssignment())  ? ". No seat assignment" : ". Sit  in seat " . $this->getSeatAssignment());
    }
}