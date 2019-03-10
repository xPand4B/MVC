<?php
/**
 * @package   xPand4B/Portfolio
 * @author    Eric Heinzl <eric.heinzl@gmail.com>
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
    public function index(): void
    {
        echo '<br>'.__METHOD__.'<br>';
        
        $this->view('pages.home');
    }

    /**
     * Displays imprint
     * 
     * @return void
     */
    public function imprint(): void
    {
        echo '<br>'.__METHOD__.'<br>';
        
        $this->view('pages.imprint');
    }
}
