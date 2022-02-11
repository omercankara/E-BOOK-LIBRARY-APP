
       
/***************************************HTML DOM ACTİONS***************************************************/
$().ready(function(){

        $('#addBook').click(function(e){
                e.preventDefault();
                $('#addBookContainer').fadeIn();
                $('#bookListContainer').fadeOut();
                $('#reading').fadeOut();
                $("#editBook").fadeOut()  
                 $('#readingListContainer').fadeOut();  
                $('#editMembers').fadeOut()
                 $('#depositBook').fadeOut()
                 $('#depositBookListe').fadeOut()
                

        })

        $('#listBook').click(function(e){
        e.preventDefault()
                
                $('#bookListContainer').fadeIn();
                $('#addBookContainer').fadeOut();
                $('#reading').fadeOut();
                $("#editBook").fadeOut()  
                 $('#readingListContainer').fadeOut();  
                  $('#editMembers').fadeOut()
                    $('#depositBook').fadeOut()
                     $('#depositBookListe').fadeOut()
                $('#bookListContainer').load("Actions/kitaplistesi.php");
                

        })
                      
        $('#addReadingMembers').click(function(e){
                        e.preventDefault()
                        $('#bookListContainer').fadeOut();
                        $('#addBookContainer').fadeOut();
                        $('#reading').fadeIn();
                        $("#editBook").fadeOut()  
                          $('#depositBook').fadeOut()
                        $('#readingListContainer').fadeOut();  
                         $('#depositBookListe').fadeOut()
                         $('#editMembers').fadeOut()
                 
        })

                
           $('#readingList').click(function(e){
                e.preventDefault();
                $('#addBookContainer').fadeOut();
                $('#bookListContainer').fadeOut();
                $('#reading').fadeOut();
                  $('#depositBook').fadeOut()
                $("#editBook").fadeOut()
                 $('#depositBookListe').fadeOut()
                $('#readingListContainer').fadeIn();  
                 $('#editMembers').fadeOut()
                $('#readingListContainer').load("Actions/okuyucuListesi.php");

        })

            $('#depositList').click(function(e){
                e.preventDefault();
                $('#addBookContainer').fadeOut();
                $('#bookListContainer').fadeOut();
                $('#reading').fadeOut();
                  $('#depositBook').fadeOut()
                $("#editBook").fadeOut()
                 $('#depositBookListe').fadeIn()
                $('#readingListContainer').fadeOut();  
                 $('#editMembers').fadeOut()
                            $('#depositBookListe').load("EmanetListe.php");

                

        })


  


        

/**************************************BOOK SAVE ACTİONS***************************************************/

     $('#kitapBilgiForm').on("submit", function(e){
        e.preventDefault();

        var form_data = new FormData(this)
        $.ajax({
                type:"post",
                url:"Database.php",
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                         $("#basariliAlan").fadeIn(100).text(response.output).fadeOut(3000);
                         $('#bookListContainer').load("Actions/kitaplistesi.php");
                }
        })
     })
     

/***************************************DELETE BOOK ACTİONS***************************************************/

         $('body').on("click",".sil", function(){
          $('#bookListContainer').load("Actions/kitaplistesi.php");
                var idBilgi = $(this).attr("id"); //attr ile istenilen özelligi al
                        $.ajax({
                                type:"post",
                                url:"Database.php",
                                data:{'idBilgi' :idBilgi}, //Gelen idyi obje olarak pasla
                                success:function(response){
                                $("#SilmeAlani").fadeIn(100).text(response)
                                        $('#bookListContainer').load("Actions/kitaplistesi.php");
                                }
                        })
       })


/***************************************BOOK EDİT ACTİONS***************************************************/

    $('#kitapBilgiDuzenle').on("submit", function(e){
        e.preventDefault();
        
        var form_data = new FormData(this)
        $.ajax({
                type:"post",
                url:"Database.php",
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                         $("#kitapDuzenlemeAlani").fadeIn(100).text(response.yenicikis).fadeOut(3000);
                         $('#bookListContainer').load("Actions/kitaplistesi.php");
                         
                }
        })
     })

})

/***************************************GET THE BOOKS DETAİLS***************************************************/


$('body').on("click", ".duzenle" ,function(e){
        e.preventDefault()
        var idBilgi = $(this).attr("id"); 
        $('#bookListContainer').fadeOut();
        $("#editBook").fadeIn()  
        
        $.ajax({
                type:"post",
                url:"kitapDatabase.php",
               data:{'idBilgi':idBilgi},
               success:function(response){
                        var obj = JSON.parse(response)
                                $("#kitapismi").val(obj.kitapismi)
                                $("#kitapsayfa").val(obj.kitapsayfa)
                                $("#kitapyazar").val(obj.kitapyazar)
                                $("#yayinevi").val(obj.kitapyayinevi)
                                $("#kitapkategori").val(obj.kitapkategori)
                                 $("#idBilgisi").val(obj.id) 
                                 //KitapDuzenle.php den id bilgisini obje
                                 // olarak al ve inputun için push et daha sonra o id bilgisini form içinde databaseye bas
                }
        })
})


/***************************************ADD MEMBERS ACTİONS***************************************************/


$('#okuyucuEklemeform').on("submit", function(e){
        e.preventDefault();
        var form_data = new FormData(this)
        $.ajax({
                type:"post",
                url:"Database.php",
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                        $("#okuyucuAlani").fadeIn(100).text(response.cikis).fadeOut(3000);
                        $('#readingListContainer').load("Actions/okuyucuListesi.php");
                }
        })
     })


/***************************************GET THE MEMBERS DETAİLS***************************************************/

     $('body').on("click", ".uyeDuzenle" ,function(e){
        e.preventDefault()
        var idBilgisiGiden = $(this).attr("id"); 
        $('#readingListContainer').fadeOut();
        $('#editMembers').fadeIn()
        
        $.ajax({
                type:"post",
                url:"MembersDatabase.php",
               data:{'idBilgisiGiden':idBilgisiGiden},
               success:function(response){
                        var obj = JSON.parse(response)
                             
                                $("#isim").val(obj.isim)
                                $("#soyisim").val(obj.soyisim)
                                $("#numara").val(obj.numara)
                                $("#tc").val(obj.tc)
                                 $("#idBilgisigelen").val(obj.id) 
                                 //KitapDuzenle.php den id bilgisini obje
                                 // olarak al ve inputun içinE push et daha sonra o id bilgisini form içinde databaseye bas
                }
        })
})

/***************************************EDİT MEMBERS ACTİONS***************************************************/


  $('#uyeBilgiDuzenle').on("submit", function(e){
        e.preventDefault();
       
        var form_data = new FormData(this)
        $.ajax({
                type:"post",
                url:"Database.php",
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                      
                         $('#editMembers').load("Actions/okuyucuListesi.php");
                         
                }
        })
     })


/***************************************DELETE MEMBERS ACTİONS***************************************************/


         $('body').on("click",".sil", function(){
          $('#readingListContainer').load("Actions/okuyucuListesi.php");
                var idBilgi = $(this).attr("id"); //attr ile istenilen özelligi al
                        $.ajax({
                                type:"post",
                                url:"Database.php",
                                data:{'idBilgi' :idBilgi}, //Gelen idyi obje olarak pasla
                                success:function(response){
                                $("#SilmeAlani").fadeIn(100).text(response)
                                        $('#readingListContainer').load("Actions/okuyucuListesi.php");
                                }
                        })
       })

/*************************************** Member information for the book to be entrusted***************************************************/

     $('body').on("click", ".depositBookButton" ,function(e){
        e.preventDefault()
        var emanetİdBilgisi = $(this).attr("id"); 
        $('#readingListContainer').fadeOut();
        $('#depositBook').fadeIn()
        
        $.ajax({
                type:"post",
                url:"depositBookDatabase.php",
               data:{'emanetİdBilgisi':emanetİdBilgisi},
               success:function(response){
                        var obj = JSON.parse(response)
                             
                                $("#emanetciad").val(obj.isim)
                                $("#emanetcisoyad").val(obj.soyisim)
                                 $("#emanetcitc").val(obj.tc)
                                $("#emanetcitel").val(obj.numara)
                                 $("#idBilgisigelen").val(obj.id) 
                                 $('#emanetİdBilgi2').val(obj.id)
                                 //KitapDuzenle.php den id bilgisini obje
                                 // olarak al ve inputun içinE push et daha sonra o id bilgisini form içinde databaseye bas
                }
        })
})

  $('#EmanetGondermeForm').on("submit", function(e){
        e.preventDefault();
         $('#depositBookListe').load("EmanetListe.php");
        var form_data = new FormData(this)
        $.ajax({
                type:"post",
                url:"Database.php",
                data:form_data,
                dataType:"JSON",
                processData:false,
                contentType:false,
                success:function(response){
                     $('#depositBookListe').load("EmanetListe.php");
                }
        })
     })


/*************************************** DEPOSİT BOOK LİST ***************************************************/



























