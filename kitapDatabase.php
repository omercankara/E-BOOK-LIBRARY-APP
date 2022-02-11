<?php
        require_once 'MySQL/baglan.php'

?>

<?php
        $bilgisor = $baglanti -> prepare("SELECT * FROM kitapbilgileri where id=:id");
        $bilgisor->execute(array(
                'id'=>$_POST['idBilgi']

        ));

        $bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC);

         $array = array(
         
                "kitapismi"=>$bilgicek['kitapismi'],
                "kitapsayfa"=>$bilgicek['kitapsayfa'],
                "kitapyazar"=>$bilgicek['kitapyazar'],
                "kitapyayinevi"=>$bilgicek['kitapyayinevi'],
                "kitapkategori"=>$bilgicek['kitapkategori'],
                 'id'=> $bilgicek['id']
         );
         echo $json =  json_encode($array);

?>