<!DOCTYPE html>
<?php
        require_once "MySQL/baglan.php"
?>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<style>
        #basariliAlan{
                display:none;
        }
</style>
        

<div class="container-fluid">
        <div class="row">
                <?php   require_once 'Actions/menu.php' ?>
        </div>
</div>

<!-----------------KİTAP EKLEME CONTAİNERI-------------------->

<div class="container-fluid">
        <div class="row" id="addBookContainer">
                 <div class="col-md-12 ">
                        <?php  require_once "Actions/kitapEkle.php"  ?>
                </div>
        </div> <!--ROW-->
</div> <!--CONTAİNER-FLUİD-->


<!-----------------KİTAP LİSTELEME CONTAİNER-------------------->

<div class="container-fluid">
        <div class="row" id="bookListContainer"></div>
</div>

<!-----------------KİTAP DÜZENLEME    CONTAİNER-------------------->
<div class="container-fluid">
        <div class="row" id="editBook">
                 <div class="col-md-12 ">
                        <?php  require_once "Actions/kitapduzenle.php" ?>

                </div>

        </div> <!--ROW-->
</div> 



<!-----------------YENİ ÜYE EKLEME CONTAİNER-------------------->
<div class="container-fluid">
        <div class="row" id="reading">
                 <div class="col-md-12 ">
                        <?php  require_once "Actions/okuyucuEkle.php"  ?>
                </div>
        </div> <!--ROW-->
</div> 


<!------------------ÜYELERİ LİSTELEME CONTAİNARI------------------------>
<div class="container-fluid">
        <div class="row" id="readingListContainer"></div>
</div>

<!------------------ÜYELERİ DÜZENLEME CONTAİNARI------------------------>
<div class="container-fluid">
        <div class="row" id="editMembers">
                    <?php  require_once "Actions/okuyucuDuzenle.php" ?>
        </div>
</div>

<!------------------EMANET KİTAP VERME CONTAİNARI------------------------>
<div class="container-fluid">
        <div class="row" id="depositBook">
                        <?php  require_once "Actions/emanetEdilenler.php" ?>
        </div>
</div>


<div class="container-fluid">
        <div class="row" id="depositBookListe">
                        <?php  require_once "EmanetListe.php" ?>
        </div>
</div>



<style>

        #bookListContainer{
                display:none;
        }
        #reading{
                display:none;
        }
        #editBook{
                display:none;
        }
        #readingListContainer{
                display:none;
        }

        #editMembers{
                display:none;
        }
        #depositBook{
                display:none;
        }

        #depositBookListe{
                 display:none;
        }


  
</style>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="Javascript/state.js"></script>
<script src="Javascript/filter.js"></script>
</body>
</html>