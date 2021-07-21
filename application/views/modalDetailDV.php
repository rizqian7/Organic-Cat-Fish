<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<div class="modal-header" align="center"><h4>Detail Driver</h4></div>
<div class="modal-body">
  <div class="form-horizontal">
    <div class="form-group row">
      <label for="no_ktp" class="control-label col-xs-4">Nomor KTP</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailDVbyID->no_ktp; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="nama_lengkap" class="control-label col-xs-4">Nama Lengkap</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailDVbyID->nama_lengkap; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="no_hp" class="control-label col-xs-4">Nomor HP</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailDVbyID->no_hp; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="alamat" class="control-label col-xs-4">Alamat</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailDVbyID->alamat; ?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="username" class="control-label col-xs-4">Username</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" value="<?php echo $detailDVbyID->username; ?>" disabled>
      </div>
    </div>
  </div>
</div>