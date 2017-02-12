<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 15:38
 */

class HTMLReporter implements Reporter
{
    /**
     * Includes view and passes the counter array to it for rendering
     *
     * @param array $counter parsing results
     */
    public function report(array $counter)
    {
        include 'view/result.php';
    }
}
