<?php

use Models\BusBoardingCard;

class BoardingCardSorter
{

    /**
     * BoardingCarSorter constructor.
     */
    public function __construct()
    {
    }
    public static function Sort($boardingCards)
    {
        $originArray = Array();
        foreach ($boardingCards as $boardingCard)
        {
            $originArray[$boardingCard->getOrigin()] = $boardingCard;
        }
        $destinationArray = Array();
        foreach ($boardingCards as $boardingCard)
        {
            $destinationArray[$boardingCard->getDestination()] = $boardingCard;
        }

        $starting = null;

        foreach ($boardingCards as $boardingCard)
        {
            $starting = $boardingCard->getOrigin();
            if(!array_key_exists($starting, $destinationArray))
            {
                break;
            }
        }

        $sortedCards = Array();
        $currentOrigin = $starting;

        while ($currentBoardingCard = array_key_exists($currentOrigin, $originArray) ? $originArray[$currentOrigin] : null)
        {
            array_push($sortedCards, $currentBoardingCard);
            $currentOrigin = $currentBoardingCard->getDestination();
        }
        return $sortedCards;
    }
}