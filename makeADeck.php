<?php

/**Function makes a deck of cards by creating a 'face' and 'value' list for each 'suit'
 *
 * @param $suits
 * @param $cards
 *
 * @return mixed
 */
function makeADeck(array $suits,array $cards) :array {
    foreach ($suits as $suit) {
        foreach ($cards as $card) {
            $deck[] = array ('face'=>$card['face'], 'value'=>$card['value'], 'suit'=>$suit);
        }
    }
    return $deck;
}