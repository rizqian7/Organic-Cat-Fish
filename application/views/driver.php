<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Driver</h3>
      </div>
      <div class="title_right">
        <div class="col-md-3 col-sm-3 col-xs-3 form-group pull-right">
          <a class="btn btn-primary" href="<?php echo site_url('DriverController/viewTambahDriver'); ?>" role="button">Tambah Driver</a>
        </div>
      </div>
    </div>

    <div class="x_content">

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar Pengguna Driver</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th style="text-align:center;">No</th>
                  <th >No KTP</th>
                  <th >Nama Driver</th>
                  <th >Detail Driver</th>
                  <!-- <th >Daftar Distribusi</th> -->
                  <th >Option</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = $offset;
                foreach ($Driver as $list) { ?>
                  <tr>
                    <td align="center">
                      <?php echo ++$no?>
                    </td>
                    <td>
                      <?php echo $list->no_ktp;?>
                    </td>
                    <td>
                      <?php echo $list->nama_lengkap;?>
                    </td>
                    <td>
                      <button class="btn btn-primary detailDV" data-id="<?php echo $list->id_driver;?>" style="text-align: center;"><i class="fa fa-eye" aria-hidden="true"></i> Detail</button>
                    </td>
                    <!-- <td>
                      <?php echo $list->pt_nama_lengkap; ?>
                    </td> -->
                    <td>
                      <a href="<?php echo site_url('DriverController/viewEditDriver/'.$list->id_driver); ?>" class="btn btn-info">Edit</a>
                      <a class="btn btn-danger" onclick="saveId(<?php echo $list->id_driver;?>)" data-toggle="modal" data-target="#deleteDriver">Delete</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /top tiles -->        
</div>
<div id="tempat-modal"></div>
<script>
  var idDelete = -1;
  function saveId(id){
    console.log(id);
    idDelete = id;
  }
</script>