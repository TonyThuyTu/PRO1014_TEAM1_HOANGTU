<link rel="stylesheet" href="./style/detail.css">
<section class="hero-section">
        <div class="hero-container">
            <!-- Left Column -->
            <div class="hero-content">
                <h1 class="hero-title">
                    XEM XE VỚI <br>
                    GÓC NHÌN TRỰC DIỆN<br>
                    ĐẶT LỊCH NÀO!
                </h1>
            </div>

            <!-- Right Column - Form -->
            <div class="form-card">
            <?php
                if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                    extract($_SESSION["user"]);
            ?>
                 <h2 class="form-title">ĐẶT LỊCH</h2>
                <form action="index.php?pg=book" method="post">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Tên khách hàng</label>
                            <input type="text" name = "name">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name = "phone">
                        </div>
                        <div class="form-group">
                            <label>Ngày tháng</label>
                            <input type="date" name = "date">
                        </div>
                        <div class="form-group">
                            <label>Giờ</label>
                            <input type="time" name = "time">
                        </div>
                    </div>
                    <input type="submit" id="book" class = "submit-btn" name = "book" value = "Gữi">
                </form>

            <?php
            } else {
            ?>

                    <h2 class="form-title">VUI LÒNG ĐĂNG NHẬP ĐỂ ĐẶT LỊCH</h2>
                <form>
                    <button type="submit" class="submit-btn"><a href="index.php?pg=signup">Đăng Nhập</a></button>
                </form>

            <?php } ?>
            </div>
        </div>
    </section>
            
    