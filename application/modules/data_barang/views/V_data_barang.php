<!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-12">
          <h1 class="my-4">
            <small></small>
          </h1>
          <!-- Blog Post -->
		  <h1>Daftar Data Barang :</h1>
		  <div class="table-toolbar">
			<div class="btn-group">
					<button id="" class="btn red" data-toggle="modal" href="#basik">
					Tambah Data <i class="fa fa-plus"></i>
					</button>
			</div>
				<div class="modal fade" id="basik" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content" style="width:600px;">
							<div class="modal-header">
									<h4>Form Input Data Mahasiswa</h4>
							</div>
				    <div class="modal-body">
					<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="<?php echo site_url();?>/Data_barang/simpanDatabarang" class="form-horizontal" method="post">							
						<div class="form-body">
							<div class="form-group">
								<label class="col-md-12 control-label">No.Pendaftaran</label>
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="No.Pendaftaran" name="no_pendaftaran">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-12">Program Studi</label>
								<div class="col-md-12">
									<select class="form-control" name="program_studi" class="select2me">
										<option value="Manajamen Informatika">Manajamen Informatika</option>
										<option value="Teknik Informatika">Teknik Informatika</option>
										<option value="Sistem Informasi">Sistem Informasi</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12 control-label">Nama Siswa</label>
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12 control-label">Jenis Kelamin</label>
								<div class="col-md-12">
									<input type="radio" name="jenis_kelamin" value="Laki Laki"> Laki-Laki
									<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-12">Agama</label>
								<div class="col-md-12">
									<select class="form-control" name="agama" class="select2me">
										<option value="Islam">Islam</option>
										<option value="Kristen">Kristen</option>
										<option value="Hindu">Hindu</option>
										<option value="Budha">Budha</option>
										<option value="Konghucu">Konghucu</option>
									</select>
								</div>
							</div>			
							<div class="form-group">
								<label class="col-md-12 control-label">Alamat Lengkap</label>
								<div class="col-md-12">
									<textarea class="form-control" rows="2" placeholder="Alamat Lengkap" name="alamat"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12 control-label">No telp</label>
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="No telp" name="no_telp">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12 control-label">Email</label>
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="Email" name="email">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
							<button type="reset" value="reset" class="btn red">Reset</button>
							<button type="submit" class="btn red">Submit</button>
						</div>
					</form>
					</div>
					</div>
					</div>				
					</div>		
				</div>			
			    </div>
		  <br>
						<table class="table table-striped table-hover table-bordered">
                        <thead>
                           <tr align="center">
                              <th scope="col">No Pendaftaran</th>
                              <th scope="col">Program Studi</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Jenis Kelamin</th>
                              <th scope="col">Agama</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">No Telp</th>
                              <th scope="col">Email</th>
                              <th scope="col"colspan=2>Aksi</th>
                           </tr>
                        </thead>
					
                       <tbody> 
					   <?php foreach($list as $row) { ?>
								<tr>
								  <td><?php echo $row->no_pendaftaran?></td>
								  <td><?php echo $row->program_studi?></td>
								  <td><?php echo $row->nama_siswa?></td>
								  <td><?php echo $row->jenis_kelamin?></td>
								  <td><?php echo $row->agama?></td>
								  <td><?php echo $row->alamat?></td>
								  <td><?php echo $row->no_telp?></td>
								  <td><?php echo $row->email?></td>
								  <td><a href="<?php echo site_url('Data_barang/editDatabarang/'.$row->id); ?>">Edit</a></td>
								  <td><a href="<?php echo site_url('Data_barang/hapusdataBarang/'.$row->id); ?>"
										onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td>
								</tr>		
						</tbody>
						<?php } ?>
                 </table>
				