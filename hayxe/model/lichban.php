<?php

function insert_sellcar($name, $model, $km, $cus, $phone, $date, $time, $file)
{
    $sql = " INSERT INTO booking_sell(book_time, book_date, name, img, model, cus, km, phone) VALUES('$time', '$date', '$name', '$file', '$model', '$cus', '$km', $phone)";
    pdo_execute($sql);
}

?>