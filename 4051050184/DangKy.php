<?php require_once("NguyeBaSumCNTTK40C/KetNoiDangKy.php"); ?>
<html>
<head>
	<title>Trang Đăng ký</title>
	<meta charset="utf-8">
</head>
<body>
	<form  action="" method="POST" >
	<fieldset>
	    <legend>Đăng Ký</legend>
	    	<table>
	    		<tr>
	    			<td>UserName :</td>
	    			<td><input type="text" name="tendangnhap1" size="30" placeholder ="Nhập Tài Khoản"></td>
	    		</tr>
	    		<tr>
	    			<td>Password :</td>
	    			<td><input type="password" name="matkhau1" size="30" placeholder="Password"></td>
	    		</tr>
				<tr>
	    			<td>Nhập lại Password</td>
	    			<td><input type="password1" name="matkhau2" size="30" placeholder ="Nhớ Mật Khẩu"></td>
	    		</tr>
				<tr align="center" colspan="2">
					
					<td >  <input type="submit" name="btn_DK" value="Đăng Ký"></td>
				</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>
<?php
	if (isset($_POST["btn_DK"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["tendangnhap1"];
		$password1 = $_POST["matkhau1"];
		$password2 = $_POST["matkhau2"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password1 == "" || $password2 == "" ) {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			//thực hiện việc lưu trữ dữ liệu vào db
			$sql = "INSERT INTO thanhvien(tendangnhap,matkhau ) VALUES ( '$username','$password')" or die ("Kết nối với data không thành công");
			// thực thi câu $sql với biến ketnoi lấy từ file ketnoidangky.php
			mysqli_query($ketnoi,$sql);
			echo "chúc mừng bạn đã đăng ký thành công";
		}
	}
?>