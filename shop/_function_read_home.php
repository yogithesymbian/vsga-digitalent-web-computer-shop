 <?php
    $query = "SELECT * FROM tb_barang LIMIT 3";
    $hasil = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($hasil)) {
        ?>

     <div class="">
         <div class="col-sm-6 col-md-4" style="padding-bottom: 50px">
             <div class="thumbnail">
                 <img src="<?php echo "$row[path_image]"; ?>/1rog.jpeg" alt="..." data-toggle="modal" data-target="#image-home-1" class="zoom" style="border-radius: 10%; border: 5px solid transparent">
                 <div class="caption">
                     <h3 style="color: ivory">
                         <?php echo "$row[name]"; ?>
                     </h3>
                     <p style="color: ivory; height: 40px">
                         <?php echo "$row[spesifikasi]"; ?>
                     </p>
                     <p class="read-more">
                         <a href="#">Read More</a>
                     </p>
                     <p>
                         <a href="#" class="btn btn-primary" role="button" id="buy-alert" style="color: ivory;">
                             <span class="glyphicon glyphicon-shopping-cart"></span> <span style="font-weight: 900"><strong>ADD TO CART</strong></span> </a>
                         <a href="#" class="btn btn-primary" role="button" id="buy-alert" style="color: #5ad67d;">
                             <span class="glyphicon glyphicon-credit-card"></span> Rp
                             <?php
                                echo number_format($row[price], 2, ',', '.');
                                ?>
                         </a>
                     </p>
                 </div>
             </div>
         </div>

     </div>

 <?php
    }
    ?>