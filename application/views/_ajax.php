<script type="text/javascript">
  var idPanen = -1;
  // $(function () {
  //     $(".select2driver").select2({
  //       placeholder: 'Pilih tujuan'
  //     });
  // });

  // function selectDriver(){
  //   var id_driver = $( "#selectDriver option:selected" ).val();
  //   location.href = "<?php echo site_url('PanenController/kirimDriverJemput/'); ?>" + id_driver;
  // }

  $(document).on("click", ".detailPanen", function(e) {
    e.preventDefault();
    var id    = $(this).attr("data-id");
    
    $.ajax({
      method: "POST",
      url: "<?php echo site_url('PanenController/detailJemput'); ?>",
      data: {idJemput: id}
    })
    .done(function(data) {
      $('#tempat-modal').html(data);
      $('#detailPanen').modal('show');
    })
  });

  $(document).on("click", ".detailPL", function(e) {
    e.preventDefault();
    var idPL    = $(this).attr("data-id");
    
    $.ajax({
      method: "POST",
      url: "<?php echo site_url('PeternakLeleController/detailPeternakLele'); ?>",
      data: {id_peternaklele: idPL}
    })
    .done(function(data) {
      $('#tempat-modal').html(data);
      $('#detailPL').modal('show');
    })
  });

  $(document).on("click", ".detailRM", function(e) {
    e.preventDefault();
    var idRM    = $(this).attr("data-id");
    
    $.ajax({
      method: "POST",
      url: "<?php echo site_url('RumahMakanController/detailRumahMakan'); ?>",
      data: {id_rumahmakan: idRM}
    })
    .done(function(data) {
      $('#tempat-modal').html(data);
      $('#detailRM').modal('show');
    })
  });

  $(document).on("click", ".detailPemesanan", function(e) {
    e.preventDefault();
    var idPemesanan    = $(this).attr("data-id");
    
    $.ajax({
      method: "POST",
      url: "<?php echo site_url('PemesananController/detailPemesanan'); ?>",
      data: {idPemesanan: idPemesanan}
    })
    .done(function(data) {
      $('#tempat-modal').html(data);
      $('#detailPemesanan').modal('show');
    })
  });

  $(document).on("click", ".detailDV", function(e) {
    e.preventDefault();
    var idDV    = $(this).attr("data-id");
    
    $.ajax({
      method: "POST",
      url: "<?php echo site_url('DriverController/detailDriver'); ?>",
      data: {id_driver: idDV}
    })
    .done(function(data) {
      $('#tempat-modal').html(data);
      $('#detailDV').modal('show');
    })
  });

  $(document).on("click", ".pilihDV", function(e) {
    e.preventDefault();
    var idpDV    = $(this).attr("data-id");

    $.ajax({
      method: "POST",
      url: "<?php echo site_url('PanenController/getDriverPanen'); ?>",
      data: {id_driver: idpDV}  
    })
    .done(function(data) {
      idPanen = idpDV;
      $('#tempat-modal').html(data);
      $('#pilihDV').modal('show');
    })

  });

  $(document).on("click", ".pilihDVpemesanan", function(e) {
    e.preventDefault();
    var idpDVpsn    = $(this).attr("data-id");

    $.ajax({
      method: "POST",
      url: "<?php echo site_url('PemesananController/getDriverPemesanan'); ?>",
      data: {id_driver: idpDVpsn}  
    })
    .done(function(data) {
      idPemesanan = idpDVpsn;
      $('#tempat-modal').html(data);
      $('#pilihDVpemesanan').modal('show');
    })

  });

  $(document).on('click','#updateDv',function(e){
    e.preventDefault();
    var id_panen  = idPanen;
    var id_driver = $('#dvPanen').val();
    // console.log(id_panen, id_driver);
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url()?>PanenController/saveDriverPanen",
      data : {id_panen:id_panen, id_driver:id_driver},
      success: function(data){
        console.log('success');
        $('#tempat-modal').html(data);
        $('#pilihDV').modal('hide');
        $(".modal-backdrop").remove();
      }
    });
  });

  $(document).on('click','#updatePs',function(e){
    e.preventDefault();
    var id_pemesanan  = idPemesanan;
    var id_driver = $('#dvPemesanan').val();
    console.log(id_pemesanan, id_driver);
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url()?>PemesananController/saveDriverPemesanan",
      data : {id_pemesanan:id_pemesanan, id_driver:id_driver},
      success: function(data){
        console.log('success');
        $('#tempat-modal').html(data);
        $('#pilihDVpemesanan').modal('hide');
        $(".modal-backdrop").remove();
      }
    });
  });

  $(document).on("click", "#btn_hapuspl", function(e){
    e.preventDefault();
    
    console.log(idDelete);
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url()?>PeternakLeleController/deletePeternakLele",
      data : {idDelete:idDelete},
      success: function(data){
        console.log('success');
        location.reload();
      }
    })
  });

  $(document).on("click", "#btn_hapusrm", function(e){
    e.preventDefault();
    
    console.log(idDelete);
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url()?>RumahMakanController/deleteRumahMakan",
      data : {idDelete:idDelete},
      success: function(data){
        console.log('success');
        location.reload();
      }
    })
  });

  $(document).on("click", "#btn_hapusdv", function(e){
    e.preventDefault();
    
    console.log(idDelete);
    $.ajax({
      type : "POST",
      url  : "<?php echo base_url()?>DriverController/deleteDriver",
      data : {idDelete:idDelete},
      success: function(data){
        console.log('success');
        location.reload();
      }
    })
  });
 
</script>
</body>
</html>