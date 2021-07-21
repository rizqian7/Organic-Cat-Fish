<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<div class="modal-header" align="center"><h4>Detail Peternak Lele</h4></div>
<div class="modal-body">
  <div class="form-horizontal">
    <div class="form-group row">
      <label for="no_ktp" class="control-label col-xs-4">Nomor KTP</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailPLbyID->no_ktp; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="nama_lengkap" class="control-label col-xs-4">Nama Lengkap</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailPLbyID->nama_lengkap; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="no_hp" class="control-label col-xs-4">Nomor HP</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailPLbyID->no_hp; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="nama_usaha" class="control-label col-xs-4">Nama Usaha</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailPLbyID->nama_usaha; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah_kolam" class="control-label col-xs-4">Jumlah Kolam</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailPLbyID->jumlah_kolam; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah_produksi" class="control-label col-xs-4">Jumlah Produksi</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailPLbyID->jumlah_produksi.' Kg'; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="alamat" class="control-label col-xs-4">Alamat</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailPLbyID->alamat; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="username" class="control-label col-xs-4">Username</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailPLbyID->username; ?>" disabled>
      </div>
    </div>
  </div>
</div>