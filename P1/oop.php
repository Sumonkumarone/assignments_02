<?php
class VowelCountAndReversedString {
    public function vowelCountandStrrev($string) {
        foreach($string as $value){
            $vowels = ['a','e','i','o','u'];
            $count = 0;
            for ($i = 0; $i < strlen($value); ++$i) {
                if (in_array(strtolower($value)[$i], $vowels)){
                   $count++;
                }
            }
            echo "Original String: {$value}, Vowel Count: {$count}, Reversed String:".strrev($value)."\n";
        }
    }
}