<?php
/**
 * FindMinAndMaxElements File Doc Comment
 *
 * This file is a part of a task2
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task2
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task2;

/**
 * Class FindMinAndMaxElements
 *
 * @category Testing
 * @package  GodLis\Task2
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class FindMinAndMaxElements
{
    /**
     * FindMinAndMaxElements variable
     *
     * @var
     */
    protected $arr;

    /**
     * FindMinAndMaxElements constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->arr = $config['arr'];
    }

    /**
     * FindMinAndMaxElements destructor
     */
    public function __destruct()
    {
        $this->arr;
    }

    /**
     * FindMinAndMaxElements function
     *
     * @return bool|int
     */
    public function seachMinElement()
    {
        if (!empty($this->arr)) {
            $min = (int)(min($this->arr));
            return $min;
        }
        return false;
    }

    /**
     * FindMinAndMaxElements function
     *
     * @return bool|int
     */
    public function seachMaxElement()
    {
        if (!empty($this->arr)) {
            $max = (int)(max($this->arr));
            return $max;
        }
        return false;
    }
}
