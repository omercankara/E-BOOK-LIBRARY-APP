

<form method="post" id="EmanetGondermeForm" enctype="multipart/form-data">
<?php
        require_once './MySQL/baglan.php';
?>
<?php
        $kitapbilgileri = $baglanti->prepare("SELECT * from kitapbilgileri order by id ASC ");
        $kitapbilgileri->execute();
?>
                <div class="col-md-12  d-flex justify-content-center align-items-center">
                        <div class="col-md-6  d-flex flex-column justify-content-center">
                                        <div class="form-group d-flex mt-2">
                                                 <h4 style="width:30%">İsim</h4>
                                                <input type="text" id="emanetciad" name="emanetciad"     class="form-control ml-4">   
                                        </div>
                                         <div class="form-group d-flex mt-2 ">
                                                 <h4 style="width:30%">Soy İsim</h4>
                                                <input type="text" id="emanetcisoyad"  name="emanetcisoyad"    class="form-control ml-4">   
                                        </div>
                                         <div class="form-group d-flex mt-2 ">
                                                 <h4 style="width:30%">Tc Kimlik No</h4>
                                                <input type="text" id="emanetcitc"  name="emanetcitc"    class="form-control ml-4">   
                                        </div>
                                         <div class="form-group d-flex mt-2 ">
                                                 <h4 style="width:30%">Telefon No</h4>
                                                <input type="text" id="emanetcitel"   name="emanetcitel"    class="form-control ml-4">   
                                        </div>
                                         <div class="form-group d-flex mt-2 ">
                                                 <h4 style="width:35%">Verilecek Kitap</h4>
                                                 <select name="EmanetEdilenKitap"   class="form-control">
                                                 <?php
                                                 
                                                        while($kitapcek=$kitapbilgileri-> fetch(PDO::FETCH_ASSOC)){                                                                                                     
                                                        ?>
                                                        <option id="secilenKitap"> <?php echo $kitapcek['kitapismi'] ?></option>
                                               

                                                <?php } ?>
                                                 </select>
                                        </div>
                                        <div class="form-group d-flex justify-content-center mt-2 ">
                                              
                                               <button type="submit" class="btn btn-success ">Emanet İşlemini Tamamla</button>
                                        </div>
                                           <input type="hidden" name="emanetHemenTamamla">
                                           <input type="hidden" name="emanetİdBilgi2" id="emanetİdBilgi2">
                                </div>
 </div>
 </form>
