<?php
/**
 * PalindromV2 File Doc Comment
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
 * Class PalindromV2
 *
 * @category Testing
 * @package  GodLis\Task11
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class PalindromV2
{
    /**
     * PalindromV2 variable
     *
     * @var
     */
    protected $word;

    /**
     * PalindromV2 constructor.
     *
     * @param array $config Configs that are transferred to use
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
    }
    /**
     * PalindromV2 function
     *
     * @return string
     */
    public function palindromV2()
    {
        $tmp = strrev($this->word);
        if ($tmp === $this->word) {
            return "it`s a palindrome";
        }
        return "it`s not a palindrome";
    }
}
