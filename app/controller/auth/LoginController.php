<?php


namespace App\Controller\Auth;

use App\Controller\BaseController;
use App\User;

class LoginController extends BaseController
{
    /**
     * Show the login from.
     */
    public function form(){
        if(isAuthenticated())
            redirect('/');
        return view('layout/app',"",false);
    }

    /**
     * User login.
     * @param array $request
     */
    public function login($request)
    {
        $this->validate($request,['email','password']);
        $user = null; // Merre userin nga databaza permes email
        $success = false;
        if($user) {
            // if (passwordi qe e ka shkrujt useri a osht i njejt ne databaz)
            if (password_verify($request["password"], $user->password)) {
                $_SESSION["logged_in"] = true;
                $userData = [
                    "name" => "$user->first_name $user->last_name",
                    "user_id" => $user->user_id,
                    "role" => $user->role->title
                ];
                setcookie("auth", "1",time()+86000,"/");
                setcookie("user", json_encode($userData),time()+86000,"/");
                $success = true;
            }
        }
        if($success){
            return responseJson("success");
        } else {
            return responseJson("Email ose fjalkalimi është gabim.", 422);
        }
    }

    /**
     * Logout user and destroy session.
     */
    public function logout()
    {
        session_destroy();
        setcookie("auth", "", time()-3600);
        setcookie("user", "", time()-3600);
        redirect('/login');
    }
}
