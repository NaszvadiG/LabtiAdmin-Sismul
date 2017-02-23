        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <!-- Main Content  -->




            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>LABTI Galery <small>Gambar</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- start project list -->
                    <table class="table table-striped projects" id="andika-image-table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Video</th>
                          <th>Judul</th>
                          <th>Deskripsi</th>
                          <th>Upload By</th>
                          <th>Tanggal Upload</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($item as $video){?>
                        <tr>
                          <td><?php echo $video->id_post?></td>
                          <td width="20%">
                            <video height="100px" width="90%" class="responsive-video" controls>
                                <source src="<?php echo base_url("assets/post/$video->nama_file");?>" type="video/mp4">
                             </video>
                          </td>
                          <td width="10%"><?php echo $video->judul?></td>

                          <td><?php echo $video->deskripsi?></td>
                          <td width="15%"><?php echo $video->name?></td>
                          <td>
                            <?php echo $video->tgl_post?>
                          </td>
                          <td width="15%">
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="<?php echo base_url("admin/welcome/hapusVideo/$video->id_post")?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
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