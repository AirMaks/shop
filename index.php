<?php
require_once './products.php'; // Подключили файл с скриптом
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Интернет магазин одежды</title>


    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/album.css" rel="stylesheet">

</head>

<body>

<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background
                    context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them
                    off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Follow on Twitter</a></li>
                    <li><a href="#" class="text-white">Like on Facebook</a></li>
                    <li><a href="#" class="text-white">Email me</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>




<div class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
        <a href="https://www.gucci.com/int/en/st/stories/runway" class="navbar-brand" target="_blank">Album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>

<section class="jumbotron text-center" style="height: 300px">
    <div class="container">

        <a href="http://www.matchesfashion.com/intl/?noattraqt=Set" style="text-decoration: none"><h1 class="jumbotron-heading" style= "font-size: 300%"><strong style="color: darkgoldenrod">Luxury Clothing</strong></h1></a>
        <p class="lead text-muted">New collection <a href="https://www.vogue.ru/collection/autumn_winter2017/pre-fall/milan/Gucci/">FALL-WINTER</a></p>
        <p>
            <a href="http://www.prada.com/en/WW/e-store/department/woman/new-arrivals.html?cc=WW" class="btn btn-primary">WOMEN</a>
            <a href="http://www.prada.com/en/WW/e-store/department/man/new-arrivals.html?cc=WW" class="btn btn-dark">MEN</a>
        </p>
    </div>
</section>

<div class="album text-muted">
    <div class="container">

        <div class="row" style="width: 114%">



            <?php foreach ($products as $product) : ?>
                <div class="card" align="center">

                    <a href="<?= $product['linkImage']?>"><h6 style="color: navy"><strong style="font-size: larger"> <?= $product['name'] ?></strong></h6></a>
                    <span style="font-family: David"><strong style="color: crimson">From: $<?= $product['price'] ?></strong></span>
                    <a href="<?= $product['linkImage']?>"><p style="color: #491217"><strong style="color: #bd2130"> <?= $product['description'] ?></strong></p></a>
                    <a href="<?= $product['linkImage']?>"  target="_blank" ><img src="<?= $product['image'] ?>" ></a><br>
                    <a href="<?= $product['linkImage']?>" target="_blank" class="btn btn-outline-dark">Buy</a>

                </div>
            <?php endforeach; ?>

        </div>

    </div>
</div>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Original clothing&copy;</p>
        <p style="color: violet"><strong>New York Paris Milan</strong></p>
    </div>
</footer>

</body>
</html>