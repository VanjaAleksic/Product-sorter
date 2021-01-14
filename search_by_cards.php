<?php
    include 'header.php';
    include 'navbar.php';
    include_once 'functions.php';

    // loads search bar
    SearchBar();
    $cardType = $_GET['id'];
    if ($cardType == 1) { // sweet pastry
        $sql = "SELECT * FROM information WHERE db_index IN (19, 16, 18, 21, 23, 20, 24, 27, 29, 30, 58, 36, 39, 48, 47, 46, 49, 26, 51, 59, 61, 62, 63, 60, 66, 75, 89, 84, 90, 45)";
        $name = "Sladké pečivo";
    }
    else if ($cardType == 2) { // salty pastry
        $sql = "SELECT * FROM information WHERE db_index IN (9, 13, 17, 25, 35, 42, 34, 37, 40, 41, 56, 57, 67, 65, 76, 64, 38, 44)";
        $name = "Slané pečivo";
    }
    else if ($cardType == 3) { // light pastry
        $sql = "SELECT * FROM information WHERE db_index IN (0, 1, 2, 3, 4, 5, 6, 8, 10, 14, 22, 28, 33, 52)";
        $name = "Světlé pečivo";
    }
    else if ($cardType == 4) { // Multigrain bread
        $sql = "SELECT * FROM information WHERE db_index IN (7, 11, 12, 32, 15, 38, 50)";
        $name = "Vícezrnné pečivo";
    }
    else if ($cardType == 5){ // bread
        $sql = "SELECT * FROM information WHERE db_index NOT IN (19, 16, 18, 21, 23, 20, 24, 27, 29, 30, 58, 36, 39, 48, 47, 46, 49, 26, 51, 59, 61, 62, 63, 60, 66, 75, 89, 84, 90, 45, 9, 13, 17, 25, 35, 42, 34, 37, 40, 41, 56, 57, 67, 65, 76, 0, 1, 2, 3, 4, 5, 6, 8, 10, 14, 22, 28, 33, 52, 64, 38, 44, 11, 12, 4, 7, 32, 15, 50)";
        $name = "Chléb";
    }
    else {
        echo '<h1 class="center">Chyba</h1>';
        exit();
    }

    echo '<h3 class="center"> '.$name .'</h3>';
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) { 
            WriteProducts($result, $rowCount, $XS, $SM, $MD, $LG);
        }
    else {
        echo "<h1 class='center'>Žádné výsledky</h1>";
    }
    echo '<br>';
    Footer();
?>