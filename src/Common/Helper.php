<?php

namespace Assignment\Php2News\Common;


trait Helper
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
