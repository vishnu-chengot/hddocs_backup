<?php

session_start();
function addData()
{
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phoneno'];
    $password = $_POST['password'];
    $user_name = $_POST['username'];
    $existingData = file_get_contents('data.json');
    $existingArray = json_decode($existingData, true);

    foreach ($existingArray as $userData) {
        if ($userData['user_name'] == $user_name) {
            // If username exists, return an error message or do something else
            $_SESSION['msg'] = 'Username already exists';
            header("Location: sign_up.php");
            exit();
        }
    }

    // If username doesn't exist, add the new user data
    $data = array(
        "user_name" => $user_name,
        "name" => $name,
        "email" => $email,
        "phoneNumber" => $phone,
        "password" => $password,
    );

    array_push($existingArray, $data);
    $jsonData = json_encode($existingArray, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $jsonData);
    $_SESSION['msg'] = 'Registered successfully';
    header("Location: sign_up.php");
}

if (file_get_contents('data.json') == null) {
    file_put_contents('data.json', '[]');
}

addData();
