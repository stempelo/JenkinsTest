<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/StringManipulator.php';

use PHPUnit\Framework\TestCase;

class StringManipulatorTest extends TestCase
{
    

    public function testGetFirstAndLastCharacter()
    {
        $stringManipulator = new StringManipulator();

        // Test case 1: Empty string
        $result = $stringManipulator->getFirstAndLastCharacter('');
        $this->assertEquals(['', ''], $result);        

        // Test case 2: Single character string
        $result = $stringManipulator->getFirstAndLastCharacter('a');
        $this->assertEquals(['a', 'a'], $result);

        

        // Test case 3: Regular string
        $result = $stringManipulator->getFirstAndLastCharacter('Hello, World!');
        $this->assertEquals(['H', '!'], $result);
    }
}
