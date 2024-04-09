<?php
require_once "../cors.php";
require_once "../config.php";
require_once "utility.php";

$data = getRequestDataBody();

  $sql = "UPDATE `dipendenti` SET `nome` = '" . $data["nome"] . "', `cognome` = '" . $data["cognome"] . "', `cf` = '" . $data["cf"] . "', `annodinascita` = '" . $data["annodinascita"] . "', 
  `ruolo` = '" . $data["ruolo"] . "', `assunzione` = '" . $data["assunzione"] . "', `nazione` = '" . $data["nazione"] . "', `email` = '" . $data["email"] . "', `telefono` = '" . $data["telefono"] . "' WHERE `dipendenti`.`id` = " . $data["id"];

$result = $conn->query($sql);

echo $result;
?>