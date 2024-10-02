
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="container-login" style="background-image: url('dist/img/bg-01.jpg');">
<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41"></span>
<div class="login-box">
  <div class="login-logo">
    <b>Daftar</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  
    <form action="" method="post">

    <div class="form-group has-feedback">
        <input type="text" name="nama_pengguna" id="nama_pengguna" class="form-control" placeholder="Nama Pengguna">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <select class="form-control" id="level" name="level" placeholder="Level">
            <option>Admin</option>
            <option>Pengguna</option>
        </select>
      </div>

      <div class="row">
        <div class="col-xs-4">
        <input type="submit" name="submit" value="submit" class="btn btn-info">
        </div>
        <div class="col-xs-4">
        <a href="login.php" class="btn btn-info btn-block btn-flat" target="_blank">Batal</a>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
<?php
 include "config/database.php";
 
      if (isset ($_POST['submit'])){
    $nama_pengguna=ucwords(addslashes(trim($_POST["nama_pengguna"])));
    $username=addslashes(trim($_POST["username"]));
    $password=md5(addslashes(trim($_POST["password"])));
    $level=addslashes(trim($_POST["level"]));
        
     $sql_simpan ="insert into pengguna (nama_pengguna,username,password,level) values  ('$nama_pengguna','$username','$password','$level')";
        $query_simpan = mysqli_query($kon, $sql_simpan);
        mysqli_close($kon);

   if ($query_simpan) {
    echo " <div class='alert alert-success'>
    Berhasil mendaftar, silakan masuk.
    </div>
  <meta http-equiv='refresh' content='1; url= login.php'/>  ";
  } else { echo "<div class='alert alert-warning'>
    Gagal mendaftar, silakan coba lagi.
    </div>
   <meta http-equiv='refresh' content='1; url= daftar.php'/> ";
  }
  
};
?>

