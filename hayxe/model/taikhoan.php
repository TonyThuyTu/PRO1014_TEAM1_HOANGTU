<?php

function login($name, $phone, $email, $pass)
{
    $sql = " INSERT INTO customer(name,phone,email,pass) VALUES('$name','$phone','$email','$pass')";
    pdo_execute($sql);
}

function signup($name, $pass)
{
    $sql = "SELECT * FROM customer WHERE email='$name' AND pass ='$pass'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function lost($email)
{
    $sql = "SELECT * FROM customer WHERE email='$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function edit($id, $name, $phone, $email, $pass)
{
    $sql = "UPDATE customer
            SET    name = '$name', phone = '$phone' , email = '$email' , pass = '$pass'
            WHERE  id_customer = '$id'";
    pdo_execute($sql);
}

function loadall_khachhang()
{
    $sql = "SELECT * FROM customer";
    $list_kh = pdo_query($sql);
    return $list_kh;
}

function loadone_khachhang($id)
{
    $sql = "SELECT * FROM customer WHERE id_customerr= " . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

?>