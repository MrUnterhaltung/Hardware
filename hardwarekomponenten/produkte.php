<?php
    include "includes/conn.php";
    include "includes/config.php";

    // Überprüfe, ob die ID in der URL vorhanden ist
    if(isset($_GET["IDKategorie"])) {
        $produktID = $_GET["IDKategorie"];

        $sql = "Select * from tbl_produkte WHERE FIDKategorie='" . $produktID . "'";

        $produktlist = $conn->query($sql) or die("Fehler in der Query: " . $conn->error . "<br>" . $sql);

        echo"<ul>";
        while($prod = $produktlist->fetch_object()){
            echo"<li>";
            echo$prod->Produkt;
            echo"</li>";
        }
        echo"</ul>";
    } else {
        echo"ID nicht gefunden.";
    }
?>