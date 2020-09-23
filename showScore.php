<?php

/**Function shows the players score and works out who is the winner
 *
 * @param $card1
 * @param $card2
 * @param $card3
 * @param $card4
 */
function showScore(array $card1, array $card2, array $card3, array $card4) {
    $player1Score = ($card1['value'] + $card2['value']);
    $player2Score = ($card3['value'] + $card4['value']);
    echo '<br>';
    echo '<h3>Player 1 scored '.$player1Score.'</h3>';
    echo '<h3>Player 2 scored '.$player2Score.'</h3>' . '<br>';
    if (($player1Score <= 21) && ($player1Score > $player2Score)) {
        echo '<h1>PLAYER 1 WINS!</h1>';
    } else if (($player2Score <= 21) && ($player2Score > $player1Score)) {
        echo '<h1>PLAYER 2 WINS!</h1>';
    } else if ($player1Score === $player2Score) {
        echo '<h1>IT\'S A DRAW!</h1>';
    } else if (($player1Score > 21) && ($player2Score < 21)) {
        echo '<h1>PLAYER 1 IS BUST!</h1>';
        echo '<br>';
        echo '<h1>PLAYER 2 WINS!</h1>';
    } else if (($player2Score > 21) && ($player1Score < 21)) {
        echo '<h1>PLAYER 2 IS BUST!</h1>';
        echo '<br>';
        echo '<h1>PLAYER 1 WINS!</h1>';
    }
}