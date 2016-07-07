<?php

namespace GodLis;

/**
 * Class RegExpStr
 * @package OlechkaBrajko\Task9
 */
class RegExpStr
{
    /**
     * @param $pattern
     * @param $subject
     */
    public function regExpStr($pattern, $subject)
    {
        preg_match($pattern, substr($subject, 3), $matches, PREG_OFFSET_CAPTURE);
        print_r($matches);
    }
}
