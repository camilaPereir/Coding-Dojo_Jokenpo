<?php

use Dojo\Game;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testArrayEmpty()
    {
        $array = [];

        self::assertEmpty($array);
    }

    /**
     * @dataProvider matchesProvider
     */
    public function testShouldReturnWinnerWhenWasWinner($winner, $looser): void
    {
        $game = new Game();

        $result = $game->getWinner($winner, $looser);

        self::assertEquals($winner, $result);
    }

    public function testShouldReturnEqualWhenPlayersAreTheSame(): void
    {
        $game = new Game();

        $result = $game->getWinner("STONE", "STONE");

        self::assertNull($result);
    }

    public function matchesProvider(): array
    {
        return [
            'stoneWinner'=> [
                    'STONE',
                    'SCISSOR',
           ],
            'scissorWinner'=> [
                    'SCISSOR',
                    'PAPER'
            ],
            'paperWinner'=> [
                    'PAPER',
                    'STONE'
            ],
       ];
   }
}