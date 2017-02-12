<?php
/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 12:21
 */

spl_autoload_register(
    function ($className) {
        if (file_exists("{$className}.php")) {
            include "{$className}.php";
        } elseif (file_exists("parser/{$className}.php")) {
            include "parser/{$className}.php";
        } elseif (file_exists("reporter/{$className}.php")) {
            include "reporter/{$className}.php";
        } elseif (file_exists("source/{$className}.php")) {
            include "source/{$className}.php";
        } elseif (file_exists("core/{$className}.php")) {
            include "core/{$className}.php";
        }
    }
);

try {
    //Creating a new parser client with URL-source and XML reporter
    $client = new Client(new UrlSource('http://move.ru/'), new XMLReporter());

    //Adding parsers
    //$client->addParser(new AllTagsParser());
    $client->addParser(new AnchorParser());
    $client->addParser(new ImageParser());
    $client->addParser(new TableParser());
    $client->addParser(new UserDefineParser('dd|link|form|input|select|option'));

    //Getting result
    $client->parse();
} catch (ParserException $e) {
    echo "ParserException: {$e->getMessage()}";
} catch (Exception $e) {
    echo "Exception: {$e->getMessage()}";
}
