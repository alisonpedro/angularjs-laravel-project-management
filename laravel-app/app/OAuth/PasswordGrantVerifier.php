<?php
/**
 * Created by PhpStorm.
 * User: SUPORTE
 * Date: 16/10/2015
 * Time: 11:13
 */

namespace CodeProject\OAuth;

use Illuminate\Support\Facades\Auth;

class PasswordGrantVerifier
{

    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }


}