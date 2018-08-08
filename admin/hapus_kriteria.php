<?php 
	
	include 'koneksi.php';
	$nip=$_GET['nip'];
	$sql =mysql_query("DELETE FROM kriteria where nip='$nip'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tkriteria.php';
        </script>
        <?php
    }

 ?>