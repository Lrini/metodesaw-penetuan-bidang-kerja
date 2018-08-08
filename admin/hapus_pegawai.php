<?php 
	
	include 'koneksi.php';
	$nip=$_GET['nip'];
	$sql =mysql_query("DELETE FROM pegawai where nip='$nip'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tpegawai.php';
        </script>
        <?php
    }

 ?>