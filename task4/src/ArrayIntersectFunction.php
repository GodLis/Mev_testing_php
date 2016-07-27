<?php
/**
 * ArrayIntersectFunction File Doc Comment
 *
 * This file is a part of a task4
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task4
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task4;

/**
 * Class ArrayIntersectFunction
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ArrayIntersectFunction
{
    /**
     * ArrayIntersectFunction variable
     *
     * @var
     */
    protected $array1;

    /**
     * ArrayIntersectFunction variable
     *
     * @var
     */
    protected $array2;

    /**
     * ArrayIntersectFunction  constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->array1 = $config['array1'];
        $this->array2 = $config['array2'];
    }

    /**
     * ArrayIntersectFunction  destructor.
     */
    public function __destruct()
    {
        $this->array1;
        $this->array2;
    }

    /**
     * ArrayIntersectFunction  Function
     *
     * @return array
     */
    public function arrayIntersectFunction()
    {
        return (array_intersect($this->array1, $this->array2));
    }
}
