<?php

function insert_danhmuc($tenloai)
{
    $sql = " INSERT INTO car_brands (brands) VALUES ('$tenloai')";
    pdo_execute($sql);
}

function loadall_danhmuc()
{
    $sql = "SELECT * FROM car_brands";
    $list_dm = pdo_query($sql);
    return $list_dm;
}

function load_ten_dm($id)
{
    
}

function update_dm($id, $tenloai)
{
    $sql = " UPDATE car_brands SET brands='$tenloai' WHERE id_brands = '$id' ";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = " DELETE FROM car_brands WHERE id_brands = " . $id;
    pdo_execute($sql);
}

function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM car_brands WHERE id_brands= " . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

?>