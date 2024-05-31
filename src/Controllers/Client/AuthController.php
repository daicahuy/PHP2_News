<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class AuthController extends Controller
{
    public function logIn()
    {
        return $this->renderViewClient('pages.auth.login');
    }
    public function signUp()
    {
        return $this->renderViewClient('pages.auth.sign-up');
    }

    public function forgotPassword()
    {
        return $this->renderViewClient('pages.auth.forgot-password');
    }

    public function confirmToken()
    {
        // Code confirm token...
        // echo $_GET["token"];
        return $this->renderViewClient('pages.auth.confirm-success');
        // return $this->renderViewClient('pages.auth.confirm-fail');
    }
}
