<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Panen</h3>
      </div>
    </div>

    <div class="x_content">

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar Panen Ikan Lele</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th style="text-align:center;">No</th>
                  <th >Nama Pemilik</th>
                  <th >No HP</th>
                  <th >Alamat</th>
                  <th >Detail Panen</th>
                  <th >Pilih Driver</th>
                  <!-- <th >Status</th> -->
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 0;
                $id_driver = 0;
                foreach ($panen as $list) { ?>
                  <tr>
                    <td align="center">
                      <?php echo ++$no?>
                    </td>
                    <td>
                      <?php echo $list->nama;?>
                    </td>
                    <td>
                      <?php echo $list->hp;?>
                    </td>
                    <td>
                      <?php echo $list->alamat;?>
                    </td>
                    <td>
                      <button class="btn btn-primary detailPanen" data-id="<?php echo $list->id_panen;?>" style="text-align: center;"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button>
                    </td>
                    <td>
                       <button class="btn btn-primary pilihDV" data-id="<?php echo $list->id_panen;?>" style="text-align: center;"><i class="" aria-hidden="true"></i> Pilih</button>
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