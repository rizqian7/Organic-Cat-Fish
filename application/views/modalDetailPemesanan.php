<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<div class="modal-header" align="center"><h4>Detail Pemesanan</h4></div>
<div class="modal-body">
  <div class="form-horizontal">
    <div class="form-group">
      <label for="idPemesanan" class="control-label col-xs-2">ID Pemesanan</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo $pemesananbyid->id_pemesanan; ?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="waktuPemesanan" class="control-label col-xs-2">Waktu Pemesanan</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo date('d F Y', strtotime($pemesananbyid->waktu_pesan)); ?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="beratPemesanan" class="control-label col-xs-2">Berat Pemesanan</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo $pemesananbyid->berat_pesan.' Kg'; ?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="jenisUkuran" class="control-label col-xs-2">Jenis Ukuran</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo $pemesananbyid->jenis_ukuran; ?>" disabled>
      </div>
    </div>
  </div>
</div>