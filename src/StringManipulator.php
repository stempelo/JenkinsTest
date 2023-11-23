<?php

class StringManipulator
{
    public function getFirstAndLastCharacter(string $string): array
    {
        if ( $string === '' ) {
            return ['',''];
        }
        $firstCharacter = $string[0];
        $lastCharacter = $string[strlen($string) - 1];
        return [$firstCharacter, $lastCharacter];
    }
}
