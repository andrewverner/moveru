<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 13:38
 */

class AnchorParser extends Parser
{
    /**
     * Returns a mask for 'a' tags
     *
     * @return string
     */
    public function getMask()
    {
        return 'a';
    }
}
