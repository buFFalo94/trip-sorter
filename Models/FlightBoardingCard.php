<?php


namespace Models;


/**
 * Class FlightBoardingCard
 * @package Models
 */
class FlightBoardingCard extends BoardingCard
{

    /**
     * FlightBoardingCard constructor.
     */
    private $flight, $gate, $baggageTicketCounter;

    /**
     * FlightBoardingCard constructor.
     * @param $origin
     * @param $destination
     * @param $seatAssignment
     * @param $flight
     * @param $gate
     * @param $baggageTicketCounter
     */
    public function __construct($origin, $destination, $seatAssignment, $flight, $gate, $baggageTicketCounter)
    {
        parent::__construct($origin, $destination, $seatAssignment);
        $this->flight = $flight;
        $this->gate = $gate;
        $this->baggageTicketCounter = $baggageTicketCounter;
    }
    public function toString()
    {
        return "From " . $this->getOrigin() . ", take flight ". $this->flight. " to ". $this->getDestination() . " Gate " . $this->gate . (empty($this->getSeatAssignment()) ? ", No seat assignment" : ", Seat " . $this->getSeatAssignment()) . ($this->baggageTicketCounter > 0 ? ". Baggage drop at ticket counter ". $this->baggageTicketCounter : ". Baggage will be automatically transferred from your last leg.");
    }
}