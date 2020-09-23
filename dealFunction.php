<?php

/**Function deals the deck of cards and deals 4 random cards
 *
 * @param $deck
 *
 * @return array
 */
function deal(array $deck) :array {
    shuffle($deck);
    $cards = [
        [$card1 = array_slice($deck,0,1)][0],
        [$card2 = array_slice($deck,1,1)][0],
        [$card3 = array_slice($deck,2,1)][0],
        [$card4 = array_slice($deck,3,1)][0],
    ];
    return $cards;
}