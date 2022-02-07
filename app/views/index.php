<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Cryptomonnaies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>

<div class="container">
    <h1>Cryptomonnaies</h1>
    <hr>
    <form action="/apps/crypto-app-db/public/index.php/CryptoController/form" method="post">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Symbole</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < sizeof($list); $i++) {
                    echo '<tr>';
                    echo '<td>'.$list[$i]->getName().'</td>';
                    echo '<td>'.$list[$i]->getSymbol().'</td>';
                    echo '<td><a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseCrypto' .
                        $list[$i]->getId() . '" role="button" aria-expanded="false" aria-controls="collapseCrypto' .
                        $list[$i]->getId() . '">Afficher détails</a>';
                    echo '<div class="collapse" id="collapseCrypto' . $list[$i]->getId() . '">';
                    echo '<div class="card card-body">';
                    echo 'Prix : '.$list[$i]->getPrice().'<br>';
                    echo 'Quantité : '.$list[$i]->getSupply().'<br>';
                    echo 'Catégorie : '.$list[$i]->getCategory().'<br>';
                    echo 'Date de création : '.$list[$i]->getDate().'<br>';
                    echo '</div>';
                    echo '</div>';
                    echo '<td><button class="btn btn-success">Modifier</button></td>';
                    echo '<td><button class="btn btn-danger">Effacer</button></td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
        <button type="submit" id="add" class="btn btn-default">Ajouter</button>
    </form>
</div>

</body>

</html>