<form method="post" id="okuyucuEklemeform" enctype="multipart/form-data">
  <div id="okuyucuAlani" class="alert alert-success mt-3" style="display:none;"></div>

  <div class="form-group">
    <label>Üye İsmi</label>
    <input class="form-control" type="text" name="isim" />
  </div>
  <div class="form-group">
    <label>Üye Soy isim</label>
    <input class="form-control" type="text" name="soyisim" />
  </div>
  <div class="form-group">
    <label>Üye Telefon No</label>
    <input class="form-control" type="text" name="numara" />
  </div>
  <div class="form-group">
    <label>Üye Tc Kimlik Numarasi</label>
    <input class="form-control" type="text" name="tc" />
  </div>

  <button id="okuyucuEkle" type="submit" class="btn btn-success">
    Yeni Okuyucu Ekle
  </button>
  <input type="hidden" name="okuyucuBilgiEkle" id="kitapiste" />
  <input id="idBilgi" type="hidden" name="bilgiEditle">
</form>
