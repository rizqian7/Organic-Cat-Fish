<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Pemesanan</h3>
      </div>
    </div>

    <div class="x_content">

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar Pesanan Ikan Lele</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Pemesan</th>
                  <th>Nama Rumah Makan</th>
                  <th>No HP</th>
                  <th>Alamat</th>
                  <th>Detail Pemesanan</th>
                  <th>Pilih Driver</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 0;
                $id_driver = 0;
                foreach ($pemesanan as $list) { ?>
                  <tr>
                    <td align="center">
                      <?php echo ++$no?>
                    </td>
                    <td>
                      <?php echo $list->nama;?>
                    </td>
                    <td>
                      <?php echo $list->nama_rm;?>
                    </td>
                    <td>
                      <?php echo $list->hp;?>
                    </td>
                    <td>
                      <?php echo $list->alamat;?>
                    </td>
                    <td>
                      <button class="btn btn-primary detailPemesanan" data-id="<?php echo $list->id_pemesanan;?>" style="text-align: center;"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button>
                    </td>
                    <td>
                       <button class="btn btn-primary pilihDVpemesanan" data-id="<?php echo $list->id_pemesanan;?>" style="text-align: center;"><i class="" aria-hidden="true"></i> Pilih</button>
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