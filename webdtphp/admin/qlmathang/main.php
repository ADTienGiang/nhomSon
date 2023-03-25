<?php include("../top.php"); ?>



            <!-- Navbar End -->
            <div class="content_body">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Quản lý mặt hàng</h6>
<a href="index.php?action=them" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Thêm mặt hàng</a>

                    <!-- <button class="btn btn-info" id="btn_open_add_product"><i class="fa fa-plus-circle"></i> Thêm mặt hàng mới</button> -->
                    <!-- <div class="form_content w-75">
                        <div class="bg-light rounded h-100 p-4">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Hãng sản xuất</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên mặt hàng</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Giá nhập</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>  
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Giá bán</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-info">Lưu</button>
                                <button type="submit" class="btn btn-warning" id="btn_close_add_product">Hủy</button>
                            </form>
                        </div> -->
                    <!-- </div> -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Tên mặt hàng</th>
                                <th scope="col">Giá bán</th>
                                <th scope="col">Số lượng sản phẩm</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
	foreach($mathang as $m):
	?>
	<tr>
		<td><?php echo $m["tenmathang"]; ?></td>
		<td><?php echo $m["giaban"]; ?></td>
		<td><?php echo $m["soluongton"]; ?></td>
		<td><img src="../../<?php echo $m["hinhanh"]; ?>" width="80" class="img-thumbnail"></td>
		
        <td><a href="index.php?action=sua&id=<?php echo $m["id"]; ?>" class="btn btn-outline-info m-2"><i class="fa fa-pen"></i></a></td>
        
		<td><a  class="btn btn-outline-warning m-2" href="index.php?action=xoa&id=<?php echo $m["id"]; ?>"><i class="fa fa-trash"></i></a></td>
	</tr>
	<?php
	endforeach;
	?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
    
           

            <?php include("../bottom.php"); ?>
