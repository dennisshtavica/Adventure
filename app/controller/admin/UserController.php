<?php


namespace App\Controller\Admin;

use App\Controller\BaseController;

class UserController extends BaseController
{
    /**
     * Show the login from.
     */
    public function index()
    {
        return view('admin/users/index', "", false);
    }
}
