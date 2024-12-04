

    <!-- Main Content -->
    <main class="main-content">
        <h1>Quản lý lịch mua</h1>
        
        <!-- Thanh tìm kiếm -->
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm lịch mua..." id="search">
            <button>Tìm kiếm</button>
        </div>
    
        <!-- Bảng danh sách lịch mua -->
        <table class="schedule-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ngày mua</th>
                    <th>Giờ mua</th>
                    <th>Người mua</th>
                    <th>Số điện thoại</th>
                    
                   
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
            </thead>

            <?php

            foreach ($listbook as $book) {
                extract($book);

                $updateStatus = "index.php?pg=status&id=" . $id_buy;

                $stt = get_status($book['status']);

                echo '<tr>
                    <td>'.$id_buy.'</td>
                    <td>'.$book_date.'</td>
                    <td>'.$book_time.'</td>
                    <td>'.$name.'</td>
                    <td>'.$phone.'</td>
               
                  
                    <td>'.$stt.'</td>
                    <td>
                         <form method="POST" action="' . $updateStatus . '">
                                <select name="status" required>
                                    <option value="1" ' . ($book['status'] == 1 ? 'selected' : '') . '>Đang xử lý</option>
                                    <option value="2" ' . ($book['status'] == 2 ? 'selected' : '') . '>Đã Xác Nhận</option>
                                    <option value="3" ' . ($book['status'] == 3 ? 'selected' : '') . '>Đã Hủy</option>
                                </select>
                                 <input type="submit" class = "edit-btn" name = "ok" value = "Xác Nhận">
                             <input type="hidden" name="id_buy" value="'.$id_buy.'">
                            </form>
                    </td>
                    </tr>';
            }

            ?>
           

            <!-- <tbody>
                <tr>
                    <td>1</td>
                    <td>21/11/2024</td>
                    <td>8:30 AM</td>
                    <td>Nguyễn Văn A</td>
                    <td>01234567</td>
                    <td>Toyota Camry 2020</td>
                    <td>500 triệu</td>
                    <td>
                        <button class="edit-btn">Xác nhận</button>
                        <button class="delete-btn">Xóa</button>
                    </td>
                </tr>
            </tbody> -->
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ngày mua</th>
                    <th>Giờ mua</th>
                    <th>Người mua</th>
                    <th>Số điện thoại</th>
               
                  
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    
        <!-- Nút thêm lịch -->
        
    </main>

    <!-- Footer -->
    