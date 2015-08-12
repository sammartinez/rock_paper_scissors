<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "scissors";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 1", $result);
        }

        function test_rock_paper()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "paper";

            $result = $test_RockPaperScissors->play_rockPaperScissors($player1, $player2);

            $this->assertEquals("Player 2", $result);
        }
    }
?>
