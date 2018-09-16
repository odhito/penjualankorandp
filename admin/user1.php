<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
body {
	font: 11px/24px "Lucida Grande", "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #5A698B;
}

#title {
	width: 330px;
	height: 26px;
	color: #5A698B;
	font: bold 11px/18px "Lucida Grande", "Trebuchet MS", Arial, Helvetica, sans-serif;
	padding-top: 5px;
	background: transparent url("bg_legend.gif") no-repeat;
	text-transform: uppercase;
	letter-spacing: 2px;
	text-align: center;
}

form {
	width: 335px;
	margin:0 auto;
}

.col1 {
	text-align: right;
	width: 135px;
	height: 31px;
	margin: 0;
	float: left;
	margin-right: 2px;
	background: url(bg_label.gif) no-repeat;
}

.col2 {
	width: 195px;
	height: 31px;
	display: block;
	float: left;
	margin: 0;
	background: url(bg_textfield.gif) no-repeat;
}

.col2comment {
	width: 195px;
	height: 98px;
	margin: 0;
	display: block;
	float: left;
	background: url(bg_textarea.gif) no-repeat;
}

.col1comment {
	text-align: right;
	width: 135px;
	height: 98px;
	float: left;
	display: block;
	margin-right: 2px;
	background: url(bg_label_comment.gif) no-repeat;
}

div.row {
	clear: both;
	width: 335px;
}

.submit {
	height: 29px;
	width: 330px;
	background: url(bg_legend.gif) no-repeat;
	padding-top: 5px;
	clear: both;
} 

.input {
	background-color: #fff;
	font: 11px/14px "Lucida Grande", "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #5A698B;
	margin: 4px 0 5px 8px;
	padding: 1px;
	border: 1px solid #8595B2;
}

.textarea {
	border: 1px solid #8595B2;
	background-color: #fff;
	font: 11px/14px "Lucida Grande", "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #5A698B;
	margin: 4px 0 5px 8px;
	width: 168px; padding: 3px; height: 79px;
}

</style>
</head>

<body>
<form action="save.php" method="post">
<div id="title">Registration form</div>
<div class="row">
  <label class="col1">Username:&nbsp;&nbsp;</label>
  <span class="col2">
  <input name="uname" class="input" type="text" id="uname" size="20" tabindex="3" />
  </span></div>
<div class="row">
  <label class="col1">Password:&nbsp;&nbsp;</label>
<span class="col2"><input name="password" class="input" type="password" id="pass" size="20" tabindex="3" />
</span>
</div>
<div align="center" class="submit"><input type="image" src="b_send.gif" alt="send" width="52" height="19" border="0" style="margin-left: 13px;"/>
</div>
</form>
</body>
</html>
