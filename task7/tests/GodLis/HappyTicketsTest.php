<?php

namespace GodLis\Tests;

use GodLis\HappyTickets;

class HappyTicketsTest extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new HappyTickets();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testArraySum()
    {
        $var = 6;
        $result = $this->tmp->lNum($var);
        $this->assertEquals(55252, $result);

        $var = 4;
        $result = $this->tmp->lNum($var);
        $this->assertEquals(670, $result);

        $var = 2;
        $result = $this->tmp->lNum($var);
        $this->assertEquals(10, $result);;

        $var = 0;
        $result = $this->tmp->lNum($var);
        $this->assertFalse(false, $result);

        $var = 3;
        $result = $this->tmp->lNum($var);
        $this->assertFalse(false, $result);

        $var = -3;
        $result = $this->tmp->lNum($var);
        $this->assertFalse(false, $result);

        $var = -4;
        $result = $this->tmp->lNum($var);
        $this->assertFalse(false, $result);
    }
}
