<?php

namespace Assignment\Php2News\Commons;

use eftec\bladeone\BladeOne;

class Controller extends Helper
{
    public function renderViewAdmin($view, $data = [])
    {
        $templatePath = __DIR__ . "/../Views/Admin";

        $blade = new BladeOne($templatePath);

        echo $blade->run($view, $data);
    }

    public function renderViewClient($view, $data = [])
    {
        $templatePath = __DIR__ . "/../Views/Client";

        $blade = new BladeOne($templatePath);

        echo $blade->run($view, $data);
    }
}
