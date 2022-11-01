<div class="card">
   <div class="card-header">
      <h3 class="card-title">Data Tema</h3>
   </div>
   <div class="card-body">
      <a class="btn btn-primary mb-3" href="<?= base_url('Tema/Tambah') ?>">
         <i class="fa fa-plus"></i>
         Tambah Data
      </a>
      <table class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Nomor</th>
               <th>Judul Tema</th>
               <th>Isi Tema</th>
               <th>Gambar</th>
            </tr>
         </thead>
         <tbody>
            <?php
                $nomor = 1;
                foreach($temas as $tema)
                {
                  ?>
            <tr>
               <td><?= $nomor++ ?></td>
               <td><?= $tema->judul_tema?></td>
               <td><?= $tema->isi_tema ?></td>
               <td><img src="<?= base_url() . '/gambar/' . $tema->gambar ?>" alt=""></td>
               <td>
                  <a class="btn btn-warning" href="">
                     <i class="fa fa-edit"></i>
                  </a>
               </td>
            </tr>
            <?php
                }
                ?>
         </tbody>
      </table>
   </div>
</div>