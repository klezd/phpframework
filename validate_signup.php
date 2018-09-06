<?php

$error = "";
$name = $email = $password = $repassword = "";

if( $_POST['name'] == "") {
    $error = $error . "- Name is required!<br> ";
    
} else {   
    $name = $_POST['name'];

    if (strlen($name) < 2) {
        $error = $error . "- Name must contain at least 2 characters! <br> ";
    }
}

if ( $_POST['email'] == "" ) {
    $error = $error . "- Email is required! <br> ";
} else {    
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = $error . "- Email is not valid <br> ";
    }
}

if ($_POST['password'] == "") {
    $error = $error . "- Password is required! <br> ";
} else {
    $password = $_POST['password'];

    if (strlen($password) < 8) {
        $error = $error . "- Password must contain at least 8 characters! <br> ";
    }

    if (!preg_match("#[^A-Za-z0-9]+#", $password)) {
        $error = $error . "- Password must contain at lease 1 number and one special character! <br>";
    }
}

if ($_POST['repassword'] == "") {
    $error = $error . "- Repeat password is required! <br> ";
} else {
    $repassword = $_POST['repassword'];

    if (strcmp($repassword, $password) != 0) {
        $error = $error . "- Repeat password must match to password! <br> ";
    }
}

if ($error != "") {
    echo '<script type="text/javascript">';
    echo 'alert('. $error .')';
    echo '</script>';
    echo $error;
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Sign up successfully")';
    echo '</script>';
    echo 'Sign up successfully';
}


?>