<?php
/**
 * RegExpStr File Doc Comment
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
 * Class RegExpStr
 *
 * @category Testing
 * @package  GodLis\Task9
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class RegExpStr
{
    /**
     * RegExpStr variable
     *
     * @var
     */
    protected $pattern;

    /**
     * RegExpStr variable
     *
     * @var
     */
    protected $subject;

    /**
     * RegExpStr constructor.
     *
     * @param array $config Configs that are transferred to use
     */
    public function __construct($config)
    {
        $this->pattern = $config['pattern'];
        $this->subject = $config['subject'];
    }

    /**
     * RegExpStr destructor.
     */
    public function __destruct()
    {
        $this->pattern;
        $this->subject;
    }


    /**
     * RegExpStr function
     *
     * @return mixed
     */
    public function regExpStr()
    {
        preg_match($this->pattern, substr($this->subject, 3), $matches, PREG_OFFSET_CAPTURE);
        return $matches;
    }
}
