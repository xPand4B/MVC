<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/Portfolio
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{

    /**
     * Displays Homepage
     *
     * @return void
     */
    public function index()
    {
        echo '<br>'.__METHOD__.'<br>';

        
        return view('pages.home');
    }

    /**
     * Displays imprint
     * 
     * @return void
     */
    public function imprint()
    {
        echo '<br>'.__METHOD__.'<br>';
        
        return view('pages.imprint');
    }
}
