<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <!-- <form action="<?php echo site_url('PanenController/saveDriverPanen'); ?>" method="get" accept-charset="utf-8"> -->
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 style="display:block; text-align:center;">Pilih Driver</h4>
    <form id="id_update" method="POST">
      <div class="form-group">
        <label for="nama_lengkap" class="control-label col-xs-4">Nama Driver</label>
        <div class="input-group form-group">
          <select name="driver" class="form-control" id="dvPanen">
            <option selected disabled>Pilih Driver</option>
            <?php foreach ($pilihDVbyID as $drlist){ ?>
              <option value="<?php echo $drlist->id_driver; ?>"><?php echo $drlist->nama_lengkap; ?></option>
            <?php }?>
          </select>
        </div>
      </div>
    </form>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" role="button" name="submit" id="updateDv">Save</button>
      <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</a></button>
    </div>
  <!-- </form> -->
</div>

<script type="text/javascript">
  $(function () {
  
    $("#dvPanen").select2();
  });
</script>