<?php

namespace OlechkaBrajko\Task11;

require "PalindromV2.php";

class PalindromV2Test extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new PalindromV2();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testArraySum()
    {
        $word = "alex";
        $result = $this->tmp->palindromV2($word);
        $this->assertEquals("it`s not a palindrome", $result);

        $word = "ale";
        $result = $this->tmp->palindromV2($word);
        $this->assertEquals("it`s not a palindrome", $result);

        $word = "alikaakila";
        $result = $this->tmp->palindromV2($word);
        $this->assertEquals("it`s a palindrome", $result);

        $word = "alikakila";
        $result = $this->tmp->palindromV2($word);
        $this->assertEquals("it`s a palindrome", $result);

        $word = "a";
        $result = $this->tmp->palindromV2($word);
        $this->assertEquals("it`s a palindrome", $result);

    }
}
