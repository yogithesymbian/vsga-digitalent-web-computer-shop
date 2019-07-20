 <?php
    $query = "SELECT * FROM tb_barang";
    $hasil = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($hasil)) {
        ?>
     <tr>
         <td><?php echo "$row[code]" ?></td>
         <td><?php echo "$row[name]" ?></td>
         <td><button type="button" class="btn btn-icon" data-toggle="modal" data-target="#modal-spec"> <span class="glyphicon glyphicon-search"></span> </button></td>
         <td><?php echo "$row[quantity]" ?></td>
         <td>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
         </td>
         <td>
             <button type="button" class="btn btn-icon"> <span class="glyphicon glyphicon-edit"></span> </button>
             <button type="button" class="btn btn-icon"> <span class="glyphicon glyphicon-trash"></span> </button>
         </td>

     </tr>
 <?php
    }
    ?>