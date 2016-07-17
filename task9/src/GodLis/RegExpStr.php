<?php

namespace GodLis\Task9;

/**
 * Class RegExpStr
 * @package GodLis
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
        return $matches;
    }
}
