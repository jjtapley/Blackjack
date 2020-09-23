<?php

/**Function displays players cards (face and suit)
 *
 * @param $card1
 * @param $card2
 * @param $card3
 * @param $card4
 */
function showCards(array $card1, array $card2, array $card3, array $card4) {
    echo '<h2>Player 1 Cards:</h2>';
    echo $card1['face'] . ' of ' . $card1['suit'] .  '<br>';
    echo $card2['face'] . ' of ' . $card2['suit'] .  '<br>';

    echo '<h2>Player 2 Cards:</h2>';
    echo $card3['face'] . ' of ' . $card3['suit'] .  '<br>';
    echo $card4['face'] . ' of ' . $card4['suit'] .  '<br>';
}