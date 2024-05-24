<?php

namespace Assignment\Php2News\Common;


class Helper
{
    public function debug($data)
    {
        echo "<pre>";
        var_dump($data);
        die;
    }

    public function e404()
    {
    }
}
