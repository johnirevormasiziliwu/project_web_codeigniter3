<?php
            $nomor = 1;
            foreach($files as $file)
            {
               ?>
<tr>
   <td><?= $nomor ++ ?></td>
   <td><?= $file?></td>
   <td>
      <a class="btn btn-sm btn-primary" download href="<?= base_url("/gambar/$file") ?>">
         <i class="fa fa-download"></i>
      </a>
   </td>
</tr>
<?php
            }
            ?>