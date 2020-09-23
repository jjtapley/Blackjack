<?php

require '../Blackjack/dealFunction.php';
require '../Blackjack/makeADeck.php';
require '../Blackjack/showCards.php';
require '../Blackjack/showScore.php';

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

echo '<h1>BLACKJACK</h1>';
$deck = makeADeck($suits, $cards);
$cards = deal($deck);
$card1 = $cards[0][0];
$card2 = $cards[1][0];
$card3 = $cards[2][0];
$card4 = $cards[3][0];
showCards($card1, $card2, $card3, $card4);
showScore($card1, $card2, $card3, $card4);