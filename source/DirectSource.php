<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 13:42
 */

class DirectSource implements Source
{
    private $html;

    /**
     * DirectSource constructor.
     * @param $html
     * @throws ParserException
     */
    public function __construct($html)
    {
        $this->html = trim($html);
        if (!$this->html) throw new ParserException('Direct source is empty');
    }

    /**
     *
     * @return string HTML
     */
    public function get()
    {
        return $this->html;
    }
}
