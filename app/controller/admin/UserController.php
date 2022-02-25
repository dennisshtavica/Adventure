<?php


namespace App\Controller\Admin;
require ("./database/Connection.php");

use App\Controller\BaseController;
use App\Database\Connection;

class UserController extends BaseController
{
    /**
     * Show the login from.
     */
    public function index()
    {
        $connection = new Connection();
        $cnn = $connection->open();
        $stmt = $cnn->prepare("SELECT * FROM `user`");
        $stmt->execute();
        $results = $stmt->get_result();
        $users = array();
        while ($res = $results->fetch_object()) {
            array_push($users, $res);
        }
        $connection->close();
        return view('admin/users/index', [
            "users" => $users
        ], false);
    }
}
