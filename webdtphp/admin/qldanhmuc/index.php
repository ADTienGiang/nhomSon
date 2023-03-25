<?php 
//if(!isset($_SESSION["nguoidung"]))
//    header("location:../index.php");
require("../../model/database.php");
require("../../model/danhmuc.php");
session_start();

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$dm = new DANHMUC();
$idsua = 0;

switch($action){
    case "xem":
        $danhmuc = $dm->laydanhmuc();       
        include("main.php");
        break;
        case "them":
            $tendm = $_POST["txtten"];
            if (!$dm->kiemtratendanhmuctrung($tendm)) {
                // Nếu không bị trùng tên danh mục, thực hiện thêm mới
                $dm->themdanhmuc($tendm);
            } else {
                // Nếu bị trùng tên danh mục, hiển thị thông báo lỗi
                echo "<script>alert('Tên danh mục đã tồn tại!');</script>";
            }
            $danhmuc = $dm->laydanhmuc(); 
            include("main.php");
            break;
        
        case "xoa":
            $id = $_GET["id"];
            // Kiểm tra xem danh mục có chứa các bản ghi phụ thuộc hay không
            $has_dependent_records = $dm->kiemtradulieuphuthuoc($id);
            if ($has_dependent_records) {
                // Nếu có, hiển thị cảnh báo và không cho phép xóa
                echo "<script>alert('Không thể xóa danh mục này vì có các bản ghi phụ thuộc.');</script>";
            } else {
                // Nếu không, tiến hành xóa
                $dm->xoadanhmuc($id);
            }
            $danhmuc = $dm->laydanhmuc(); 
            include("main.php");
            break;
        
	case "sua":
		$idsua = $_GET["id"];
        $danhmuc = $dm->laydanhmuc();       
        include("main.php");
        break;
	case "capnhat":
		$dm->suadanhmuc($_POST["txtid"], $_POST["txtten"]);
        $danhmuc = $dm->laydanhmuc();       
        include("main.php");
        break;
    default:
        break;
}
?>
