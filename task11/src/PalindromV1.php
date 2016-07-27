<?php
/**
 * PalindromV1 File Doc Comment
 *
 * This file is a part of a task11
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task11
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task11;

/**
 * Class PalindromV1
 *
 * @category Testing
 * @package  GodLis\Task11
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class PalindromV1
{
    /**
     * PalindromV1 variable
     *
     * @var
     */
    protected $word;

    /**
     * StrDeleteV2 variable
     *
     * @var
     */
    protected $sr;

    /**
     * PalindromV1 variable
     *
     * @var
     */
    protected $k;

    /**
     * PalindromV1 constructor.
     *
     * @param array  $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->word = $config['word'];
    }

    /**
     * PalindromV1 destructor.
     */
    public function __destruct()
    {
        $this->word;
        $this->sr;
        $this->k;
    }
    /**
     * PalindromV1 function
     *
     * @return string
     */
    public function palindromV1()
    {
        $sr = floor(strlen($this->word)/2);
        $k = strlen($this->word);
        $arr1 = str_split($this->word);
        for ($i=0; $i<$sr; $i++) {
            if (!empty($arr1[$k - $i - 1])) {
                if ($arr1[$i] != $arr1[$k-$i-1]) {
                    return "it`s not a palindrome";
                }
            }
        }
        return "it`s a palindrome";
    }
}
