<?php
/**
 * ProgrammerDay File Doc Comment
 *
 * This file is a part of a task13
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task13
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task13;

/**
 * Class ProgrammerDay
 *
 * @category Testing
 * @package  GodLis\Task13
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ProgrammerDay
{
    /**
     * ProgrammerDay variable
     *
     * @var
     */
    protected $year;

    /**
     * ProgrammerDay constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->year = $config['year'];
    }

    /**
     * ProgrammerDay destructor.
     */
    public function __destruct()
    {
        $this->year;
    }

    /**
     * ProgrammerDay function
     *
     * @return string
     */
    public function programerDay()
    {
        if ($this->year%4 == 0) {
            $date = ''.$this->year.'-09-12';
            return strftime("%a, %d/%m/%Y", strtotime($date));
        } else {
            $date = '' . $this->year . '-09-13';
            return strftime("%a, %d/%m/%Y", strtotime($date));
        }
    }
}
