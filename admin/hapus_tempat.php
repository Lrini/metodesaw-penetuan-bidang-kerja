<?php 
	
	include 'koneksi.php';
	$nip=$_GET['nip'];
	$sql =mysql_query("DELETE FROM penempatan where nip='$nip'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='ttempat.php';
        </script>
        <?php
    }

 ?>