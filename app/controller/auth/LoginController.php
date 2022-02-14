<?php

namespace App\Controller\Auth;
require ("./database/Connection.php");

use App\Controller\BaseController;
use App\Database\Connection;
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
        // select a particular user by id
        $connection = new Connection();
        $cnn = $connection->open();
        $stmt = $cnn->prepare("SELECT * FROM `user` WHERE email=?");
        $stmt->bind_param('s', $request["email"]);
        $stmt->execute();
        $results = $stmt->get_result();
        $user = null;
        while ($res = $results->fetch_object()) {
            $user = $res;
        }
        $connection->close();
        var_dump($user);
        $success = false;
        if($user) {
            // if (passwordi qe e ka shkrujt useri a osht i njejt ne databaz)
            if ($request["password"] == $user->password) {
                $_SESSION["logged_in"] = true;
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
