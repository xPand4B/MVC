<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\Config;

class Config extends ConfigReader
{
    /**
     * Get the config based of the name.
     *
     * @method string App\Core\Config\ConfigReader::SearchFor(string $argument)
     * 
     * @param string $name
     *
     * @return string
     */
    public static function GetConfig(string $name)
    {
        return ConfigReader::SearchFor($name);
    }
}
