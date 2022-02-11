<form method="post" id="kitapBilgiForm" enctype="multipart/form-data">
  <div id="basariliAlan" class="alert alert-success mt-3"></div>

  <div class="custom-file mt-2">
    <input
      name="kitapresim"
      type="file"
      class="custom-file-input"
      id="validatedCustomFile"
      required
    />
    <label class="custom-file-label" for="validatedCustomFile"
      >Kitap Resmi Yukleyiniz</label
    >
  </div>

  <div class="form-group">
    <label>Kitap İsmi</label>
    <input class="form-control" type="text" name="kitapismi" />
  </div>
  <div class="form-group">
    <label>Kitap Sayfası</label>
    <input class="form-control" type="text" name="kitapsayfa" />
  </div>
  <div class="form-group">
    <label>Kitap Yazar</label>
    <input class="form-control" type="text" name="kitapyazar" />
  </div>
  <div class="form-group">
    <label>Kitap Yayın Evi</label>
    <input class="form-control" type="text" name="yayinevi" />
  </div>
  <div class="form-group">
    <label>Kitap Kategorisi</label>
    <input class="form-control" type="text" name="kitapkategori" />
  </div>
  <button id="kitapekle" type="submit" class="btn btn-success">
    Kitap Ekle
  </button>
  <input type="hidden" name="kitapBilgisiEkle" id="kitapiste" />
  <input id="idBilgi" type="hidden" name="bilgiEditle">
</form>
