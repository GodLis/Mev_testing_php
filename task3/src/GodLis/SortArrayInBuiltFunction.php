<?php
/**
 * SortArrayInBuiltFunction Doc Comment
 *
 * This file is a part of a task3
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task3;

/**
 * Class SortArrayInBuiltFunction
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class SortArrayInBuiltFunction
{
    /**
     * SortArrayInBuiltFunction variable
     *
     * @var
     */
    protected $array;

    /**
     * SortArrayInBuiltFunction constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->array = $config['arr'];
    }

    /**
     * SortArrayInBuiltFunction destructor.
     */
    public function __destruct()
    {
        $this->array;
    }

    /**
     * SortArrayInBuiltFunction function
     *
     * @return mixed
     */
    public function sortArrayInBuiltFunction()
    {
        if (!empty($this->array)) {
            sort($this->array);
        }
        return $this->array;
    }
}
