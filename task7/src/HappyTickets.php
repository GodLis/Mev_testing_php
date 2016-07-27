<?php
/**
 * HappyTickets File Doc Comment
 *
 * This file is a part of a task7
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task7
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
namespace GodLis\Task7;

/**
 * Class HappyTickets
 *
 * @category Testing
 * @package  GodLis\Task7
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class HappyTickets
{
    /**
     * HappyTickets variable
     *
     * @var
     */
    protected $numbers;

    /**
     * HappyTickets constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->numbers = $config['numbers'];
    }

    /**
     * HappyTickets destructor.
     */
    public function __destruct()
    {
        $this->numbers;
    }

    /**
     * HappyTickets function
     *
     * @return bool
     */
    public function lNum()
    {
        if ($this->numbers % 2 != 0 || $this->numbers<=0) {
            return false;
        }
        $maxNum = (int)str_repeat('9', $this->numbers);
        $half = $this->numbers / 2;

        for ($i = 0; $i <= $maxNum; $i++) {
            $str = sprintf('%0' . $this->numbers . 's', $i);
            $arr = str_split($str, $half);
            if (array_sum(str_split($arr[0], 1))==array_sum(str_split($arr[1], 1))) {
                echo $arr[0], $arr[1] ."\n";
            }
        }
        return true;
    }
}
