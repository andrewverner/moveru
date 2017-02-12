<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 14:54
 */

class AllTagsParser extends Parser
{
    /**
     * Returns a mask for all tags
     *
     * @return string
     */
    public function getMask()
    {
        return '[a-zA-Z]+';
    }
}
