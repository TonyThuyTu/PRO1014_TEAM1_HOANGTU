<?php
session_start();
include 'model/sanpham.php';
include 'model/hangxe.php';
include 'model/pdo.php';
include 'model/taikhoan.php';
include 'model/linhmua.php';
include 'model/lichban.php';
include 'view/header.php';

include 'global.php';
$spnew = loadall_sanpham_home();
$dmnew = loadall_danhmuc();
if (isset($_GET['pg']) && ($_GET['pg'] != "")){
    $act = $_GET['pg'];
    switch ($act) {
        // ĐÂY LÀ KHU VỰC MUA XE
        case 'buy':
            $listall = loadall_sanpham_home();
            include 'view/site/sell.php';
            break;
        
        case 'sanpham':
            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $iddm = $_GET['id'];
                $dssp = loadall_sanpham("", $iddm);
                include 'view/site/sanphamdm.php';
            }
            else{
                include 'view/home.php';
            }
            break;
        
        case 'detail':
            if (isset($_GET["idsp"]) && ($_GET["idsp"] > 0)) {
                $id = $_GET['idsp'];
                $ct = loadone_sanpham($id);
                include 'view/site/detail.php';
            }
            else{
                include 'view/home.php';
            }
            break;
        
        case 'sell':
            if (isset($_POST["sellcar"]) && $_POST["sellcar"]) {
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $date = $_POST["date"];
                $time = $_POST["time"];
                $model = $_POST["model"];
                $km = $_POST["km"];
                $cus = $_POST["cus"];
                $filename = $_FILES["hinhxe"]["name"];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($filename);
                if (move_uploaded_file($_FILES["hinhxe"]["tmp_name"], $target_file)) {
                    //echo "File" . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được up load.";
                } else {
                    //echo "Lỗi up load file.";
                }
                insert_sellcar($name, $model, $km, $cus, $phone, $date, $time, $filename);
            }
            include 'view/site/sellcar.php';
            break;     
        
        case 'book':
            if (isset($_POST["book"]) && $_POST["book"]) {
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $date = $_POST["date"];
                $time = $_POST["time"];
                insert_book($time, $date, $name, $phone);
            }
            include 'view/site/book.php';
            break;   

        // ĐÂY LÀ KHU VỰC TÀI KHOẢN
        
        case 'login':
            if (isset($_POST["dangnhap"]) && $_POST["dangnhap"]) {
                $name = $_POST["name"];
                $pass = $_POST["pass"];
                $checkuser = signup($name, $pass);
                if (is_array($checkuser)) {
                    $_SESSION["user"] = $checkuser;
                    header("location:index.php");
                } else {
                    $thongbao = "Tài khoản bị lỗi xin kiểm tra lại tên đăng nhập và mật khẩu !";
                }
            }
            include 'view/site/login.php';
            break;
        
        case 'signup':
            if (isset($_POST["dangky"]) && $_POST["dangky"]) {
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $name = $_POST["name"];
                $pass = $_POST["pass"];
                login($name, $phone, $email, $pass);
                $thongbao = "Đăng ký thành công!";
            }
            include 'view/site/signup.php';
            break;
        
        case 'lost':
            if (isset($_POST["lost"]) && $_POST["lost"]) {
                $email = $_POST["email"];
                $checkemail = lost($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là : " . $checkemail["pass"];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include 'view/site/lost.php';
            break;
        
        case 'acc':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $kh = loadone_khachhang($_GET["id"]);
            }
            include 'view/site/acc.php';
            break;    


        case 'edit':
            if (isset($_POST["capnhat"]) && $_POST["capnhat"]) {

                $id = $_POST["id"];
                $email = $_POST["email"];
                $name = $_POST["name"];
                $pass = $_POST["pass"];
                $phone = $_POST["phone"];

                edit($id, $name, $phone, $email, $pass);
                $_SESSION["user"] = signup($name, $pass);
                $thongbao = "Cập nhật thành công";
                
            }
            include 'view/site/acc.php';
            break;

        case 'out':
            session_unset();
            header("location:index.php");
            break;

        default:
            include 'view/home.php';
            break;
    }
}else{
    include 'view/home.php';
}

include 'view/footer.php';

?>