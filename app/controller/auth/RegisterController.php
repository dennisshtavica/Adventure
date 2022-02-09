<?php


namespace App\Controller\Auth;

use App\Controller\BaseController;
use App\Controller\UserController;
use App\Student;
use App\User;

class RegisterController extends BaseController
{
    /**
     * Show the register form
     */
    public function form()
    {
        if(isAuthenticated())
            redirect('/');
        return view('register',"",false);
    }

    /**
     * Register new user.
     *
     * @param array $request
     */
    public function register($request)
    {
        var_dump($request);
//        $this->validate($request,['name','email','password','confirm_password']);

        $name = $request['name'];
        $email = $request['email'];
//        $email = $request['email']; ...

        // ruajtja ne databaz



    }
}
