<?php

namespace  Models;

class BoardingCard
{

    /**
     * BoardingCard constructor.
     * @param string $origin
     * @param string $seatAssignment
     * @param string $destination
     */
    public function __construct($origin = "", $destination = "", $seatAssignment = "")
    {
        $this->origin = $origin;
        $this->destination = $destination;
        $this->seatAssignment = $seatAssignment;
    }
    protected $seatAssignment;
    protected $origin;
    protected $destination;

    /**
     * @return string
     */
    public function getSeatAssignment()
    {
        return $this->seatAssignment;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

}
