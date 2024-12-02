<main class="main-content">
        <h1>Quản lý khách hàng</h1>
        
        <!-- Thanh tìm kiếm -->
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm khách hàng..." id="search">
            <button>Tìm kiếm</button>
        </div>
    
        <!-- Bảng danh sách nhân viên -->
        <table class="employee-table">
            <thead>
                <tr>
                    <th>STT</th>
            
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    
                </tr>
            </thead>

            <?php
                foreach( $listkhachang as $khachhang){
                    extract($khachhang);
                  
                    echo '<tr>
                    <td>' . $id_customer . '</td>
                    <td>' . $name . '</td>
                    <td>' . $phone . '</td>
                    <td>' . $email . '</td>
                    <td>' . $pass . '</td>
                    
                </tr>';
                }
            
            
            
            
            
            ?>

            <!-- <tbody>
                <tr>
                    <td>1</td>
                    
                    <td>Nguyễn Văn A</td>
                    <td>0123455</td>
                    <td>employee@gmail.com</td>
                    <td>1234</td>
                    <td>
                        <button class="delete-btn"><a href="delete_khachhang">Xóa</a></button>
                    </td>
                </tr>
                
            </tbody> -->

            <thead>
                <tr>
                    <th>STT</th>
                  
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    
                </tr>
            </thead>
        </table>
    
        <!-- Nút thêm nhân viên -->
       
    </main>