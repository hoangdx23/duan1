<div class="table">    
           <div class="title" ><h2 style="text-align: center;"> Thống kê sản phẩm theo loại</h2></div>
           <a href="index.php?act=bieudo"><button type="button" class="btn btn-primary" style="margin-left: 80px; margin-top:30px;">Biểu đồ</button> </a>  
       <table class="table">        
            <thead>
              <tr>
                <th scope="col">Mã danh mục</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá cao nhất</th>
                <th scope="col">Giá thấp nhất</th>
                <th scope="col">Giá trung bình</th>
              </tr>
            </thead>
            <tbody>
            <?php
                foreach ($listthongke1 as $thongke1) {
                    extract($thongke1);
                    echo '<tr>
                    <td>'.$iddanhmuc.'</td>
                    <td>'.$namedanhmuc.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$maxprice.'</td>
                    <td>'.$minprice.'</td>
                    <td>'.$avgprice.'</td>
                    <tr>
                    ';
                }
              ?>
            </tbody>
            
          </table>
          
          </div> 