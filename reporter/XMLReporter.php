<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 14:33
 */

class XMLReporter implements Reporter
{
    private $fileName;

    /**
     * Creates new XML reporter. Renders result in browser or creates a file
     *
     * XMLReporter constructor.
     * @param bool $fileName
     */
    public function __construct($fileName = false)
    {
        $this->fileName = $fileName;
    }

    /**
     * Creates XML structure
     *
     * @param array $counter
     * @throws ParserException
     */
    public function report(array $counter)
    {
        $xml = new SimpleXMLElement('<HTMLParser></HTMLParser>');

        $message = $xml->addChild('message');
        $message->addAttribute('code', (!empty($counter)) ? 1 : 0);
        $message->addAttribute('description', (!empty($counter)) ? 'See results below' : 'There are no HTML tags');

        if (!empty($counter)) {
            $result = $xml->addChild('result');
            foreach ($counter as $tagName => $count) {
                $tag = $result->addChild('tag');
                $tag->addAttribute('name', $tagName);
                $tag->addAttribute('count', $count);
            }
        }

        if ($this->fileName) {
            if (!$xml->asXML($this->fileName)) throw new ParserException('Can\'t save result into XML file');
            echo 'You can find results <a href="' . $this->fileName . '" target="_blank">here</a>';
        } else {
            Header('Content-type: text/xml');
            echo $xml->asXML();
        }
    }
}
