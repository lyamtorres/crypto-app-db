<?php

namespace Controllers;

use App\Models\Crypto;
use App\Models\Dbh;
use Util\View;

class CryptoController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
         if(ENVIRONMENT == 'development') {
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
        }
    }

    public function search()
    {
        $crypto = new Crypto();
        $list = $crypto->read();

        echo $this->view->render('crypto', compact('list'));
    }
}