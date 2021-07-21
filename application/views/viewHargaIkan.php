<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ubah Harga Ikan</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <br>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Ubah Harga</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="<?php echo base_url('AdminController/editHargaIkan'); ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga Beli<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input value="<?php echo $hargaBeli ?>" type="text" id="hargaBeli" name="1" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga Jual<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input value="<?php echo $hargaJual ?>" type="text" id="hargaJual" name="2" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="ln_solid"></div>

              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button class="btn btn-success" type="submit" role="button" name="submit">Save</button>
                <button class="btn btn-primary" type="reset">Reset</button>
                <a href="<?php echo site_url('AdminController'); ?>" role="button" class="btn btn-primary">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->
  </div>
</div>
<!-- /top tiles -->        
</div>