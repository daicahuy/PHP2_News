<?php

namespace Assignment\Php2News\Commons;


class Helper
{
    // Hàm debug: hiển thị ra dữ liệu và die luôn
    public function debug($data)
    {
        echo "<pre>";
        var_dump($data);
        die;
    }

}
