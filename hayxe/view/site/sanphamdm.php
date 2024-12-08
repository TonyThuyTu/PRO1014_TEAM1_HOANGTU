<link rel="stylesheet" href="./style/sell.css">
<section class="body">
    
    <div class="sell-title">
        <h1>Các dòng xe </h1>
    </div>
    <hr>

    <div class="row">
        <div class="sell-left">
        <?php
                $i = 0;

                foreach ($list as $dssp) {
                    extract($dssp);
                    $linksp = "index.php?pg=detail&idsp=" . $id_products;
                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
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
                        <p>Hãng Xe</p>
                    </div>
                    <div class="sell-brands-name">
                        <ul>
                            <?php
                            foreach ($dmnew as $dm) {
                                extract($dm);
                                $linkdm = "index.php?pg=sanphamdm&iddm=" . $id_brands;
                                echo '<li>
                                        <a href="'.$linkdm.'">'.$brands.'</a>
                                    </li>';
                            }
                            
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>