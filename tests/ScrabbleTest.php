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
        function test_findScore_scoreOfThree()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "b";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(3, $result);
        }
        function test_findScore_scoreOfFour()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "f";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(4, $result);
        }
        function test_findScore_scoreOfFive()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "k";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(5, $result);
        }
        function test_findScore_scoreOfEight()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "j";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(8, $result);
        }

        function test_findScore_scoreOfTen()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "q";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(10, $result);
        }

        function test_findScore_wordNoRepeatLetters()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "friend";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(10, $result);
        }

        function test_findScore_wordRepeatingLetters()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $word = "bookkeeper";


            //Act
            $result = $test_Scrabble->findScore($word);


            //Assert
            $this->assertEquals(22, $result);
        }

    }

?>
