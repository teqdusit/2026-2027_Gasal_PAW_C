<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .field {
            margin-bottom: 10px;
        }

        .field label {
            display: inline-block;
            width: 130px;
            vertical-align: top;
        }

        .field input[type="text"],
        .field input[type="password"],
        .field select,
        .field textarea {
            width: 200px;
        }
    </style>
</head>

<body>
    <h1>Register</h1>
    <?php
    if (isset($_POST['submit'])) {
        require 'validate.inc';
        $errors = array();

    
        validateName($errors, $_POST, 'surname');
        validateEmail($errors, $_POST, 'email');
        validateState($errors, $_POST, 'state');

        if ($errors) {
            echo 'Invalid, correct the following errors:<br/>';
            foreach ($errors as $field => $error) {
                echo "$field $error<br/>";
            }
            include 'form.inc';
        } else {
            echo 'Form submitted successfully with no errors';
        }
    } else {
        include 'form.inc';
    }
    ?>
</body>

</html>