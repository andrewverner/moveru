<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 14:30
 */

interface Reporter
{
    /**
     * @param array $counter
     * @return mixed
     */
    public function report(array $counter);
}
