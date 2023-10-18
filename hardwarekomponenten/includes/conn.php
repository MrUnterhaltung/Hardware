<?php
    include("config.php");

    $conn = new mysqli($hostname, $username, $password, $db);

    if ($debug) {

      if ($conn->connect_error) {
        die("<div class='debugError'>Verbindung zur Datenbank fehlgeschalgen: " . $conn->connect_error . "</div>");

      } else {
        echo("<div class='debugSucces'>Verbindung zur Datenbank hergestellt</div>");
      }

    }
?>