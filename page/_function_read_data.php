 <?php
    $query = "SELECT * FROM tb_barang LIMIT 3";
    $hasil = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($hasil)) {
        ?>



     <div class="blog-card">
         <div class="meta">
             <div class="photo" style="background-image: url(<?php echo "$row[path_image]"; ?>/1rog.jpeg)"></div>
             <ul class="details">
                 <li class="author"><a href="#">Yogi Arif Widodo</a></li>
                 <li class="date">July. 23, 2019</li>
                 <li class="tags">
                     <ul>
                         <li><a href="#">ROG</a></li>
                         <li><a href="#">HIGHT KOMPUTER</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
         <div class="description">
             <h1><?php echo "$row[name]"; ?></h1>
             <h2><?php echo "$row[spesifikasi]"; ?></h2>
             <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
             <p class="read-more">
                 <a href="#">Read More</a>
             </p>
         </div>
     </div>
     <div class="blog-card alt">
         <div class="meta">
             <div class="photo" style="background-image: url(<?php echo "$row[path_image]"; ?>/1rog.jpeg)"></div>
             <ul class="details">
                 <li class="author"><a href="#">Yogi Arif Widodo</a></li>
                 <li class="date">July. 23, 2019</li>
                 <li class="tags">
                     <ul>
                         <li><a href="#">ROG</a></li>
                         <li><a href="#">HIGHT KOMPUTER</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
         <div class="description">
             <h1>Digitalent Event</h1>
             <h2>Digitalent Event is lorem ipsum dolor sit amet</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
             <p class="read-more">
                 <a href="#">Read More</a>
             </p>
         </div>
     </div>
 <?php
    }
    ?>
 <br>

 <div class="col-md-7 pull-right">
     <button type="button" class="btn btn-icon" data-toggle="tooltip" data-placement="bottom" title="Previus Post"> <span class="glyphicon glyphicon-chevron-left"></span> </button>
     <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="View All Post"> <span class="glyphicon glyphicon-eye-open" style="color: #d65a5a;"></span></button>
     <button type="button" class="btn btn-icon" data-toggle="tooltip" data-placement="bottom" title="Next Post"> <span class="glyphicon glyphicon-chevron-right"></span> </button>
 </div>