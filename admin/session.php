<?php
if(isset($_SESSION['login_hash']))
{
	if($_SESSION['login_hash']!="admin")
	{
		echo "<script>window.location='?cat=admin&page=logout'</script>";
	}
}
?>