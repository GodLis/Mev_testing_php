<?php
/**
 * ArrayAdderV2 File Doc Comment
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
 * Class ArrayAdderV2
 *
 * @category Testing
 * @package  GodLis\Task1
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ArrayAdderV2
{
    /**
     * ArrayAdderV2 variable
     *
     * @var
     */
    public $arr;


    /**
     * ArrayAdderV2 constructor.
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
     * ArrayAdderV2 Function
     *
     * @return bool|int
     */
    public function arrayAdder()
    {
        if (!empty($this->arr)) {
            $sum = 0;
            for ($i=0; $i<count($this->arr); $i++) {
                $sum += $this->arr[$i];
            }
            return $sum;
        }
        return false;
    }
}
