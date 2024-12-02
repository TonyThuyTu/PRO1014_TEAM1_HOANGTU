<link rel="stylesheet" href="./style/detail.css">
<section class="hero-section">
        <div class="hero-container">
            <!-- Left Column -->
            <div class="hero-content">
                <h1 class="hero-title">
                    BÁN XE CỦA<br>
                    BẠN VỚI GIÁ<br>
                    SIÊU TỐT
                </h1>
            </div>

            <!-- Right Column - Form -->
            <div class="form-card">
                
            <?php
                if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                    extract($_SESSION["user"]);
            ?>
                  <h2 class="form-title">BÁN XE</h2>
                <form action="index.php?pg=sell" method="post" enctype="multipart/form-data">
                    <div class="form-grid">
                    <div class="form-group">
                            <label>Ảnh</label>
                            <input type="file" name = "file">
                        </div>
                        <div class="form-group">
                            <label>Tên xe</label>
                            <input type="text" name = "name">
                        </div>
                        <div class="form-group">
                            <label>Phiên bản</label>
                            <input type="text" name = "model">
                        </div>
                        <div class="form-group">
                            <label>Số km đã đi</label>
                            <input type="text" name = "km">
                        </div>
                        <div class="form-group">
                            <label>Tên khách hàng</label>
                            <input type="text" name = "cus">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="tel" name = "phone">
                        </div>
                        <div class="form-group">
                            <label>Ngày hẹn</label>
                            <input type="date" name = "date">
                        </div>
                        <div class="form-group">
                            <label>Giờ hẹn</label>
                            <input type="time" name = "time">
                        </div>
                    
                    </div>
                    <button type="submit" name = "sell_car" class="submit-btn">Gửi</button>
                </form>

            <?php
            } else {
            ?>

                    <h2 class="form-title">VUI LÒNG ĐĂNG NHẬP</h2>
                <form>
                    
                    <button type="submit" class="submit-btn"><a href="index.php?pg=signup">Đăng Nhập</a></button>
                </form>

            <?php } ?>
            </div>
        </div>
    </section>