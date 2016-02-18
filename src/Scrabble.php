<?php
    class Scrabble
    {
        function wordSplit($word)
        {
            return str_split($word);
        }

        function findScore($word)
        {
            $word = strtolower($word);
            $letter_array = $this->wordSplit($word);
            $score = 0;
            foreach ($letter_array as $letter) {
                if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o'  || $letter == 'u' || $letter == 'l' || $letter == 'n' || $letter == 'r' || $letter == 's' || $letter == 't') {
                    ++$score;
                }
                elseif ($letter == 'd' || $letter == 'g') {
                    $score .= 2;
                }
                elseif ($letter == 'b' || $letter == 'c' || $letter == 'm' || $letter == 'p') {
                    $score .= 3;
                }
                elseif ($letter == 'f' || $letter == 'h' || $letter == 'v' || $letter == 'w' || $letter == 'y') {
                    $score .= 4;
                }
                elseif ($letter == 'k') {
                    $score .= 5;
                }
            }
            return $score;
        }
    }



?>
