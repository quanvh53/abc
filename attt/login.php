<!DOCTYPE html> 
<html>
	<head>
		<title>Trang HTML</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link href ="image/dhqg.jpg" />
		<link rel="StyleSheet" type="text/css" href="css/style_login.css"/>
		<script type="text/javascript" src="js/login.js"></script>
	</head>
	<body>
	<div id="top" name="top">
		<div id="top_left" name="top_left">
			<image src="image/logo.png" align="center"></image>
		</div>
		<div id="top_right" name="top_right">
			<h2 name="title" id="title">CỔNG THÔNG TIN ĐÀO TẠO ĐẠI HỌC</h2>
		</div>
	</div>
	<hr>
	<div id='middle' name='middle'>
		<div id="left" name="left">
			<h5>THÔNG BÁO</h5>
			<ul>
				<li>Kế hoạch hướng dẫn sinh viên đăng ký môn học</li>
				<li>Kê hoạch đánh giá điểm</li>
			</ul>
			<h5>HƯỚNG DẪN SỬ DỤNG</h5>
			<ul>
				<li><a href=""  id="huong_dan">Hướng dẫn lấy lại mật khẩu</a></li>
				<li><a href="" id="huong_dan">Hướng dẫn đăng ký môn học của trường khác & các môn Mác - Lê nin</a></li>
				<li><a href="" id="huong_dan">Hướng dẫn đăng ký môn học của trường mình</a></li>
				<li><a href="" id="huong_dan">Thống kê lượng sinh viên đăng ký thông tin</a></li>
				<li><a href="" id="huong_dan">Hướng dẫn khai báo thông tin sinh viên</a></li>
				<li><a href="" id="huong_dan">Cán bộ quản lý: Nhấn vào đây để tải tài liệu hướng dẫn duyệt hồ sơ sinh viên về máy</a></li>
			</ul>
		</div>
		<div id="right" name="right">
			<fieldset width="300px" height="400px" id="khung_dn">
			<h4 name="title" id="title">ĐĂNG NHẬP<h4>
			<hr>
			<form action="xacnhan/xacnhan.php" method=post>
				<table width="410px" id="bang_login" >
					<tr><td>Tên truy cập</td></tr>
					<br>
					<tr>
						<td><input type="text" name="myname" id="myname"></td>
					</tr>
					<tr><td><br><td></tr>
					<tr><td>Mật khẩu</td></tr>
					<tr>
						<td><input type="password" name="pass" id="pass"></td>
					</tr>
					<tr>
					<td><a href= id="qmk"><h5 name="title" id="title">Quên mật khẩu ?</h5></a></td>
					<tr>
						<td><span id="loi_dang_nhap" class="thong_bao"></span></td>
					</tr>
					<tr>
					<td><input type="submit" value="Đăng nhập" id="submit"/></td>
					</tr>
			</tr>
				</table>
			</form> 
			<br><br>
			</fieldset>
		</div>
	</div>
	<hr>
	<div id='bottom' name='bottom'>
	</body>
</html>