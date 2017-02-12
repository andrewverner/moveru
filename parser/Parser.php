<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 12:21
 */

abstract class Parser
{
    /**
     * Returns a mask for specific tag or a group of tags
     *
     * @return mixed
     */
    abstract public function getMask();
}
