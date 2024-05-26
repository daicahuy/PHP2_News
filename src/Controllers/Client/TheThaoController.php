<?php

namespace Assignment\Php2News\Controllers\Client;

use Assignment\Php2News\Commons\Controller;

class TheThaoController extends Controller
{
    public function theThao()
    {
        $this->renderViewClient('thethao');
    }
}
