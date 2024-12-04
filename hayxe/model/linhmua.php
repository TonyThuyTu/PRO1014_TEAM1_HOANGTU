<?php

function insert_book($time, $date, $name, $phone)
{
    $sql = " INSERT INTO booking_buy (name, phone, book_date, book_time) VALUES('$name', '$phone', '$date', '$time')";
    pdo_execute($sql);
}

function loadall_book()
{
    $sql = "SELECT * FROM booking_buy";
    $list_book = pdo_query($sql);
    return $list_book;
}

function delete_book($id)
{
    $sql = " DELETE FROM booking_buy WHERE id_buy = " . $id;
    pdo_execute($sql);
}

function get_status($n)
{
    switch ($n) {

        case '1':
            $tt = "Đang xử lý"; 
            break;

        case '2':
            $tt = "Đã Xác Nhận";
            break;
            
        case '3':
            $tt = "Đã Hủy";
            break;
        
        default:
            $tt = "Đang xử lý";
            break;
    }
    return $tt;
}

function update_status($id, $status)
{
    $sql = " UPDATE booking_buy SET status='$status' WHERE id_buy = '$id' ";
    pdo_execute($sql);
}
?>