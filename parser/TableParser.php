<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 13:49
 */

class TableParser implements Parser
{
    /**
     * Returns a mask for tables tags
     *
     * @return string
     */
    public function getMask()
    {
        return 'table|thead|tbody|tfoot|th|tr|td';
    }
}
