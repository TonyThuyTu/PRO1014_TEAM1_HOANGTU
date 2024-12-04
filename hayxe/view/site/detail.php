<link rel="stylesheet" href="./style/detail.css">
<main class="product-detail">
        <?php
          extract($ct);
          $img = $img_path.$img;

          echo '<div class="product-container">
          <div class="product-image">
            <img src="'.$img.'" alt="GX 550M">
          </div>
    
          <div class="product-info">
            <h1>'.$name.'</h1>
            <p class="views">'.$quantity.' lượt xem</p>
            <p class="price">Giá từ: <span>'.$price.' VNĐ</span></p>
            <p>'.$description.'</p>
            <div class="buttons">
              <button><a href="index.php?pg=book">Đặt lịch</a></button>
              <button><a href="https://zalo.me/0777527125">Liên Hệ</a></button>
            </div>
          </div>
    
          <div class="contact-info">
            <h2>PHÒNG KINH DOANH</h2>
            <p class="dealer-name">LEXUS Đà Nẵng</p>
            <p class="phone">0777527125</p>
            <ul>
              <li>Đại lý ủy quyền chính hãng Lexus</li>
              <li>Luôn hiểu khách chân thành</li>
              <li>Thông tin chính xác, minh bạch</li>
              <li>Tư vấn 24/7</li>
            </ul>
            <div class="contact-buttons">
              <button><span>📞</span> 0777527125</button>
              <button><span>✉️</span> Nhận báo giá</button>
              <button>Đăng ký lái thử</button>
            </div>
          </div>
        </div>
    
        <div class="infor-versions">
          <h2>Thông tin sản phẩm</h2>
          <div class="specifications">
            <h2>Thông số kỹ thuật '.$name.'</h2>
            <table>
              <tr>
                <td>Phiên bản</td>
                <td>'.$model.'</td>
              </tr>
              <tr>
                <td>Năm sản xuất</td>
                <td>'.$year.'</td>
              </tr>
              <tr>
                <td>Nhiên liệu</td>
                <td>'.$fuel.'</td>
              </tr>
              <tr>
                <td>Màu sắc</td>
                <td>'.$color.'</td>
              </tr>
              <tr>
                <td>Số ghế</td>
                <td>'.$chair_num.'</td>
              </tr>
              <tr>
                <td>Số KM đã đi</td>
                <td>'.$km.' KM</td>
              </tr>
              <tr>
                <td>Loại động cơ</td>
                <td>'.$motor.'</td>
              </tr>
              <tr>
                <td>Loại hộp số</td>
                <td>'.$gear.'</td>
              </tr>
            </table>
          </div>
        </div>';
        ?>
        <!-- <div class="product-container">
          <div class="product-image">
            <img src="./img/31.png" alt="GX 550M">
          </div>
    
          <div class="product-info">
            <h1>GX 550M</h1>
            <p class="views">947 lượt xem</p>
            <p class="price">Giá từ: <span>6,200,000,000 VNĐ</span></p>
            <p>GX 550M là phiên bản của số nóc đơn.</p>
            <div class="buttons">
              <button><a href="index.php?pg=book">Đặt lịch</a></button>
              <button>Liên hệ</button>
            </div>
          </div>
    
          <div class="contact-info">
            <h2>PHÒNG KINH DOANH</h2>
            <p class="dealer-name">LEXUS Đà Nẵng</p>
            <p class="phone">0777527125</p>
            <ul>
              <li>Đại lý ủy quyền chính hãng Lexus</li>
              <li>Luôn hiểu khách chân thành</li>
              <li>Thông tin chính xác, minh bạch</li>
              <li>Tư vấn 24/7</li>
            </ul>
            <div class="contact-buttons">
              <button><span>📞</span> 0777527125</button>
              <button><span>✉️</span> Nhận báo giá</button>
              <button>Đăng ký lái thử</button>
            </div>
          </div>
        </div>
    
        <div class="infor-versions">
          <h2>Thông tin sản phẩm</h2>
          <div class="specifications">
            <h2>Thông số kỹ thuật Lexus GX 550M</h2>
            <table>
              <tr>
                <td>Động cơ</td>
                <td>V35A-FTS, 4 kỳ, 6 xi lanh chữ V, tăng áp</td>
              </tr>
              <tr>
                <td>Dung tích</td>
                <td>3,445 cm³</td>
              </tr>
              <tr>
                <td>Công suất cực đại</td>
                <td>260 kW (349 HP) / 4,800 - 5,200 RPM</td>
              </tr>
              <tr>
                <td>Mô-men xoắn cực đại</td>
                <td>650 Nm / 2,000 - 3,600 RPM</td>
              </tr>
              <tr>
                <td>Tốc độ cực đại</td>
                <td>175 km/h</td>
              </tr>
              <tr>
                <td>Tăng tốc từ 0 - 100km/h</td>
                <td>7 giây</td>
              </tr>
            </table>
          </div>
        </div> -->
      </main>