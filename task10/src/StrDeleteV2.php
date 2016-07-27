<?php
/**
 * StrDeleteV2 File Doc Comment
 *
 * This file is a part of a task10
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task10
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task10;

/**
 * Class StrDeleteV2
 *
 * @category Testing
 * @package  GodLis\Task10
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class StrDeleteV2
{
    /**
     * StrDeleteV2 variable
     *
     * @var
     */
    protected $str;

    /**
     * StrDeleteV2 constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->str = $config['str'];
    }

    /**
     * StrDeleteV2 destructor.
     */
    public function __destruct()
    {
        $this->str;
    }
    /**
     * StrDeleteV2 function
     *
     * @return mixed
     */
    public function strDeleteV2()
    {
        $strN = preg_replace('/\s/', '', $this->str);
        return $strN;
    }
}
