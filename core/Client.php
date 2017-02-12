<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 13:59
 */

class Client
{
    private $parsers = [];
    private $source;
    private $reporter;

    /**
     * Creates new HTML parser client
     *
     * Client constructor.
     * @param Source $source
     * @param Reporter|null $reporter
     */
    public function __construct(Source $source, Reporter $reporter = null)
    {
        $this->source = $source;
        $this->reporter = $reporter;
    }

    /**
     * Adds new parser to the client
     *
     * @param Parser $parser
     */
    public function addParser(Parser $parser)
    {
        if (!in_array($parser, $this->parsers)) $this->parsers[] = $parser;
    }

    /**
     * Collect data and runs result generation process
     *
     * @throws ParserException
     * @return mixed result as XML, HTML or an array
     */
    public function parse()
    {
        $counter = [];
        $html = $this->source->get();

        if (!$html) throw new ParserException('Source is empty');

        preg_match_all($this->constructMask(), $html, $matches);
        foreach ($matches[1] as $match) {
            (isset($counter[$match])) ? $counter[$match]++ : $counter[$match] = 1;
        }

        ksort($counter);
        ($this->reporter) ? $this->reporter->report($counter) : $counter;
    }

    /**
     * Construct mask for parsing using all of parser
     *
     * @return string
     */
    private function constructMask()
    {
        $masks = [];

        foreach ($this->parsers as $parser) {
            $masks[] = $parser->getMask();
        }

        $mask = implode('|', $masks);
        return "/<({$mask})/";
    }

}
