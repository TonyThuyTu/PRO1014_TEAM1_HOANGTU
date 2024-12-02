<link rel="stylesheet" href="./style/sell.css">
<section class="body">
    
    <div class="sell-title">
        <h1>Tất cả các dòng xe</h1>
    </div>
    <hr>

    <div class="row">
        <div class="sell-left">
        <?php
                $i = 0;

                foreach ($listall as $dssp) {
                    extract($dssp);
                    $linksp = "index.php?pg=detail&idsp=" . $id_products;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    $hinh = $img_path . $img;
                    echo '<div class="box '.$mr.'">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" width="100%"></a>
                            <p><a href="'.$linksp.'">'.$name.'</a></p>
                            <p>'.$price.' VNĐ</p>
                        </div>';
                    $i += 1;
                }
                ?>
            <!-- <div class="box mr">
                <a href="#"><img src="./img/31.png" width="100%"></a>
                <p><a href="#">Lexus LS500</a></p>
                <p>8.000.000.000 VNĐ</p>
            </div>

            <div class="box mr">
                <a href="#"><img src="./img/31.png" width="100%"></a>
                <p><a href="#">Lexus LS500</a></p>
                <p>8.000.000.000 VNĐ</p>
            </div>

            <div class="box">
                <a href="#"><img src="./img/31.png" width="100%"></a>
                <p><a href="#">Lexus LS500</a></p>
                <p>8.000.000.000 VNĐ</p>
            </div> -->
        </div>

        <div class="sell-right">
            <div class="row mb">
                <div class="sell_dearler">
                    <h3>Phòng Kinh Doanh</h3>
                    <h2>LEXUS ĐÀ NẴNG</h2>
                    <h1>0777527125</h1>
                    <p>-Đại Lý Uỷ Quyền Chính Hãng-</p>
                    <p>-Lòng Hiếu Khách Chân Thành-</p>
                    <p>-Thông tin chính xác minh bạch-</p>
                </div>
            </div>
            <hr class="mb">

            <div class="row mb">
                <div class="sell-brands">
                    <div class="sell-brands-title">
                        <p>Hãng Xe</p>
                    </div>
                    <div class="sell-brands-name">
                        <ul>
                            <li>
                                <a href="#">TOYOTA</a>
                            </li>

                            <li>
                                <a href="#">TOYOTA</a>
                            </li>

                            <li>
                                <a href="#">TOYOTA</a>
                            </li>

                            <li>
                                <a href="#">TOYOTA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>