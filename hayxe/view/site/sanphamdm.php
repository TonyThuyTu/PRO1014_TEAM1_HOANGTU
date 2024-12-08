<link rel="stylesheet" href="./style/sell.css">
<section class="body">
    
    <div class="sell-title">
        <h1>Tất cả dòng xe</h1>
    </div>
    <hr>

    <div class="row">
        <div class="sell-left">
        <?php
                $i = 0;

                foreach ($dssp as $sp) {
                    extract($sp);
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
                        <p>Các dòng xe</p>
                    </div>
                    <div class="sell-brands-name">
                        <ul>
                            <?php
                            foreach ($dmnew as $dm) {
                                extract($dm);
                                $linkdm = "index.php?pg=sanpham&id=" . $id_brands;
                                echo '<li>
                                        <a href="'.$linkdm.'">'.$brands.'</a>
                                    </li>';
                            }
                            
                            ?>
                        </ul>
                    </div>
                    <img src="./img/car.jpg" width = "100%">
                </div>
            </div>
        </div>
    </div>

</section>