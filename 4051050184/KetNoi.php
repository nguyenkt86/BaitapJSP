<html>
<head>
	<title>Trang đổi mật khẩu</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$ten=$_POST['tendangnhap1'];
	$mk=$_POST['matkhau1'];
	$_SESSION['tendangnhapn']=$ten;
	// connection
	$conn=mysqli_connect("localhost","root","","cnttk40c") or die ("Không Thể Kết Nối Với Data");
	// Xây Dựng Câu Lệnh Truy Vấn
	$CauLenh="Select * from thanhvien where matkhau='".$mk."' and tendangnhap='".$ten."'";
	//Xử lý Data
	$kq=mysqli_query($conn,$CauLenh) or die ("Xử Lý Không Thành Công");
	//Xử Lý Kết quả trả về 
	if($kiemtra=mysqli_fetch_array($kq))
	{
		if($kiemtra['matkhau']==$mk)
		{
			echo "Đăng nhập thành công : ".$kiemtra['tendangnhap'];
			header('NguyenBaSumCNTTK40C:formDoiMatKhau.php');
		}
		else
			echo "Đăng nhập không thành công";
	}
	else "tai khoan khong ton tai";
mysqli_close($conn);
//setcookie('tendangnhap',$mk,$expire)	
//$expire=time()+60*2;
?>
</body>
</html>