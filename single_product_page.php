<?php 
    include 'header.php';
    include 'navbar.php';
    include_once 'functions.php';

    SearchBar();
    // stores user clicked product data
    $singleID = $_GET['id'];
    $singleName = $_GET['name'] . " ";
    $singleWeight = $_GET['weight'] . " ";
    $singlePrice = $_GET['price'] . " ";
    $singleWeightKg = $_GET['weightKg'];
    $singleURL = $_GET['url'];
    $singlePriceFormat = number_format((double)$singlePrice, 2, "," , ",");

    echo '
    <div class="container container-style">
        <div class="row center">
            <div class="col-12">
                <img id="single-img" src="' .$singleURL .'">' . '<br>' .
                '<div class="name-center">' . $singleName . $singleWeightKg . '</div>' . '<div class="price-center">' .$singlePriceFormat . " Kč" . '</div>'. 
            '</div>
        </div>
    </div>';
    echo '<br>';
    
    // user clicked product
    // selects products with same weight, removes the clicked one
    $sql = "SELECT * FROM information WHERE db_weight = '$singleWeight' AND db_index != '$singleID'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    // selects all products with same price
    $sqlB = "SELECT * FROM information WHERE db_price = '$singlePrice' AND db_index != '$singleID'";
    $resultB = mysqli_query($conn, $sqlB);
    $queryResultB = mysqli_num_rows($resultB);

    //echo $queryResultB;

    //shows products with same weight
    if ($queryResult > 0) { 
        echo '<h4 class="center header-style"><i class="fas fa-weight"></i> Pečivo se stejnou váhou</h4>';
        SinglePageResults($result, $rowCount, $XS, $SM, 6, 6,);
        echo '</div>';
    }
    echo '<br>';
    if ($queryResultB > 0) { //shows products with same price
        echo '<h4 class="center header-style"><i class="fas fa-dollar-sign"></i> Pečivo se stejnou cenou </h4>';
        SinglePageResults($resultB, $rowCount, $XS, $SM, 6, 6,);
        echo '</div>';
    }
    echo '</div>';
    echo '<br>';
    Footer();
?>
