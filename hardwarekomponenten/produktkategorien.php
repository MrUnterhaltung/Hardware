<?php
include "includes/conn.php";
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Produktkategorie</title>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
    <?php
        $sql = "SELECT * FROM tbl_kategorien WHERE FIDKategorie IS NOT NULL";

        $katList = $conn->query($sql) or die("Fehler in der Query: " . $conn->error . "<br>" .$sql );
        
        echo "<ul>";
        while($kat = $katList->fetch_object()){
            
            echo "<li>";
                echo '<a href="produkte.php?IDKategorie=' . $kat->IDKategorie . '">' . $kat->Kategorie . '</a>';
            echo "</li>";
        }
        echo "</ul>";
    ?>
    
    
</body>
</html>