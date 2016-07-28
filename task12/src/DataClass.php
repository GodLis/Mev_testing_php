<?php
/**
 * DataClass File Doc Comment
 *
 * This file is a part of a task12
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task12
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task12;

/**
 * Class DataClass
 *
 * @category Testing
 * @package  GodLis\Task12
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class DataClass
{
    /**
     * DataClass function
     *
     * @param mixed $datetime1 Configs that are transferred to use
     * @param mixed $datetime2 Configs that are transferred to use
     *
     * @return mixed
     */
    public function data($datetime1, $datetime2)
    {
        $interval = $datetime1->diff($datetime2);
        return $interval;
    }
}
