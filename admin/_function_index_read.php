 <?php
    $query = "SELECT * FROM tb_barang";
    $hasil = mysqli_query($connect, $query);


    while ($row = mysqli_fetch_array($hasil)) {
        ?>
     <tr>
         <td><?php echo "$row[code]" ?></td>
         <td><?php echo "$row[name]" ?></td>
         <td>Rp <?php echo number_format($row[price], 2, ',', '.'); ?></td>

         <td><?php echo "$row[quantity]" ?></td>

         <!-- trigger spec -->
         <td><button type="button" class="btn btn-icon" data-toggle="modal" data-target="#sp<?php echo $row['code']; ?>"> <span class="glyphicon glyphicon-search"></span> </button></td>
         <!-- end trigger spec -->

         <!-- modal image view -->
         <div id="im<?php echo $row['path_image']; ?>" class="modal fade" role="dialog">
             <div class="modal-dialog">

                 <!-- Modal content-->
                 <div class="modal-content modal-style-digitalent">

                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h4 class="modal-title" style="color: white">IMAGE PREVIEW- LAPTOP </h4>
                     </div>

                     <div class="modal-body">

                         <img src="..<?php echo $row['path_image']; ?>" alt="" width="300" height="300">

                     </div>

                     <!-- <div class="modal-footer">
                                                                                                                                                                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                                                                                                                                                    </div> -->
                 </div>

             </div>
         </div>
         <!-- end modal image view -->

         <td>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#im<?php echo $row['path_image']; ?>"> <span class="glyphicon glyphicon-picture"></span> </button>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"> <span class="glyphicon glyphicon-picture"></span> </button>
             <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"> <span class="glyphicon glyphicon-picture"></span> </button>
             <a href="<?php echo "$row[path_image]"; ?>/1rog.jpeg" class="btn btn-icon"> <span class="glyphicon glyphicon-picture"></span> </a>
         </td>
         <td>

             <a href="edit-barang.php?uuid=<?php echo "$row[id]"; ?>" class="btn btn-icon"> <span class="glyphicon glyphicon-edit"></span> </a>
             <a href="_function_delete_barang.php?uuid=<?php echo "$row[id]"; ?>" class="btn btn-icon"> <span class="glyphicon glyphicon-trash"></span> </a>
         </td>

     </tr>
 <?php
    }

    ?>

 <!-- Modal of spec -->
 <?php include_once('modal-spec-barang.php'); ?>

 <?php
    $query1 = "SELECT * FROM tb_barang";
    $hasil1 = mysqli_query($connect, $query1);
    while ($row1 = mysqli_fetch_array($hasil1)) {
        ?>

     <div id="sp<?php echo $row1['code']; ?>" class="modal fade" role="dialog">
         <div class="modal-dialog">
             <!-- Modal content-->
             <div class="modal-content modal-style-digitalent">

                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title" style="color: white">SPESIFIKASI BARANG </h4>
                 </div>
                 <div class="modal-body">
                     <?php
                        $query2 = "SELECT * FROM tb_barang WHERE code='$row1[code]' ";
                        $hasil2 = mysqli_query($connect, $query2);
                        while ($row2 = mysqli_fetch_array($hasil2)) {
                            echo $row2['spesifikasi'];
                        }
                        ?>


                 </div>
             </div>
         </div>
     </div>
 <?php
    }
    ?>
 <!-- end of modal of spec -->