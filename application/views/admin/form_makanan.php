<?php echo $this->session->userdata(""); ?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      FORM MAKANAN
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Form Makanan</li>
    </ol>
  </section>


	<h1>ini makanan</h1>

  <!-- Main content -->
  <section class="content">


    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Form Data Makanan</h3>
        <div>
          <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal" style="float: right;"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
      </div>



      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Makanan</th>
              <th>Harga</th>
              <th>Gambar</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php

          $count = 0;
          foreach ($tampil as $data) {
            $count = $count + 1;
            ?>

            <tbody>
              <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $data->nama_makanan?></td>
                <td><?php echo $data->harga?></td>
                <td><img src="<?php echo base_url(). 'asset/img/' . $data->Gambar?>" style="height: 100px;"></td>
                <td><?php echo $data->keterangan?></td> 
                <td><a href="<?php echo base_url('index.php/Home/formeditmkn/'). $data->id?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a> <a href="<?php echo base_url('index.php/Home/aksiHapus/'). $data->id?>"  Onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data ini!')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
              </tr>
            </tbody>

          <?php } ?>
        </table>

      </div>
      <!-- /.box-body -->
    </div>

  </section>
  <!-- /.content -->
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <?php
      echo form_open_multipart('index.php/Home/aksiInsert');
      ?>
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama Makanan</label>
          <input type="text" name="nama_makanan" class="form-control" placeholder="Nama Makanan">   
        </div>

        <div class="form-group">
          <label>Harga</label>
          <input type="text" name="harga" class="form-control" placeholder="Harga">    
        </div>

        <div class="form-group">
          <label for="exampleInputFile">Gambar</label>
          <input type="file"  name="Gambar">
        </div>     


        <div class="form-group">
          <label>Keterangan</label>
          <input type="text" name="ket" class="form-control" placeholder="Keterangan">    
        </div>       


      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>    
      </div>
      <?php echo form_close(); ?>

    </div>
  </div>
</div>



