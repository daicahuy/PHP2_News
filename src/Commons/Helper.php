<?php

namespace Assignment\Php2News\Commons;


class Helper
{
    // Hàm debug: hiển thị ra dữ liệu và die luôn
  
    public static function debug($data)
    {
        echo "<pre>";

        print_r($data);
        
        die;
    }

}
