<?php
function user_email($email)
{
    $sql = "SELECT * FROM users WHERE email='$email'";
    return pdo_query_one($sql);
}

function user_username($username)
{
    $sql = "SELECT * FROM users WHERE username = '$username'";
    return pdo_query_one($sql);
}

function insert_user($email, $username, $password)
{
    $sql = "INSERT INTO users(email,username,password) VALUES ('$email','$username','$password')";
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "SELECT * FROM users WHERE  email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function check_user($username, $password)
{
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    return pdo_query_one($sql);
}


