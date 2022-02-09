<?php


namespace App\Controller;

use App\Controller\BaseController;

class HomeController extends BaseController
{
    /**
     * Show the login from.
     */
    public function homePage()
    {
        return view('index', "", false);
    }
}
