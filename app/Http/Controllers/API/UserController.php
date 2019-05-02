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
        $response = [];
        $response["status_code"] = 200;

        if($id){
            $user = User::find($id);
            if($user != null) {
                $response["data"] = $user->toArray();
            } else {
                $response["data"] = ["message" => "User ID not found"];
            }
        } else {
            $response["status_code"] = 422;
            $response["data"] = ["data" => ["message" => "Something went wrong"]];
        }

        return response($response, $response["status_code"]);
    }
}