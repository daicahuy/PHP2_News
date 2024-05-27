<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class LogInController extends Controller
{
    public function quenMatKhau()
    {
        $data = ['title' => 'Quên mật khẩu'];
        $this->renderViewClient('login.quenmatkhau', $data);
    }
    public function dangNhap()
    {
        $data = ['title' => 'Đăng nhập'];
        $this->renderViewClient('login.dangnhap', $data);
    }
    public function dangKy()
    {
        $data = ['title' => 'Đăng ký'];
        $this->renderViewClient('login.dangky', $data);
    }

    public function xacNhan()
    {
        $data = ['title' => 'Xác nhận OTP'];
        $this->renderViewClient('login.xacnhan', $data);
    }
}
