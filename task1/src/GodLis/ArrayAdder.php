<?php
/**
 * ArrayAdder File Doc Comment
 *
 * This file is a part of a task1
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task1
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task1;

/**
 * Class ArrayAdder
 *
 * @category Testing
 * @package  GodLis\Task1
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ArrayAdder
{
    /**
     * ArrayAdder variable
     *
     * @var
     */
    protected $arr;

    /**
     * ArrayAdder constructor.
     *
     * @param array $config The data that we transmit for processing
     */
    public function __construct($config)
    {
        $this->arr = $config['arr'];
    }

    /**
     * ArrayAdder destructor.
     */
    public function __destruct()
    {
        $this->arr;
    }

    /**
     * ArrayAdder Function
     *
     * @return bool|number
     */
    public function arrayAdder()
    {
        if (!empty($this->arr)) {
            return array_sum($this->arr);
        }
        return false;
    }
}
