<?php include("../top.php"); ?>

            <!-- Navbar End -->
            <div class="content_body bg-light">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Quản lý danh mục</h6>
                    <div class="d-flex align-items-center gap-2">
					<div id="formthem">
<form class="form-inline" method="post">
	<input type="hidden" name="action" value="them">
	<div><input type="text" name="txtten" placeholder="Nhập tên danh mục" class="add_category_inp"></div>
	<input type="submit" class="btn btn-warning mt-2 mb-4" value="Thêm danh mục mới">
</form>
</div>


                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
	foreach($danhmuc as $d):
		if($d["id"] == $idsua) {
	?>
			<form method="post">
			<input type="hidden" name="txtid" value="<?php echo $d["id"]; ?>">
			<input type="hidden" name="action" value="capnhat">
			<tr>
				<td><input type="text" class="form-control" name="txtten" value="<?php echo $d["tendanhmuc"]; ?>"></td>
				<td><input type="submit" class="btn btn-warning" value="Sửa"></td>
				<td><a href="index.php?action=xoa&id=<?php echo $d["id"]; ?>">Xóa</a></td>
			</tr>
			</form>
	<?php
		}
		else{			
	?>
			<tr>
				<td><?php echo $d["tendanhmuc"]; ?></td>
				<td><a href="index.php?action=sua&id=<?php echo $d["id"]; ?>">Sửa</a></td>
				<td><a href="index.php?action=xoa&id=<?php echo $d["id"]; ?>">Xóa</a></td>
			</tr>
	<?php
		}
	endforeach;
	?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            

<?php include("../bottom.php"); ?>
