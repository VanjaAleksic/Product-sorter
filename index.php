<?php
    include 'header.php';
    include 'navbar.php';
    include_once 'functions.php';
?>
<!-- search form -->
<header>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form class="form-inline md-form mr-auto" id="search-form" action="search.php" method="GET">
                <div class="input-group">
                <input class="form-control border" type="text" name="search" placeholder="Hledat">
                <span class="input-group-btn">
                <button class="btn btn-dark " type="submit" name="submit-search">
                    <i class="fa fa-search"></i>
                </button>
                </span>
                </div>
            </form>
        </div>
    </div>
</div>
</header>

<!-- Product Card Selection -->
<div class="container">
    <div class="row mx-0">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-2 center img-margin">
            <div class="product-img-border content">
                <a class="card-text-style" href="search.php?search=&submit-search="><h4 class="h4-style">Všechno</h4></a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-2 center img-margin">
            <div class="product-img-border content">
                <a class="card-text-style" href="search_by_cards.php?id=1">Sladké pečivo</a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-2 center img-margin">
            <div class="product-img-border content">
                <a class="card-text-style" href="search_by_cards.php?id=2">Slané pečivo</a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-2 center img-margin">
            <div class="product-img-border content">
                <a class="card-text-style" href="search_by_cards.php?id=3">Světlé pečivo</a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-2 center img-margin"> 
            <div class="product-img-border content">
                <a class="card-text-style" href="search_by_cards.php?id=4">Vícezrnné pečivo</a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-2 center img-margin">
            <div class="product-img-border content">
                <a class="card-text-style" href="search_by_cards.php?id=5">Chléb</a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php 
    Footer();
?>
</body>
</html>

