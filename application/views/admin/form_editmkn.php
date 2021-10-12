<?php echo $this->session->userdata(""); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM DATA MAKANAN
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Form Makanan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Edit Data Makanan</h3>

      </div>

      <!-- general form elements -->
      <div class="">

        <!-- /.box-header -->
        <!-- form start -->
        <?php
        echo form_open_multipart('index.php/Home/aksiUpdate');
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Makanan</label>
            <input type="hidden" name="id" value="<?php echo $makanan->id?>">
            <input type="text" name="nama_makanan" class="form-control" value="<?php echo $makanan->nama_makanan?>" placeholder="Nama Makanan">   
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $makanan->harga?>" placeholder="Harga">    
          </div>

          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" id="Gambar" name="Gambar"  value=""  name="Gambar">
          </div>  
          <div class="">
            <div class="">
              <img src="<?= base_url('asset/img/' . $makanan->Gambar) ?>"   id="foto"  alt="Gambar" class="thumbnail" width="170" height="180">

            </div>   


            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="ket" class="form-control" value="<?php echo $makanan->keterangan?>" placeholder="Keterangan">    
            </div>       
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('index.php/Home/form_makanan') ?>" class="btn btn-warning">Kembali</a>
          </div>
          <?php echo form_close();?>
        </div>


        <!-- /.box-header -->

        <!-- /.box-body -->
      </div>

    </section>  
    <!-- /.content -->
  </div>

 <!--  <script>

    var img = document.getElementById("foto");
    function ganti() {
      img.src= '<?= base_url('asset/img/' . $makanan->Gambar) ?>';
    }

  </script> -->







