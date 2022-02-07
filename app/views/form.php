<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</header>

<body>
<div class="container">
    <h1>Ajouter une cryptomonnaie</h1>
    <hr>

    <form action="/apps/crypto-app-db/public/index.php/CryptoController/insert" method="post">
        <div class="form-group col-md-6">
            <label for="id">Id</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="1">
        </div>

        <div class="form-group col-md-6">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Bitcoin">
        </div>

        <div class="form-group col-lg-6">
            <label for="symbol">Symbole</label>
            <input type="text" class="form-control" id="symbol" name="symbol" placeholder="BTC">
        </div>

        <div class="form-group col-lg-6">
            <label for="price">Prix</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="33823.23">
        </div>

        <div class="form-group col-lg-6">
            <label for="supply">Quantité</label>
            <input type="number" class="form-control" id="supply" name="supply" placeholder="21000000">
        </div>

        <div class="form-group col-lg-6">
            <label for="category">Categorie</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Coin">
        </div>

        <div class="form-group col-lg-6">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>

        <input type="submit" class="btn btn-success" name="add" value="Ajouter">
        <a href="/apps/crypto-app-db/public/index.php/CryptoController/index" type="button" class="btn btn-danger">Annuler</a>
    </form>
</div>
</body>
</html>