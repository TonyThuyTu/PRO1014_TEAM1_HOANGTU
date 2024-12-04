<?php

function insert_sanpham($car_brands, $car_name, $car_price, $car_des, $car_model, $car_year, $car_quantity, $car_fuel, $car_color, $car_chair, $filename, $motor, $gear, $km)
{
    $sql = " INSERT INTO car_products(name,price,img,description,model,year,quantity,fuel,color,chair_num,gear,motor,km,id_brands) VALUES('$car_name','$car_price','$filename','$car_des','$car_model','$car_year','$car_quantity','$car_fuel','$car_color','$car_chair','$gear','$motor','$km','$car_brands')";
    pdo_execute($sql);
}

function loadall_sanpham($kyw, $iddm)
{
    $sql = "SELECT * FROM car_products WHERE 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql.= " and id_brands ='" . $iddm . "'";
    }
    $sql.= " ORDER BY id_products desc";
    $list_sp = pdo_query($sql);
    return $list_sp;
}

function loadall_pro()
{
    $sql = "SELECT * FROM car_products";
    $list_pro = pdo_query($sql);
    return $list_pro;
}

function  delete_sanpham($id)
{
    $sql = " DELETE FROM car_products WHERE id_products = " . $id;
    pdo_execute($sql);
}

function loadone_sanpham($id)
{
    $sql = "SELECT * FROM car_products WHERE id_products ='$id'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function loadall_sanpham_home()
{
    $sql = "SELECT * FROM car_products ORDER BY id_products DESC";
    $list_sp = pdo_query($sql);
    return $list_sp;
}

function update_sp($car_brands, $car_name, $car_price, $car_des, $car_model, $car_year, $car_quantity, $car_fuel, $car_color, $car_chair, $filename, $motor, $gear, $km, $id)
{
    if ($filename !="") {
        $sql = " UPDATE car_products SET id_brands='$car_brands',name='$car_name',price='$car_price',img='$filename' , description='$car_des', model='$car_model', quantity='$car_quantity', year='$car_year', fuel='$car_fuel', color='$car_color', chair_num='$car_chair', km='$km', motor = '$motor', gear='$gear' WHERE id_products = ".$id;
    } else {
        $sql = " UPDATE car_products SET id_brands='$car_brands',name='$car_name',price='$car_price', description='$car_des', model='$car_model', quantity='$car_quantity', year='$car_year', fuel='$car_fuel', color='$car_color', chair_num='$car_chair', km='$km', motor = '$motor', gear='$gear' WHERE id_products = ".$id;
    }
    pdo_execute($sql);
}

?>