<?php 
    include 'header.php';

    // FUNCTION 1
    //collumn width
    $XS = 12;
    $SM = 6;
    $MD = 6;
    $LG = 4;
    $rowCount = 0;
    // structures and writes the products on search page and serach by cards 
    function WriteProducts($result, $rowCount, $XS, $SM, $MD, $LG){ 
        echo '<div class="container container-style">';
            while ($row = mysqli_fetch_assoc($result)) {
                if ($rowCount % $MD == 0) {
                    echo '<div class="row">';
                }
                $rowCount++;
                echo '<div class="width-row row-stylez center col-xs-' . $XS .'col-sm-' . $SM.' col-md-' . $MD.' col-lg-' . $LG.'">';
                $singleProductIndex = $row['db_index']; // displays searched products
                $singleProductName = $row['db_name'] . " ";
                $singleProductPrice = $row['db_price'] . " ";
                $singleProductWeightPerKg = $row['db_weight_per_kg'];
                $singleProductWeight = $row['db_weight'];
                $img = $row['db_url'];
                // stores information in the URL of the product that user has clicked and sends it to page single_product_page
                echo "<a href='single_product_page.php?id=$singleProductIndex&name=$singleProductName&price=$singleProductPrice&weight=$singleProductWeight&weightKg=$singleProductWeightPerKg&url=$img'><img id='single-img-product' src='$img' alt='db_name'/></a>"; 
                echo "<br>";
                echo '<div class="name">';
                    echo "<a href='single_product_page.php?id=$singleProductIndex&name=$singleProductName&price=$singleProductPrice&weight=$singleProductWeight&weightKg=$singleProductWeightPerKg&url=$img'>$singleProductName</a>";
                echo '</div>';
                echo '<div class="price">';
                    $singlePriceFormat = number_format((double)$singleProductPrice, 2, "," , ",");
                    echo $singlePriceFormat . " Kč";
                echo '</div>';
                echo "</div>";

                if ($rowCount % $MD == 0) {
                    echo '</div>';
                }
            }  
            echo '</div>';
    }

    // FUNCTION 2
    // function that shows search bar
    function SearchBar(){
        echo '
        <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="form-inline md-form mr-auto" action="search.php" method="GET">
                        <div class="input-group">
                        <input class="form-control border border-dark" type="text" name="search" placeholder="Hledat">
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
        </header>';
    }

    // FUNCTION 3
    function Footer(){
        $year = date("Y");
        echo '
        </div>
            <footer>
                <h3 class="ftr center" style="padding-top: 1.3%;"><i class="fa fa-copyright" aria-hidden="true"></i> '. $year .' Vanja Aleksić</h3>
            </footer>
        ';
    }

    // FUNCTION 4
    // shows results on single product page
    function SinglePageResults($result, $rowCount, $XS, $SM, $MD, $LG){
        echo '<div class="container">';
        while ($row = mysqli_fetch_assoc($result)) {
            if ($rowCount % $LG == 0) {
                echo '<div class="row">';
            }
            $rowCount++;
            echo '<div class="row-stylez col-xs-' . $XS .'col-sm-' . $SM.' col-md-' . $MD.' col-lg-' . $LG.'">';
            $singleProductIndex = $row['db_index']; // displays searched products
            $singleProductName = $row['db_name'] . " ";
            $singleProductPrice = $row['db_price'] . " ";
            $singleProductWeightPerKg = $row['db_weight_per_kg'];
            $singleProductWeight = $row['db_weight'];
            $img = $row['db_url'];
            echo "<br>";
            echo '<div class="name">';
                echo "<a href='single_product_page.php?id=$singleProductIndex&name=$singleProductName&price=$singleProductPrice&weight=$singleProductWeight&weightKg=$singleProductWeightPerKg&url=$img'>$singleProductName</a>";
            echo '</div>';
            echo '<div class="price">';
                $singlePriceFormat = number_format((double)$singleProductPrice, 2, "," , ",");
                echo $singlePriceFormat . " Kč";
            echo '</div>';
            echo "</div>";

            if ($rowCount % $LG == 0) {
                echo '</div>';
            }
        }  
        echo '</div>';
    }
?>