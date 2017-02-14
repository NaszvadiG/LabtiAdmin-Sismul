        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <!-- Main Content  -->




            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>LABTI Galery <small>Gambar</small></h2>
                    <div class="nav navbar-right">
                      <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".tambah-gambar">
                        Tambah Gambar
                      </a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- start project list -->
                    <table class="table table-striped projects" id="andika-image-table">
                      <thead>
                        <tr>
                          <th style="width: 1%">ID</th>
                          <th>Gambar</th>
                          <th style="width: 20%">Judul</th>
                          <th>Deskripsi</th>
                          <th>Tanggal Upload</th>
                          <th style="width: 20%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $user_id=3; foreach($item as $gambar){?>
                        <tr>
                          <td><?php echo $gambar->id?></td>
                          <td><img height="10%" src="<?php echo base_url("assets/$user_id/img/$gambar->nama_file")?>";"></td>
                          <td><?php echo $gambar->judul?></td>
                          <td><?php echo $gambar->deskripsi?></td>
                          <td><?php echo $gambar->tgl_post?></td>
                          <td>
                            <a id="lhatGambar" data-toggle="modal" data-target=".lihat-gambar" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Lihat </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<!-- Modal tambah gambar -->
<div class="modal fade tambah-gambar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Gambar</h4>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url('admin/uploadGambar')?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>File : </label>
          <input type="file" name="gambarUpload">
        </div>
        <div class="form-group">
          <label>Nama Foto : </label><br/>
          <input class="form-control" type="text" name="namaFile">
        </div>
        <div class="form-group">
          <label>Deskripsi : </label>
          <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <button class="btn btn-block btn-primary" type="submit">Upload</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Lihat gambar -->
<div class="modal fade lihat-gambar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Judul Gambar</h4>
      </div>
      <div class="modal-body">
      
      </div>
    </div>
  </div>
</div>