<form method="post" id="kitapBilgiDuzenle" enctype="multipart/form-data">
  <div id="kitapDuzenlemeAlani" class="alert alert-success mt-3">x</div>

  <div class="custom-file mt-2">
    <input 
      name="kitapresim"
      type="file"
      class="custom-file-input"
      id="kitapresmi"
      required
    />
    <label class="custom-file-label" for="validatedCustomFile"
      >Kitap Resmi Yukleyiniz</label
    >
  </div>

  <div class="form-group">
    <label>Kitap İsmi</label>
    <input class="form-control" type="text" id="kitapismi" name="kitapismi" />
  </div>
  <div class="form-group">
    <label>Kitap Sayfası</label>
    <input class="form-control" type="text" id="kitapsayfa" name="kitapsayfa" />
  </div>
  <div class="form-group">
    <label>Kitap Yazar</label>
    <input class="form-control" type="text" id="kitapyazar" name="kitapyazar" />
  </div>
  <div class="form-group">
    <label>Kitap Yayın Evi</label>
    <input class="form-control" type="text" id="yayinevi" name="yayinevi" />
  </div>
  <div class="form-group">
    <label>Kitap Kategorisi</label>
    <input class="form-control" type="text" id="kitapkategori" name="kitapkategori" />
  </div>
  <button id="guncelle" type="submit" class="btn btn-success">
    Kitap Düzenle
  </button>
        <input type="hidden" name="bilgiduzenle">
        <input type="hidden" name="bilgiEditle" id="idBilgisi">
</form>
