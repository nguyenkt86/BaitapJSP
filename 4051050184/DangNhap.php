<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
</head>
<body>
	<form  action="KetNoi.php" method="POST" >
	<fieldset>
	    <legend>Đăng nhập</legend>
	    	<table>
	    		<tr>
	    			<td>Username :</td>
	    			<td><input type="text" name="tendangnhap1" size="30" placeholder ="Nhập Tài Khoản"></td>
	    		</tr>
	    		<tr>
	    			<td>Password :</td>
	    			<td><input type="password" name="matkhau1" size="30" placeholder="Password"></td>
	    		</tr>
				<tr>
	    			<td>Nhớ Mật Khẩu</td>
	    			<td><input type="CheckBox" name="saveMK" size="30" placeholder ="Nhớ Mật Khẩu"></td>
	    		</tr>
				<tr align="center" colspan="2">
					<td > <input type="submit" name="btn_submit" value="Đăng nhập"></td>
					<td >  <input type="submit" name="btn_DK" value="Đăng Ký"></td>
				</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>