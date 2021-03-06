<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!--cek editor-->
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="ckeditor/contents.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		<!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="#"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
		 <a href="index.php">
            <i class=""></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Form</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
			<ul class="treeview-menu">
				<li><a href="pegawai.php"><i class="fa fa-circle-o"></i>Pegawai</a></li>
				<li><a href="tempat.php"><i class="fa fa-circle-o"></i> Penempatan</a></li>
				<li><a href="kriteria.php"><i class="fa fa-circle-o"></i>Kriteria</a></li>
				<li><a href="pengumuman.php"><i class="fa fa-circle-o"></i>Admin</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Tables</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tpegawai.php"><i class="fa fa-circle-o"></i>Pegawai</a></li>
            <li><a href="ttempat.php"><i class="fa fa-circle-o"></i> Penempatan</a></li>
            <li><a href="tkriteria.php"><i class="fa fa-circle-o"></i>Kriteria</a></li>
            <li><a href="pengumuman.php"><i class="fa fa-circle-o"></i>Admin</a></li>
          </ul>
        </li>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class=""></i></a></li>
        <li class="active"></li>
      </ol>
    </section>
	<!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Pegawai</h3>
			 </div>
			 <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
			<?php 
					include 'koneksi.php';
					$nip=$_GET['nip'];
					$data = mysql_query("SELECT * FROM pegawai where nip='$nip'");
					$edit = mysql_fetch_array($data);
			?>
              <div class="box-body">
			   <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                 <input type="text" class="form-control" name="nip" value="<?php echo $edit['nip'] ?>"   />
				  <input type="hidden" name="nip" value="<?php echo $edit['nip'] ?>">
                </div>
			  <div class="form-group">
                  <label for="exampleInputEmail1">NIK</label>
                   <input type="text" class="form-control" name="nik" value="<?php echo $edit['nik'] ?>"/>
                </div>
			    <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $edit['nama'] ?>"/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $edit['alamat'] ?>"/>
                </div>
              </div>
			  <div class="form-group">
                   <label class="exampleInputEmail1">Jenis Kelamin</label>
                        <div  class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" id="jk1" value="L"> Pria
                            </label>
						</div>
						<div  class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" id ="jk2" value="P"> Wanita
                            </label>
						</div>  
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat" value="<?php echo $edit['tempat'] ?>"/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                   <div class="controls">
                        <div class="col-md xdisplay_inputx form-group has-feedback" >
                            <input type="date" name ="tgl_lahir" class="form-control has-feedback-left"/>
						</div>
                    </div>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan" value="<?php echo $edit['pendidikan'] ?>"/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kerja</label>
                   <div class="controls">
                        <div class="col-md xdisplay_inputx form-group has-feedback" >
                            <input type="date" name ="tgl_kerja" class="form-control has-feedback-left"/>
						</div>
                    </div>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="<?php echo $edit['ket'] ?>"/>
                </div>
              </div>
        <!-- /.box-body -->
		 <div class="box-footer">
                <button type="submit" class="btn btn-primary fa fa-download" name="simpan" value="SIMPAN" >Submit</button>
              </div>
            </form>
			  <?php 

    include 'koneksi.php';
	 if(isset($_POST['simpan'])){
		$nip= $_POST['nip'];
		$nik = $_POST ['nik'];
		$nama = $_POST['nama'];
		$alamat=$_POST['alamat'];
		$jk=$_POST['jk'];
		$tempat=$_POST['tempat'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$pendidikan=$_POST['pendidikan'];
		$tgl_kerja=$_POST['tgl_kerja'];
		$keterangan=$_POST['keterangan'];
        $sql = mysql_query("update pegawai set nik='$nik',nama='$nama',alamat='$alamat',jk='$jk',tempat='$tempat',tgl_lahir='$tgl_lahir',pendidikan='$pendidikan',tgl_kerja='$tgl_kerja',ket='$keterangan' where nip='$nip'");

       if($sql){
          ?>
          <script type="text/javascript">
            alert('Berhasil');window.location='tpegawai.php';
          </script>
          <?php
        }
	 }
   ?>
          </div>
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b> 
    </div>
    <strong>Copyright<a href="#"></a>.</strong> 2018
    
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
