<?php
require_once "../cors.php";
require_once "../config.php";
require_once "utility.php";
require_once "../../portale/api/getUserCoockie.php";

$data = getRequestDataBody();

$ut_sql = "SELECT * FROM `dipendenti` WHERE `email` = '" . $data["email"] . "'";
$ut_result = $conn->query($ut_sql);

if ($ut_result->num_rows > 0) {
    $exist = false;
    $respData = (object) array('error' => "E-mail già esistente");
} else {
    $exist = true;
}

if ($exist) {

    $sql = "INSERT INTO `dipendenti` (`id`, `company`, `nome`, `cognome`, `cf`, `annodinascita`, `ruolo`, `assunzione`, `nazione`, `email`, `telefono`) 
    VALUES (NULL, '". $user_params->company."', '" . $data["nome"] . "', '" . $data["cognome"] . "', '" . $data["cf"] . "', '" . $data["annodinascita"] . "', '" . $data["ruolo"] . "', 
    '" . $data["assunzione"] . "', '" . $data["nazione"] . "', '" . $data["email"] . "', '" . $data["telefono"] . "')";
    $result = $conn->query($sql);

    echo $result;
} else {
    echo json_encode($respData);
}
