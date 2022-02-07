<?php

namespace Controllers;

use App\Models\Crypto;
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

    // Charge la page d'accueil
    public function index()
    {
        $crypto = new Crypto();
        $list = $crypto->read();

        echo $this->view->render('index', compact('list'));
    }

    // Charge le formulaire d'ajout / modification des cryptos
    public function form() {
        echo $this->view->render('form', null);
    }

    public function insert() {
        $crypto = new Crypto();
        $crypto->create($_POST['id'], $_POST['name'], $_POST['symbol'], $_POST['price'], $_POST['supply'], $_POST['category'], $_POST['date']);

        header('Location: /apps/crypto-app-db/public/index.php/CryptoController/form');
    }

}