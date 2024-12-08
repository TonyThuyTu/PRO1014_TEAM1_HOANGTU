<?php

function insert_sellcar($name, $model, $km, $cus, $phone, $date, $time, $filename)
{
    $sql = " INSERT INTO booking_sell (book_time, book_date, name, img, model, cus, km, phone) VALUES('$time', '$date', '$name', '$filename', '$model', '$cus', '$km', $phone)";
    pdo_execute($sql);
}

function loadall_sell()
{
    $sql = "SELECT * FROM booking_sell ORDER BY id_sell DESC ";
    $list_sell = pdo_query($sql);
    return $list_sell;
}

function  delete_sell($id)
{
    $sql = " DELETE FROM booking_sell WHERE id_sell = " . $id;
    pdo_execute($sql);
}

?>