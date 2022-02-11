<?php    require_once '../MySQL/baglan.php';?>
<?php
        $kitapbilgileri = $baglanti->prepare("SELECT * from kitapbilgileri order by id ASC ");
        $kitapbilgileri->execute();
?>

<div class="alert alert info"><input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Kitap Arayın" title="Type in a name"></div>
<div class="alert alert-success" style="display:none;" id="SilmeAlani"></div>

<div class="col-md-12 position-absolute " style="top:15vh;">

  <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th scope="col">Kitap Resmi</th>
        <th scope="col">Kitap İsmi</th>
        <th scope="col">Kitap Sayfası</th>
        <th scope="col">Kitap Yazar</th>
        <th scope="col">Kitap Yayin Evi</th>
        <th scope="col">Kitap Kategori</th>
         <th scope="col">Kitap Duzenle</th>
        <th scope="col">Kitap Sil</th>
      </tr>
    </thead>


    <tbody >
          <?php
                while($kitapcek = $kitapbilgileri->fetch(PDO::FETCH_ASSOC)){
        ?>
       <tr>
                
                <td><img class="img-fluid" style="width:150px;" src="./kitapresim/<?php echo $kitapcek['kitapresim']?>"></td>
                <td> <?php echo $kitapcek['kitapismi']?> </td>
                <td> <?php echo $kitapcek['kitapsayfa']?> </td>
                <td> <?php echo $kitapcek['kitapyazar']?> </td>
                <td> <?php echo $kitapcek['kitapyayinevi']?> </td>
                <td> <?php echo $kitapcek['kitapkategori']?> </td>
                <td><button class="btn btn-danger sil" id="<?php echo $kitapcek['id']?>">Sil</button></td>
                 <td><button id="<?php echo $kitapcek['id']?>" class="btn btn-success duzenle">Düzenle</button></td>
                 
      </tr>
    <?php    }?>
    </tbody>

  </table>
</div>


