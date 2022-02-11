<?php    require_once '../MySQL/baglan.php';?>
<?php
        $uyebilgileri = $baglanti->prepare("SELECT * from uyeler order by id ASC ");
        $uyebilgileri->execute();
?>

<div class="alert alert info"><input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Üye Arayın" title="Type in a name"></div>
<div class="alert alert-success" style="display:none;" id="SilmeAlani"></div>

<div class="col-md-12 position-absolute " style="top:15vh;">

  <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th scope="col">Üye  İsim</th>
        <th scope="col">Üye Soy İsim</th>
        <th scope="col">Üye Telefon</th>
        <th scope="col">Üye Tc Kimlik</th>
        <th scope="col">Üye Sil</th>
        <th scope="col">Üye Düzenle</th>
        <th scope="col">Kitap Emanet Et</th>
      </tr>
    </thead>


    <tbody >
          <?php
                while($uyecek = $uyebilgileri->fetch(PDO::FETCH_ASSOC)){
        ?>
       <tr>
                
                <td> <?php echo $uyecek['isim']?> </td>
                <td> <?php echo $uyecek['soyisim']?> </td>
                <td> <?php echo $uyecek['numara']?> </td>
                <td> <?php echo $uyecek['tc']?> </td>
                <td><button class="btn btn-danger sil" id="<?php echo $uyecek['id']?>">Sil</button></td>
                <td><button id="<?php echo $uyecek['id']?>" class="btn btn-success uyeDuzenle">Düzenle</button></td>
                <td><button class="btn btn-info depositBookButton" id="<?php echo $uyecek['id']?>">Kitap Emanet Et</button></td>
      </tr>
    <?php    }?>
    </tbody>

  </table>
</div>


