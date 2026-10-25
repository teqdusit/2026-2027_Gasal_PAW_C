<?php
require 'validate.inc';

$errors = array();
validateName($errors, $_POST, 'surname');

if ($errors) {
    echo 'Errors:<br/>';
    foreach ($errors as $field => $error) {
        echo "$field $error <br/>";
    }
} else {
    echo 'Data OK!<br/>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses data</title>
</head>

<body>
    <h3>Posted Data:</h3>
    <?php
    foreach ($_POST as $key => $value) {
        $save_key = htmlspecialchars($key);
        $save_value = htmlspecialchars($value);
        echo "($save_key) => ($save_value) <br>";

        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $sex = $_POST['sex'];
        $submit = $_POST['submit'];
    }
    ?>