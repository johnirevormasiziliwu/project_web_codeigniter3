<?= $this->session->flashdata('pesan'); ?>
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Data Dokumentasi</h3>
   </div>
   <div class="card-body">
      <div class="row">
         <div class="col-md-4">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Upload Dokument</h3>
               </div>
               <div class="card-body">
                  <form action="<?= base_url('Upload/create') ?>" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukan nama anda">
                     </div>
                     <div class="form-group">
                        <label for="">File1</label>
                        <input type="file" name="file1" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="">File2</label>
                        <input type="file" name="file2" class="form-control">
                     </div>
                     <div class="card-footer">
                        <button class="btn btn-success" name="submit" type="submit">
                           <i class="fa fa-save"></i>
                           Upload
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Data Dokumentasi</h3>
               </div>
               <div class="card-body">
                  <table class="table table-sm table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Nomor</th>
                           <th>Name</th>
                           <th>File1</th>
                           <th>File2</th>

                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                        $nomor = 1;
                        foreach($data as $row )
                        {
                           ?>
                        <tr>
                           <td><?= $nomor ++ ?></td>
                           <td><?= $row->file1 ?></td>
                           <td><?= $row->file2 ?></td>
                        </tr>
                        <?php
                        }
                     ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>