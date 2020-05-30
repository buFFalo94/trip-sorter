<?php

function __autoload($class)
{
    require $class . '.php';
}

$cards = Array();
$card_0 = new Models\TrainBoardingCard("Madrid", "Barcelona","78A", "45B");
$card_1 = new Models\BusBoardingCard("Barcelona", "Genoa Airport", "");
$card_2 = new Models\FlightBoardingCard("Genoa Airport", "Stockholm", "3A", "SK455", "45B", 344);
$card_3 = new Models\FlightBoardingCard("Stockholm", "New York JFK", "7B", "SK22", "22", 0);

$tripSorter = new TripSorter();
$tripSorter->addCard($card_3);
$tripSorter->addCard($card_1);
$tripSorter->addCard($card_0);
$tripSorter->addCard($card_2);

$tripSorter->sortCard();

$sortedCards = $tripSorter->getSortedBoardingCards();

foreach ($sortedCards as $card)
{
    echo $card->toString();
    echo "</br>";
}
echo "You have arrived at your final destination";
