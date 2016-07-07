<?php

namespace GodLis\Tests;

class UserSeachStrTest extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new UserSeachStr();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testUserSeachStr()
    {
        $subject = "abcdef sdjfvh jbc ";
        $part = 'def';
        $result = $this->tmp->userSeachStr($part, $subject);
        $this->assertEquals(true, $result);

        $subject = "abcdef sdjfvh jbc ";
        $part = 'del';
        $result = $this->tmp->userSeachStr($part, $subject);
        $this->assertEquals(false, $result);

        $subject = "abcdef sdjfvh jbc. ";
        $part = ' ';
        $result = $this->tmp->userSeachStr($part, $subject);
        $this->assertEquals(true, $result);

        $subject = "abcdef sdjfvh jbc. ";
        $part = '.';
        $result = $this->tmp->userSeachStr($part, $subject);
        $this->assertEquals(true, $result);

    }
}
