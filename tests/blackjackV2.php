<?php

require '..' . DIRECTORY_SEPARATOR . 'blackjackV2.php';

use PHPUnit\Framework\TestCase;

class makeADeck extends TestCase {
    //success test
    public function testSuccessBlackjack() {
        $expected = $deck;
        $input = ($cards, $suits);
        $case = makeADeck($cards, $suits);
        $this->assertEquals($expected, $case);
    }
}