<?php
/**
 * StrDeleteV1 File Doc Comment
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
 * Class StrDeleteV1
 *
 * @category Testing
 * @package  GodLis\Task10
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class StrDeleteV1
{
    /**
     * StrDeleteV1 variable
     *
     * @var
     */
    protected $str;

    /**
     * StrDeleteV1 constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->str = $config['str'];
    }

    /**
     * StrDeleteV1 destructor.
     */
    public function __destruct()
    {
        $this->str;
    }

    /**
     * StrDeleteV1 function
     *
     * @return mixed
     */
    public function strDeleteV1()
    {
        $n_str = str_replace(" ", "", $this->str);
        return $n_str;
    }
}
