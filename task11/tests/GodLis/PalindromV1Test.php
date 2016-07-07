<?php

namespace GodLis\Tests;

class PalindromV1Test extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new PalindromV1();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testArraySum()
    {
        $word = "alex";
        $sr = 2;
        $k = 4;
        $result = $this->tmp->palindromV1($word, $sr, $k);
        $this->assertEquals("it`s not a palindrome", $result);

        $word = "ale";
        $sr = 1;
        $k = 3;
        $result = $this->tmp->palindromV1($word, $sr, $k);
        $this->assertEquals("it`s not a palindrome", $result);

        $word = "alikaakila";
        $sr = 5;
        $k = 10;
        $result = $this->tmp->palindromV1($word, $sr, $k);
        $this->assertEquals("it`s a palindrome", $result);

        $word = "alikakila";
        $sr = 4;
        $k = 9;
        $result = $this->tmp->palindromV1($word, $sr, $k);
        $this->assertEquals("it`s a palindrome", $result);

        $word = "a";
        $sr = 0;
        $k = 1;
        $result = $this->tmp->palindromV1($word, $sr, $k);
        $this->assertEquals("it`s a palindrome", $result);

    }
}
