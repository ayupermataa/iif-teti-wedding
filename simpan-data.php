<?php

    include"kns.php";
    extract($_POST);
    
        $smp=mysqli_query($kns,"INSERT INTO tb_rsvp VALUES(NULL,'$nama','$doa_ucapan','$kehadiran')");
        if($smp)
        {
            echo "<span style=color:#ffffff; >Berhasil Dikirim</span>";
        }
        else
        {
            echo "<span style=color:#ffffff; >Gagal Dikirim</span>";
        }      
   

?>