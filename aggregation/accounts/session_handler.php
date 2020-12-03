<?php
session_start();

include_once("../data_classes/user.php");
include_once("../../presentation/global/data_classes/session.php");

header("Access-Control-Allow-Methods: GET,POST, OPTIONS");
header("Access-Control-Allow-Origin: *");

$data = json_decode(file_get_contents('php://input'), true);

try {
    if ($data["type"] == "Customer") {
        $user = new Customer($data["username"], $data["email"], $data["card"], $data["realname"], "");
    } else {
        $user = new Admin($data["username"], $data["email"]);
    }

    $_SESSION["user"] = serialize($user);
    echo $_SESSION["user"];
    die();
} catch (\Throwable $th) {
    //throw $th;
}
