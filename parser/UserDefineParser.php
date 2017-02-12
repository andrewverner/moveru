<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 14:16
 */

class UserDefineParser implements Parser
{
    private $mask;

    /**
     * Creates a user defined parser
     *
     *
     * UserDefineParser constructor.
     * @param $mask string Tags with "|" delimiter. Ex: form|em|tt|sup
     */
    public function __construct($mask)
    {
        $this->mask = $mask;
    }

    /**
     * Returns a mask for user defined tags
     *
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }
}
