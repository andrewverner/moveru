<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 14:10
 */

class FileSource implements Source
{
    private $filePath;

    /**
     * FileSource constructor.
     * @param $filePath
     * @throws ParserException
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
        if (!file_exists($this->filePath)) throw new ParserException('Source file not found');
    }

    /**
     * @return string HTML from file
     * @throws ParserException
     */
    public function get()
    {
        $source = file_get_contents($this->filePath);
        if (!$source) throw new ParserException('Can\'t read the file');
        return $source;
    }
}
