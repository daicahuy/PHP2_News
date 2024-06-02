<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;
use Assignment\Php2News\Commons\Helper;
use Assignment\Php2News\Models\User;

class AuthController extends Controller
{

    private User $user;

    public function __construct()
    {
        $this->user = new User;
    }
    
    // Hàm logIn: Đăng nhập
    public function logIn()
    {
        return $this->renderViewClient('pages.auth.login');
    }


    // Hàm signUp: Đăng ký
    public function signUp()
    {
        if(isset($_POST['btn-sign-up'])) {

            $validation = Helper::validate(
                $_POST + $_FILES,
                [
                    'name'                  => 'required',
                    'email'                 => 'required|email',
                    'password'              => 'required|min:6',
                    'confirm_password'      => 'required|same:password',
                    'avatar'                => 'uploaded_file:0,500K,png,jpg,jpeg'
                ]
            );

            if(empty($validation)) {

                $this->user->connect->beginTransaction();

                try {

                    if($_FILES['avatar']['error'] == 0) {
                        $nameAvatar = Helper::uploadFile($_FILES['avatar'], 'users\\');
                    }
    
                    $token = Helper::createToken();
    
                    $id = $this->user->insert(
                        [
                            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                            'email' => $_POST['email'],
                            'name' => $_POST['name'],
                            'role' => 0,
                            'avatar' => isset($nameAvatar) ? $nameAvatar : 'uploads/users/default.png',
                            'status' => 1,
                            'token' => $token
                        ]
                    );
    
                    $user = $this->user->getByID($id, ['id', 'name', 'email']);
    
                    // Config email
                    $title = "Confirm Your Account";
                    $content = "
                                Dear {$user['name']},
                                <br> <br>
                                Please click here to confirm your account.
                                <h4><a href='{$_ENV['BASE_URL']}auth/confirm-token?email={$user['email']}&act=confirm-account&token=$token'>Confirm Account</a></h4>
                    ";
    
                    if(Helper::sendEmail( $user['email'], $title, $content)) {
                        
                        $this->user->connect->commit();
    
                        $_SESSION['notify']['success'][] = "Please check {$user['email']} to cofirm account";
                    };

                }
                catch(\Throwable $e) {

                    $this->user->connect->rollBack();

                    $_SESSION['notify']['danger'][] = $e->getMessage();

                }

                return $this->renderViewClient('pages.auth.page-status');
            }
            else {
                foreach($validation as $name => $error) {
                    $_SESSION['error'][$name] = $error;
                }
            }
        }
        return $this->renderViewClient('pages.auth.sign-up');
    }


    // Hàm forgotPassword: Quên mật khẩu
    public function forgotPassword()
    {
        return $this->renderViewClient('pages.auth.forgot-password');
    }

    // Hàm confirmToken:
    public function confirmToken()
    {
        // Code confirm token...
        // echo $_GET["token"];
        return $this->renderViewClient('pages.auth.confirm-success');
        // return $this->renderViewClient('pages.auth.confirm-fail');
    }
}
