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


    }

?>
