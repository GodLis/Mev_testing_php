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

    public function testHappyTickets()
    {
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
