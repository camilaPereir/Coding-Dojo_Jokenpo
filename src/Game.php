<?php

namespace Dojo;

class Game
{

    public function getWinner(string $playerOne, string $playerTwo): ?string
    {

        if($playerOne === $playerTwo) {
            return null;
        }

        $game = [
            "STONE" => ["PAPER"=>false,  "SCISSOR" => true],
            "PAPER" => ["STONE" => true, "SCISSOR" => false],
            "SCISSOR" => ["STONE" => false, "PAPER" => true],
        ];

        if($game[$playerOne][$playerTwo]){
            return $playerOne;
        }

        return $playerTwo;
    }

}
