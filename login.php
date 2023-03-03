<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['email'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("users", $_POST['username'],$_POST['email'], $_POST['password'])) {
            echo "Login Success";
        } else echo "Username or Password wrong";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
