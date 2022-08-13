<?php
    if(isset($_GET["pid"])){
        include("db.php");
        $sorgu=$db-> prepare('DELETE FROM ornek_tbl WHERE id=?');

        $sonuc=$sorgu-> execute([$_GET['pid']]);
            if($sonuc){
                header("location:index.php");
            }else{
                echo("kayit silinemedi");
            }
    }else{
        include("db.php");
        $isim=$_POST['isim'];
        $soyisim=$_POST['soyisim'];
        $numara=$_POST['numara'];


        
         $ekle= $db->prepare("INSERT INTO ornek_tbl SET ad=?,soyad=?,numara=?");
         $ekle->execute([$isim,$soyisim,$numara]);

         if($ekle){
             echo "eklendi";
             header("location:index.php");
         }else{
             echo"eklenmedi";
         }
    }
?>