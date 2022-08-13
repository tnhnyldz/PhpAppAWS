<?php
include("db.php");
$sorgu = $db->prepare('SELECT * FROM ornek_tbl');
$sorgu->execute();
$list = $sorgu->fetchAll(PDO::FETCH_OBJ); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
  <!-- Css -->
  <link rel="stylesheet" href="style.css" />

  <title>Öğrenci Giriş/Çıkış</title>
</head>

<body>
  <div>
    <p>Öğrenci Giriş/Çıkış Uygulaması</p>
  </div>
  <div >
    <div >
      <div >
       <form action="delete.php" method="post" class="row g-3 needs-validation" novalidate>
          <div >
            <label for="isim" >Adınız</label>
            <input type="text"  name="isim" />
          </div>

          <div >
            <label for="soyisim" >Soyadınız</label>
            <input type="text"  name="soyisim" />
          </div>
          <div >
            <label for="numara" >Numaranız</label>
            <input type="text"  name="numara" />
          </div>

          <div>
            <button  type="submit">Giriş Yap</button>
          </div>
        </form>
      </div>

      <div>
        <p >İçerideki Öğrenciler</p>
          <table>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">İsim</th>
              <th scope="col">Soyisim</th>
              <th scope="col">Numara</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td></td>
              <td><a class="btn btn-danger">Çıkış Yap</a></td>
            </tr>


            <?php

            foreach ($list as $person) { ?>
              <tr>
                <th scope="row"><?= $person->id ?></th>
                <td><?= $person->ad ?></td>
                <td><?= $person->soyad ?></td>
                <td><?= $person->numara ?></td>
                <td><a href="delete.php?pid=<?= $person-> id?>" class="btn btn-danger">Çıkış Yap</a></td>
              </tr>

            <?php   } ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>