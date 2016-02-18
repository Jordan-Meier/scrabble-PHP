<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {

        function test_wordSplit()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "apple";


            //Act
            $result = $test_Scrabble->wordSplit($word);


            //Assert
            $this->assertEquals(array("a", "p", "p", "l", "e"), $result);

        }

        function test_findScore_scoreOfOne()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "a";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(1, $result);
        }

        function test_findScore_scoreOfTwo()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "d";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(2, $result);
        }


    }

?>
