<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/2/2019
 * Time: 2:19 AM
 */

namespace App\Http\Controllers\Api;

use App\User;

class UserController
{
    public function getUserData($id)
    {
        if($id){
            $user = User::find($id);
            $data = ["success" => true, "data" => $user->toArray()];
            return response($data, 200);
        } else {
            $data = ["success" => false, "data" => ["message" => "User ID not found"]];
            return response($data, 422);
        }
    }
}