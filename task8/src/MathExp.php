<?php
/**
 * MathExp Class Doc Comment
 *
 * This file is a part of a task8
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task8
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task8;

/**
 * Class MathExp
 *
 * @category Testing
 * @package  GodLis\Task19
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class MathExp
{
    /**
     * MathExp variable
     *
     * @var
     */
    protected $str;

    /**
     * MathExp constructor.
     *
     * @param string $str Mathematical expression
     */
    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * MathExp destructor.
     */
    public function __destruct()
    {
        $this->str;
    }

    /**
     * MathExp function
     *
     * @return float
     */
    public function mathExp()
    {
        //        for ($i=0; $i<$this->str; $i++) {
        //            if ($this->str[$i] != '/([0-9\(\)\*\-\+\/\.]*)/') {
        //                return 'Несоответствие введённых данных значению математического примера';
        //            }
        //        }
        //        $str = eval($this->str.";");
        //        return $str;
        //            $this->str =readline("Expression: ");
        //            $str = eval($this->str.";");
        //            $this->str = (1+2)*3;
            $str = (float)preg_replace(
                '/([0-9\(\)\*\-\+\/\.]*)/',
                '\\1',
                $this->str
            );
            return $str;
    }
}
