<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 14:05
 */

class UrlSource implements Source
{
    private $url;

    /**
     * UrlSource constructor.
     * @param $url
     * @throws ParserException
     */
    public function __construct($url)
    {
        $this->url = $url;
        if (!filter_var($this->url, FILTER_VALIDATE_URL)) throw new ParserException('URL is not valid');
    }

    /**
     * @return string HTML from URL
     * @throws ParserException
     */
    public function get()
    {
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $source = curl_exec($ch);
        if (!$source) throw new ParserException('Can\'t access to the given URL');
        return $source;
    }
}
