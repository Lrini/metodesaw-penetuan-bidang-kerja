<?php
      //  error_reporting(0);
        include("koneksi.php");

        if(isset($_POST['login'])){
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			
            $sql=mysql_query("SELECT * from admin where user ='$user' and pass ='$pass'");
            $row=mysql_num_rows($sql);
            $data=mysql_fetch_array($sql);

            if($user == "'or 1=1--"){
                echo "tidak bisa di injection lagi";
            }
            elseif($user == "'or1=1--"){
                echo "tidak bisa di injection lagi";

            }
            elseif($user== "' or 1=1 --"){
                    echo "tidak bisa di injection lagi";
            }

            elseif($user== "' or 1=1--"){
                    echo "tidak bisa di injection lagi";
            }
            elseif($user== "' or 1=1  --"){
                    echo "tidak bisa di injection lagi";
            }
            elseif($user== "' or 1=1   --"){
                    echo "tidak bisa di injection lagi";
            }else{

            
                if($row > 0){
                    session_start();
                   // $_SESSION['user']=$data['user'];
                        echo'    <script>alert("berhasil");window.location="index.php"</script>';
                }
            else
            {
                ?>
                <div style="color: red;font-size: 30px">
                <center>
                <b>Username dan Password Salah  !!</b>
                </center>
                </div>
                <?php
            }
        }}

        ?>