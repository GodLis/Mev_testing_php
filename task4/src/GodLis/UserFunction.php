<?php
/**
 * UserFunction File Doc Comment
 *
 * This file is a part of a task3
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
 * Class UserFunction
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class UserFunction
{
    /**
     * UserFunction variable
     *
     * @var
     */
    protected $array1;

    /**
     * UserFunction variable
     *
     * @var
     */
    protected $array2;

    /**
     * UserFunction constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->array1 = $config['array1'];
        $this->array2 = $config['array2'];
    }

    /**
     * UserFunction destructor.
     */
    public function __destruct()
    {
        $this->array1;
        $this->array2;
    }

    /**
     * UserFunction Function
     *
     * @return array
     */
    public function userFunction()
    {
        $arr[] = [];
        if (count($this->array1) >= count($this->array2)) {
            for ($i = 0; $i < count($this->array1); $i++) {
                for ($j = 0; $j < count($this->array2); $j++) {
                    if ($this->array1[$i] == $this->array2[$j]) {
                        $arr[$i] = $this->array1[$i];
                        break;
                    }
                }
            }
        } elseif (count($this->array2) > count($this->array1)) {
            for ($i = 0; $i < count($this->array2); $i++) {
                for ($j = 0; $j < count($this->array1); $j++) {
                    if ($this->array2[$i] == $this->array1[$j]) {
                        $arr[$i] = $this->array2[$i];
                        break;
                    }
                }
            }
        }
        return $arr;
    }
}
