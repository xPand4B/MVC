<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\Translation;

class TranslationReader
{
    /**
     * Language file directory
     *
     * @var string
     */
    private static $lang = __DIR__.'/../../../resources/lang/';

    /**
     * Search a Translation based on the selected language and $name.
     *
     * @param string $name
     *
     * @return string
     */
    protected static function SearchFor(string $name = "")
    {
        if (empty($name)){
            return "";
        }

        // Split input into array
        $data = \explode('.', $name);

        // Get Translation Lines based of the
        $transFile  = self::$lang.'en/'.$data[0].'.php';
        $transLines = require $transFile;

        // Re-index array
        $data = \array_splice($data, 1, \sizeof($data) - 1);
        
        $tmp = $transLines[$data[0]];

        for($i = 1; $i < \sizeof($data); ++$i){
            $tmp = $tmp[$data[$i]];
        }
        
        return $tmp;
    }
}
