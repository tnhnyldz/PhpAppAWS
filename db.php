<?php
try{
    $host='projedb.cj7emtkcblwv.eu-west-1.rds.amazonaws.com';
    $dbname='dbProje';
    $kullanici='Proje123';
    $sifre='12345678';
    $db=new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8","$kullanici",$sifre);

}
catch(PDOException $e){
    print $e->getMessage();
}
?>
