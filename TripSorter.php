<?php



class TripSorter
{

    /**
     * TripSorter constructor.
     */
    public function __construct()
    {
    }
    private $sortedBoardingCards;

    /**
     * @return mixed
     */
    public function getSortedBoardingCards()
    {
        return $this->sortedBoardingCards;
    }
    private $boardingCards;
    public function sortCard()
    {
        if(count($this->boardingCards) > 0)
        {
            $this->sortedBoardingCards = BoardingCardSorter::Sort($this->boardingCards);
        }
    }
    public function addCard(\Models\BoardingCard $boardingCard)
    {
        $this->boardingCards[] = $boardingCard;
    }
}