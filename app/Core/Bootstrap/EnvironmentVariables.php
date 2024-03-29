<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\Bootstrap;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidFileException;
use Dotenv\Exception\InvalidPathException;
use Dotenv\Exception\ValidationException;

class EnvironmentVariables
{
    /**
     * Load the environment variables.
     *
     * @package https://github.com/vlucas/phpdotenv
     * 
     * @param string $environmentPath
     * @param string $environmentFile
     */
    public static function load($environmentPath, $environmentFile)
    {
        try{
            $dotenv = Dotenv::create($environmentPath, $environmentFile);
            $dotenv->load();

            $dotenv->required('APP_NAME')->notEmpty();

            $dotenv->required('DB_HOST')->notEmpty();
            $dotenv->required('DB_DATABASE');
            $dotenv->required('DB_USERNAME')->notEmpty();
            $dotenv->required('DB_PASSWORD');

        }catch(ValidationException $e){
            echo 'Some important environment variables are missing: '.$e->getMessage();
            die(1);

        }catch(InvalidPathException $e){
            echo 'The environment path is invalid: '.$e->getMessage();
            die(1);

        }catch(InvalidFileException $e){
            echo 'The environment file is invalid: '.$e->getMessage();
            die(1);
        }
    }
}
