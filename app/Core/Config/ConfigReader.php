<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\Config;

class ConfigReader
{
    /**
     * Config file directory
     *
     * @var string
     */
    private static $dir = __DIR__.'/../../../config/';

    /**
     * Search a Config based on the $argument.
     *
     * @param string $argument
     *
     * @return string
     */
    protected static function SearchFor(string $argument = "")
    {
        if (empty($argument)){
            return "";
        }

        // Split input into array
        $data = explode('.', $argument);

        $configFile = self::$dir.'/'.$data[0].'.php';

        if(!file_exists($configFile)){
            return;
        }

        // Get Config based of the
        $config = require $configFile;

        // Re-index array
        $data = array_splice($data, 1, sizeof($data) - 1);
        
        $tmp = $config[$data[0]];

        for($i = 1; $i < sizeof($data); ++$i){
            $tmp = $tmp[$data[$i]];
        }
        
        return $tmp;
    }
}
