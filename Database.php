<?php
        require_once './MySQL/baglan.php';
?>



<?php
if(isset($_POST['kitapBilgisiEkle'])){
        if($_FILES["kitapresim"]["size"]>0){
             $uploads_dir='kitapresim';
             $output="";
             @$tmp_name=$_FILES['kitapresim'] ["tmp_name"];
             @$name=$_FILES['kitapresim'] ["name"];

             $sayi = rand(1,1000000);
             $sayi2 = rand(1,100000);
             $sayi3=rand(10000,2000000);

             $sayilar=$sayi.$sayi2.$sayi3;
             $resimyolu=$sayilar.$name;
             @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
      
                $kitapEkle=$baglanti->prepare("INSERT INTO kitapbilgileri SET
                        kitapresim=:kitapresim,
                        kitapismi=:kitapismi,
                        kitapsayfa=:kitapsayfa,
                        kitapyazar=:kitapyazar,
                        kitapyayinevi=:kitapyayinevi,
                        kitapkategori=:kitapkategori
                ");
            $insert =$kitapEkle->execute(array(
                        "kitapismi"=>$_POST['kitapismi'],
                        "kitapsayfa"=>$_POST['kitapsayfa'],
                        "kitapyazar"=>$_POST['kitapyazar'],
                        "kitapyayinevi"=>$_POST['yayinevi'],
                        "kitapkategori"=>$_POST['kitapkategori'],
                        "kitapresim"=>$resimyolu
            ));

           

            if($insert){ 
                        $output = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $output = "İşlem Hatasi";
         }

      $resp = array(
                'output'=>$output
      );
        echo json_encode($resp);
  }
}

/**********************************KİTAP DÜZENLEME İŞLEMİ*************************/


if(isset($_POST['bilgiduzenle'])){
        if($_FILES["kitapresim"]["size"]>0){
             $uploads_dir='kitapresim';
             $yenicikis="";
             @$tmp_name=$_FILES['kitapresim'] ["tmp_name"];
             @$name=$_FILES['kitapresim'] ["name"];

             $sayi = rand(1,1000000);
             $sayi2 = rand(1,100000);
             $sayi3=rand(10000,2000000);

             $sayilar=$sayi.$sayi2.$sayi3;
             $resimyolu=$sayilar.$name;
             @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
      
                $kitapEkle=$baglanti->prepare("UPDATE  kitapbilgileri SET
                        kitapresim=:kitapresim,
                        kitapismi=:kitapismi,
                        kitapsayfa=:kitapsayfa,
                        kitapyazar=:kitapyazar,
                        kitapyayinevi=:kitapyayinevi,
                        kitapkategori=:kitapkategori
                         
                        where id={$_POST['bilgiEditle']}
                ");
            $insert =$kitapEkle->execute(array(
                        "kitapismi"=>$_POST['kitapismi'],
                        "kitapsayfa"=>$_POST['kitapsayfa'],
                        "kitapyazar"=>$_POST['kitapyazar'],
                        "kitapyayinevi"=>$_POST['yayinevi'],
                        "kitapkategori"=>$_POST['kitapkategori'],
                        "kitapresim"=>$resimyolu
            ));

           

            if($insert){ 
                        $yenicikis = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $yenicikis = "İşlem Hatasi";
         }

      $resp3 = array(
                'yenicikis'=>$yenicikis
      );
        echo json_encode($resp3);
  }
}
        

/**********************************KİTAP SİLME İŞLEMİ*************************/

if(isset($_POST['idBilgi'])){

        $sil = $baglanti -> prepare("DELETE from kitapbilgileri  WHERE  id=:id");
        $kontrol = $sil -> execute(array(
                'id' => $_POST['idBilgi']
        ));

        if($kontrol){
                echo "İslem Basarili";
        }else{
                echo $_POST['idBilgi'];
        }
}


/**********************************ÜYE EKLEME İŞLEMİ*************************/


if(isset($_POST['okuyucuBilgiEkle'])){
                $cikis="";
                   $uyeEkle=$baglanti->prepare("INSERT INTO uyeler SET
                        isim=:isim,
                        soyisim=:soyisim,
                        numara=:numara,
                        tc=:tc  
                ");
            $insert= $uyeEkle->execute(array(
                        "isim"=>$_POST['isim'],
                        "soyisim"=>$_POST['soyisim'],
                        "numara"=>$_POST['numara'],
                        "tc"=>$_POST['tc']       
            ));

                 if($insert){ 
                        $cikis = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $cikis = "İşlem Hatasi";
         }

      $resp2 = array(
                'cikis'=>$cikis
      );
        echo json_encode($resp2);


               
}




/**********************************ÜYE SİLME İŞLEMİ*************************/
if(isset($_POST['idBilgi'])){

        $sil = $baglanti -> prepare("DELETE from uyeler  WHERE  id=:id");
        $kontrol = $sil -> execute(array(
                'id' => $_POST['idBilgi']
        ));

        if($kontrol){
                echo "İslem Basarili";
        }else{
                echo $_POST['idBilgi'];
        }
}


/**********************************ÜYE DÜZENLEME İŞLEMİ*************************/

if(isset($_POST['okuyucuDuzenle'])){
                $yenicikis5="";
                $uyeduzenle=$baglanti->prepare("UPDATE  uyeler SET
                        isim=:isim,
                        soyisim=:soyisim,
                        numara=:numara,
                        tc=:tc

                        where id={$_POST['okuyucuEditle']}
                ");
            $insert =$uyeduzenle->execute(array(
                        "isim"=>$_POST['isim'],
                        "soyisim"=>$_POST['soyisim'],
                        "numara"=>$_POST['numara'],
                        "tc"=>$_POST['tc']
            ));


            if($insert){ 
                        $yenicikis5 = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $yenicikis5 = "İşlem Hatasi";
         }

      $resp4 = array(
                'yenicikis5'=>$yenicikis5
      );
        echo json_encode($resp4);
  
}

/**********************************EMANET  İŞLEMİ*************************/

if(isset($_POST['emanetHemenTamamla'])){
                $yenicikis6="";
                $uyeduzenle=$baglanti->prepare("UPDATE  uyeler SET
                        isim=:isim,
                        soyisim=:soyisim,
                        numara=:numara,
                        tc=:tc,
                        EmanetEdilenKitap=:EmanetEdilenKitap
                       

                        where id={$_POST['emanetİdBilgi2']}
                ");
            $insert =$uyeduzenle->execute(array(
                        "isim"=>$_POST['emanetciad'],
                        "soyisim"=>$_POST['emanetcisoyad'],
                        "numara"=>$_POST['emanetcitel'],
                        "tc"=>$_POST['emanetcitc'],
                        "EmanetEdilenKitap"=>$_POST['EmanetEdilenKitap']
                        
            ));


            if($insert){ 
                        $yenicikis6 = "MYSQL SUNUCUSUNA KAYIT GÖNDERİLDİ";
           }else{
                       $yenicikis6 = "İşlem Hatasi";
         }

      $resp4 = array(
                'yenicikis6'=>$yenicikis6
      );
        echo json_encode($resp5);
  
}



?>