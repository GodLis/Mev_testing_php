<?php

namespace GodLis\Task7\Tests;

use GodLis\Task7\HappyTickets;

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
