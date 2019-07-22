 <?php
    $query = "SELECT * FROM tb_barang";
    $hasil = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($hasil)) {
        ?>
     <tr>
         <td><?php echo "$row[code]" ?></td>
         <td><?php echo "$row[name]" ?></td>
         <td><?php echo "$row[quantity]" ?></td>
         <td><button type="button" class="btn btn-icon" data-toggle="modal" data-target="#modal-spec"> <span class="glyphicon glyphicon-search"></span> </button></td>
         <td>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
         </td>
         <td>

             <a href="edit-barang.php?code-brg=<?php echo "$row[code]"; ?>" class="btn btn-icon"> <span class="glyphicon glyphicon-edit"></span> </a>
             <a href="_function_delete_barang.php?code=<?php echo "$row[code]"; ?>" class="btn btn-icon"> <span class="glyphicon glyphicon-trash"></span> </a>
         </td>

     </tr>
 <?php
    }
    ?>