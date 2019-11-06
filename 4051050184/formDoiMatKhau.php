<html>
<head>
	<title>Trang đổi mật khẩu</title>
	<meta charset="utf-8">
</head>
<body>
<?
session_start();
if (isset($_SESSION['tendangnhapn']))
$ten=$_SESSION['tendangnhapn'];
echo "Tài Khoản ".$ten."</h3>";	
?>
	<form method="POST" action="KetNoi.php">
	<fieldset>
	    <legend>Thay Đổi</legend>
	    	<table>
	    		<tr>
	    			<?php session_start(); 
						if(isset($_SESSION['tendangnhap1']))
						$ten=$_SESSION['tendangnhap1'];
					echo "<h3>Tài Khoản".$ten."<h3>";
					?>
	    		</tr>
				<tr>
	    			<td>Password1</td>
	    			<td><input type="password" name="Password1" size="30" placeholder ="Nhập Mật Khẩu Cũ"></td>
	    		</tr>
	    		<tr>
	    			<td>Password2</td>
	    			<td><input type="password" name="Password2" size="30" placeholder="Nhập Mật Khẩu Mới"></td>
	    		</tr>
				<tr>
	    			<td>Password3</td>
	    			<td><input type="password" name="Password3" size="30" placeholder="Nhập lại Mật Khẩu Mới"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>