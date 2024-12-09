<?php

function insert_nhanvien($ho, $ten, $sdt, $email, $pass, $role)
{
    $sql = " INSERT INTO employee(last_name, given_name, phone, email, pass, role) VALUES('$ho', '$ten', '$sdt', '$email', '$pass', '$role')";
    pdo_execute($sql);
}

function loadall_nhanvien()
{
    $sql = "SELECT * FROM employee";
    $list_nv = pdo_query($sql);
    return $list_nv;
}

function delete_nhanvien($id)
{
    $sql = " DELETE FROM employee WHERE id_employee = " . $id;
    pdo_execute($sql);
}

function update_nhanvien($ho, $ten, $sdt, $email, $pass, $role, $id)
{
    $sql = " UPDATE employee SET last_name='$ho', given_name='$ten', phone='$sdt', email='$email', pass='$pass', role='$role' WHERE id_employee = '$id' ";
    pdo_execute($sql);
}

function loadone_nhanvien($id)
{
    $sql = "SELECT * FROM employee WHERE id_employee= " . $id;
    $nv = pdo_query_one($sql);
    return $nv;
}

function login_admin($email, $pass)
{
    $sql = "SELECT * FROM employee WHERE email='$email' AND pass ='$pass'";
    $ad = pdo_query_one($sql);
    return $ad;
}


?>