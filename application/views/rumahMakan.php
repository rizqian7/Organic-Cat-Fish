<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Rumah Makan</h3>
      </div>
    </div>

    <div class="x_content">

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar Pengguna Rumah Makan</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th style="text-align:center;">No</th>
                  <th >No KTP</th>
                  <th >Nama Pemilik</th>
                  <th >Nama Rumah Makan</th>
                  <th >Detail Pengguna</th>
                  <th >Option</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = $offset;
                foreach ($rumahMakan as $list) { ?>
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
                      <?php echo $list->nama_rumahmakan;?>
                    </td>
                    <td>
                      <button class="btn btn-primary detailRM" data-id="<?php echo $list->id_rumahmakan;?>" style="text-align: center;"><i class="fa fa-eye" aria-hidden="true"></i> Detail</button>
                    </td>
                    <td>
                      <a class="btn btn-danger" onclick="saveId(<?php echo $list->id_rumahmakan;?>)" data-toggle="modal" data-target="#deleteRumahMakan">Delete</a>
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
</div>
<div id="tempat-modal"></div>
<script>
  var idDelete = -1;
  function saveId(id){
    console.log(id);
    idDelete = id;
  }
</script>