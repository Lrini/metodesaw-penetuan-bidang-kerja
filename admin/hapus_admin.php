<?php 
	
	include 'koneksi.php';
	$id=$_GET['id'];
	$sql =mysql_query("DELETE FROM admin where id='$id'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tadmin.php';
        </script>
        <?php
    }

 ?>