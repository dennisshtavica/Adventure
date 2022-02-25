<?php


namespace App\Controller\Auth;
require ("./database/Connection.php");
use App\Controller\BaseController;
use App\Controller\UserController;
use App\Database\Connection;
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
      $this->validate($request,['name','email','password','confirm_password']);

        $name = $_POST['name'];
        $email = $_POST['email'];
       $password = $_POST['password'];


        // ruajtja ne databaz
        $connection = new Connection();
        $cnn = $connection->open();
        $registerQuery = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
        $query = $cnn->prepare($registerQuery);
        $query->execute();
        if($query->error){
            http_response_code(500);
            throw new \mysqli_sql_exception($query->error);
        }
        $connection->close();
    }
}
