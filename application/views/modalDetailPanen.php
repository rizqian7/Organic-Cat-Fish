<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<div class="modal-header" align="center"><h4>Detail Panen</h4></div>
<div class="modal-body">
  <div class="form-horizontal">
    <div class="form-group">
      <label for="idPanen" class="control-label col-xs-2">ID Panen</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo $jemputbyid->id_panen; ?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="waktuPanen" class="control-label col-xs-2">Waktu Panen</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo date('d F Y', strtotime($jemputbyid->panen)); ?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="beratPanen" class="control-label col-xs-2">Berat Panen</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo $jemputbyid->berat.' Kg'; ?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="jumlahKolam" class="control-label col-xs-2">Jumlah Kolam</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo $jemputbyid->jml_kolam; ?>" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="jenisPakan" class="control-label col-xs-2">Jenis Pakan</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" value="<?php echo $jemputbyid->jenis_pakan; ?>" disabled>
      </div>
    </div>
  </div>
</div>