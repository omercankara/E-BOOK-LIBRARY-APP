<?php
        require_once 'MySQL/baglan.php'

?>

<?php
        $bilgisor = $baglanti -> prepare("SELECT * FROM uyeler where id=:id");
        $bilgisor->execute(array(
                'id'=>$_POST['idBilgisiGiden']

        ));

        $bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC);

         $array = array(
         
                "isim"=>$bilgicek['isim'],
                "soyisim"=>$bilgicek['soyisim'],
                "numara"=>$bilgicek['numara'],
                "tc"=>$bilgicek['tc'],
                 'id'=> $bilgicek['id']
         );
         echo $json =  json_encode($array);

?>