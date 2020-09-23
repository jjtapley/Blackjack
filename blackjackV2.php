<?php

$suits = ['spades', 'diamonds', 'hearts', 'clubs'];

$cards = [
    ['face'=>'Ace', 'value'=>11],
    ['face'=>'Two', 'value'=>2],
    ['face'=>'Three', 'value'=>3],
    ['face'=>'Four', 'value'=>4],
    ['face'=>'Five', 'value'=>5],
    ['face'=>'Six', 'value'=>6],
    ['face'=>'Seven', 'value'=>7],
    ['face'=>'Eight', 'value'=>8],
    ['face'=>'Nine', 'value'=>9],
    ['face'=>'Ten', 'value'=>10],
    ['face'=>'Jack', 'value'=>10],
    ['face'=>'Queen', 'value'=>10],
    ['face'=>'King', 'value'=>10],
];

/**Function makes a deck of cards by creating a 'face' and 'value' list for each 'suit'
 *
 * @param $suits
 * @param $cards
 *
 * @return mixed
 */
function makeADeck($suits,$cards) {
    foreach ($suits as $suit) {
        foreach ($cards as $card) {
        $deck[] = array ('face'=>$card['face'], 'value'=>$card['value'], 'suit'=>$suit);
        }
    }
    return $deck;
}

/**Function deals the deck of cards and deals 4 random cards
 *
 * @param $deck
 *
 * @return array
 */
function deal($deck) {
    shuffle($deck);
    $cards = [
        [$card1 = array_slice($deck,0,1)][0],
        [$card2 = array_slice($deck,1,1)][0],
        [$card3 = array_slice($deck,2,1)][0],
        [$card4 = array_slice($deck,3,1)][0],
    ];
        return $cards;
}


/**Function displays players cards (face and suit)
 *
 * @param $card1
 * @param $card2
 * @param $card3
 * @param $card4
 */
function showCards($card1, $card2, $card3, $card4) {
    echo '<h2>Player 1 Cards:</h2>';
    echo $card1['face'] . ' of ' . $card1['suit'] .  '<br>';
    echo $card2['face'] . ' of ' . $card2['suit'] .  '<br>';

    echo '<h2>Player 2 Cards:</h2>';
    echo $card3['face'] . ' of ' . $card3['suit'] .  '<br>';
    echo $card4['face'] . ' of ' . $card4['suit'] .  '<br>';
}

/**Function shows the players score and works out who is the winner
 *
 * @param $card1
 * @param $card2
 * @param $card3
 * @param $card4
 */
function showScore($card1, $card2, $card3, $card4) {
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

echo '<h1>BLACKJACK</h1>';
$deck = makeADeck($suits, $cards);
$cards = deal($deck);

$card1 = $cards[0][0];
$card2 = $cards[1][0];
$card3 = $cards[2][0];
$card4 = $cards[3][0];

showCards($card1, $card2, $card3, $card4);
showScore($card1, $card2, $card3, $card4);