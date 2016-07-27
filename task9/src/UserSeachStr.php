<?php
/**
 * UserSeachStr File Doc Comment
 *
 * This file is a part of a task9
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task9
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
namespace GodLis\Task9;

    /**
     * Class UsrSeachStr
     *
     * @category Testing
     * @package  GodLis\Task9
     * @author   Olechka Brajko <olechkabrajko@gmail.com>
     * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
     * @link     https://github.com/GodLis/Mev_testing_php
     */
class UserSeachStr
{
    /**
     * UserSeachStr variable
     *
     * @var
     */
    protected $part;

    /**
     * UserSeachStr variable
     *
     * @var
     */
    protected $subject;

    /**
     * UserSeachStr constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->part = $config['part'];
        $this->subject = $config['subject'];
    }

    /**
     * UserSeachStr destructor.
     */
    public function __destruct()
    {
        $this->part;
        $this->subject;
    }

    /**
     * UserSeachStr function
     *
     * @return bool
     */
    public function userSeachStr()
    {
        if (stristr($this->subject, $this->part) === false) {
            echo "Подстрока в строке не найдена" . "\n";
            return false;
        } else {
            echo "Подстрока в строке найдена" . "\n";
            return true;
        }
    }
}
