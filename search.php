<?php
    include 'header.php';
    include 'navbar.php';
    include_once 'functions.php';
    
    // loads search bar
    SearchBar();
    if (isset($_GET['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_GET['search']); // stores search
        $sql = "SELECT * FROM information WHERE db_name LIKE '%$search%'"; 
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0 && strlen($search) > 1) { //cheks for queryresult and if user typed something in search bar, no 1 letter search
            WriteProducts($result, $rowCount, $XS, $SM, $MD, $LG);
        } 
        else if($queryResult > 0 && strlen($search) == 0) {  //shows all products
            echo '<h3 class="center">Všechno</h3>';
            WriteProducts($result, $rowCount, $XS, $SM, $MD, $LG);
        }
        else if ($queryResult > 0 && strlen($search) > 1) { //if user types 1 letter in search
            echo "<h1 class='center'>Žádné výsledky</h1>";
        } 
        else { 
            echo "<h1 class='center'>Žádné výsledky</h1>";
        } 
    }
    echo '<br>';
    Footer();
?>
