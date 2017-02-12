<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 13:49
 */

class ImageParser extends Parser
{
    /**
     * Returns a mask for 'img' tags
     *
     * @return string
     */
    public function getMask()
    {
        return 'img';
    }
}
