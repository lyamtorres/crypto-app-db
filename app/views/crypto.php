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
</head>

<body>

<section>
    <h1>Cryptomonnaies</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Symbole</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantité</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Date de création</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i = 0; $i < sizeof($list); $i++) {
                    echo '<tr>';
                    echo '<th scope="row">'.$list[$i]->getId().'</th>';
                    echo '<td>'.$list[$i]->getName().'</td>';
                    echo '<td>'.$list[$i]->getSymbol().'</td>';
                    echo '<td>'.$list[$i]->getPrice().'</td>';
                    echo '<td>'.$list[$i]->getSupply().'</td>';
                    echo '<td>'.$list[$i]->getCategory().'</td>';
                    echo '<td>'.$list[$i]->getDate().'</td>';
                    echo '<td><button class="btn btn-success">Modifier</button></td>';
                    echo '<td><button class="btn btn-danger">Effacer</button></td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
    <button type="submit" id="add" class="btn btn-default">Ajouter</button>
<section>

</body>

</html>
