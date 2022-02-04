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

    public function listCryptocurrencies()
    {
        $json = file_get_contents(__DIR__ . '/../../crypto.json');
        $tab = json_decode($json, true);
        $list = [];

        foreach ($tab['cryptocurrencies'] as $cryptocurrency) {
            $id = $cryptocurrency['id'];
            $name = $cryptocurrency['name'];
            $symbol = $cryptocurrency['symbol'];
            $price = $cryptocurrency['price'];
            $supply = $cryptocurrency['supply'];
            $category = $cryptocurrency['category'];
            $date = $cryptocurrency['date'];
            $project = $cryptocurrency['project'];

            $crypto = new Crypto($id, $name, $symbol, $price, $supply, $category, $date, $project);

            array_push($list, $crypto);
        }

        echo $this->view->render('cryptocurrencies/cryptocurrency', compact('list'));
    }
}