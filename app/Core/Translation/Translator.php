<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\Translation;

class Translator extends TranslationReader
{
    /**
     * Get translation based of the name.
     *
     * @method App\Core\Translation\TranslationReader::SearchFor()
     * @param string $name
     *
     * @return string
     */
    public static function GetTranslation(string $name = null): string
    {
        return TranslationReader::SearchFor($name);
    }
}
