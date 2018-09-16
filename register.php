<?php
error_reporting(0);
include 'admin/config.php';
if($_POST['submit'])
{

$user = $_POST['uname'];
$pass = $_POST['pass'];
$foto = $_POST['foto'];

mysql_query("INSERT INTO admin VALUES('','$user','".md5($_POST['pass'])."','$foto')");
  exit("<script>window.alert('Anda telah terdaftar');window.location='index.php'</script>");
}
?>

<body background="logo/dumaipos.png" style="background-size:100%">
<br><br><br><br><br><br><br><br>
<form method="post">
<table align="center" bgcolor="black" border="0">
<tr>
	<td>		
		<table width="280" height="198" border="0" align="center" bgcolor="0FD0F0">
			<tr>
				<th width="90" height="35" scope="row"><div align="left">Username</div></th>
				<td align="center">:</td>
				<td align="center"><input type="text" name="uname" required></td>					
			</tr>
			<tr>
				<th width="90" height="35" scope="row"><div align="left">Password</div></th>
				<td align="center">:</td>
				<td align="center"><input type="password" name="pass" required></td>					
			</tr>	
			<tr>
				<td><input type="hidden" name="foto" value=""></td>					
			</tr>
			<tr>
				<td></td>
				<td></td>	
				<td align="center"><input type="submit" name="submit" value="Simpan"></td>				
			</tr>				
		</table>
	</td>
</tr>
</table>
</form>