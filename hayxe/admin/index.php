<?php
    session_start();
   
    
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    include "../model/hangxe.php";
    include "../model/nhanvien.php";
    include "../model/sanpham.php";
    include "../model/linhmua.php";
    include "view/header.php";

    if(isset($_GET['pg']) && ($_GET['pg'] != "")){
        $act = $_GET['pg'];
        switch ($act) {
            // đây là khu vực quản lí lịch
            case 'qllichmua':
                $listbook = loadall_book();
                include "lich/lichmua/list.php";
                break;
            
            case 'status':
                if (isset($_POST["ok"]) && $_POST["ok"]){
                    
                    


                    $id = $_POST["id_buy"];
                    update_status($id, $status);
                }
                $listbook = loadall_book();
                include "lich/lichmua/list.php";
                break;
            
            
            case 'xoabook':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    delete_book($_GET["id"]);
                }
                $listbook = loadall_book();
                include "lich/lichmua/list.php";
                break;

            case 'qllichban':
                include "lich/lichban/list.php";
                break;
            // đây là khu vực khách hàng
            case 'qlkhachhang':
                $listkhachang = loadall_khachhang();
                include "khachhang/list.php";
                break;

            // đây là khu vực hãng xe
            case 'qlhangxe':
                $listdanhmuc = loadall_danhmuc();
                include "hangxe/list.php";
                break;
            
            case 'xoadm':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    delete_danhmuc($_GET["id"]);
                }
                $listdanhmuc = loadall_danhmuc();
                include "hangxe/list.php";
                break;
            
            case 'suadm':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    $dm = loadone_danhmuc($_GET["id"]);
                }
                include "hangxe/edit.php";
                break;
            
            case 'updatedm':
                if (isset($_POST["capnhat"]) && $_POST["capnhat"]) {
                    $tenloai = $_POST["brand"];
                    $id_dm = $_POST["id_dm"];
                    update_dm($id_dm, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "hangxe/list.php";
                break;

            case 'themhang':
                if (isset($_POST["themmoi"])) {
                    $tenloai = $_POST["brand"];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "hangxe/add.php";
                break;
            

            // đây là khu vực nhân viên
            case 'qlnhanvien':
                $listnhanvien = loadall_nhanvien();
                include "nhanvien/list.php";
                break;

            case 'themnhanvien':
                if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                    $ho = $_POST["last_name"];
                    $ten = $_POST["first_name"];
                    $sdt = $_POST["phone"];
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];
                    $role = $_POST["role"];
                    insert_nhanvien($ho, $ten, $sdt, $email, $pass, $role);
                    $thongbao = "Thêm thành công";
                }
                include "nhanvien/add.php";
                break;
            
            case 'xoanv':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    delete_nhanvien($_GET["id"]);
                }
                $listnhanvien = loadall_nhanvien();
                include "nhanvien/list.php";
                break;
            
            case 'suanv':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    $nv = loadone_nhanvien($_GET["id"]);
                }
                include "nhanvien/edit.php";
                break;

            case 'updatenv':
                if (isset($_POST["capnhatnv"]) && $_POST["capnhatnv"]) {
                    $ho = $_POST["last_name"];
                    $ten = $_POST["first_name"];
                    $sdt = $_POST["phone"];
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];
                    $role = $_POST["role"];
                    $id = $_POST["id_nv"];
                    update_nhanvien($ho, $ten, $sdt, $email, $pass, $role, $id);
                }
                $listnhanvien = loadall_nhanvien();
                include "nhanvien/list.php";
                break;
            // đây là khu vực sản phẩm
            case 'qlsanpham':
                if (isset($_POST["listok"]) && $_POST["listok"]) {
                    $kyw = $_POST["kyw"];
                    $iddm = $_POST["car_brands"];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);
                include "sanpham/list.php";
                break;

            case 'themsanpham':
                if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                    $car_brands = $_POST["car_brands"];
                    $car_name = $_POST["car_name"];
                    $car_price = $_POST["car_price"];
                    $car_des = $_POST["car_des"];
                    $car_model = $_POST["car_model"];
                    $car_year = $_POST["car_year"];
                    $car_quantity = $_POST["car_quantity"];
                    $car_fuel = $_POST["car_fuel"];
                    $car_color = $_POST["car_color"];
                    $car_chair = $_POST["car_chair"];
                    $gear = $_POST["gear"];
                    $motor = $_POST["motor"];
                    $km = $_POST["km"];
                    $filename = $_FILES["hinh"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($filename);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "File" . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được up load.";
                    } else {
                        //echo "Lỗi up load file.";
                    }
                    insert_sanpham($car_brands, $car_name, $car_price, $car_des, $car_model, $car_year, $car_quantity, $car_fuel, $car_color, $car_chair, $filename, $motor, $gear, $km);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;

            case 'suasp':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    $sanpham = loadone_sanpham($_GET["id"]);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/edit.php";
                break;

            case 'updatesp':
                if (isset($_POST["capnhat_sp"]) && $_POST["capnhat_sp"]) {
                    $id = $_POST["id_pro"];
                    $car_brands = $_POST["car_brands"];
                    $car_name = $_POST["car_name"];
                    $car_price = $_POST["car_price"];
                    $car_des = $_POST["car_des"];
                    $car_model = $_POST["car_model"];
                    $car_year = $_POST["car_year"];
                    $car_quantity = $_POST["car_quantity"];
                    $car_fuel = $_POST["car_fuel"];
                    $car_color = $_POST["car_color"];
                    $car_chair = $_POST["car_chair"];
                    $gear = $_POST["gear"];
                    $motor = $_POST["motor"];
                    $km = $_POST["km"];
                    $filename = $_FILES["hinh"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($filename);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "File" . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được up load.";
                    } else {
                        //echo "Lỗi up load file.";
                    }
                    update_sp($car_brands, $car_name, $car_price, $car_des, $car_model, $car_year, $car_quantity, $car_fuel, $car_color, $car_chair, $filename, $motor, $gear, $km ,$id);
                    $thongbao = "Sửa thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_pro();
                include "sanpham/list.php";
                break;

            case 'xoasp':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    delete_sanpham($_GET["id"]);
                }
                $listsanpham = loadall_pro();
                include "sanpham/list.php";
                break;
            
            // Đây là khu vực đăng nhập admin và nhân viên
            
            

            case 'out':
                session_unset();
                header("location:loginadmin.php");
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";

?>