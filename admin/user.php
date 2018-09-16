<div class="row-fluid">
    <div class="span6" style="margin-left: 220px;">
    <div class="alert alert-success">Register User</div>
      <form class="form-horizontal" method="POST">
      <div class="control-group">
      <label class="control-label" for="inputuser">Username</label>
      <div class="controls">
      <input type="text" id="inputuser" name="username" placeholder="Username" required>
      </div>
      </div>
      <div class="control-group">
      <label class="control-label" for="inputPassword">Password</label>
      <div class="controls">
      <input type="text" id="inputPassword" name="password" placeholder="Password" required>
      </div>
      </div>
      <div class="control-group">
      <div class="controls">
      <button type="submit" name="register" class="btn btn-success">Save</button>
      </div>
      </div>
      </form>
    </div>
    <?php
    include 'config.php';

    if (isset($_POST['register'])){
    $uname=$_POST['uname'];
    $pass=md5($_POST['pass']);
 
    mysql_query("insert into admin (uname,pass) values('$uname','$pass')")or die(mysql_error());
    header('location:index.php');
    }
    ?>
  </div>