<?php
?>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content modal-style-digitalent">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: white">INPUT BARANG - LAPTOP{still construct} </h4>
            </div>

            <div class="modal-body">

                <form action="#" method="post" enctype="multipart/form-data">


                    <input type="file" class="input-sm" name="files[]" multiple />

                    <hr>

                    <div class="input-container">
                        <span class="input-icon"><i class="glyphicon glyphicon-qrcode"></i></span>
                        <input id="codeBrg" type="text" class="form-control form-modal-digitalent text-input" name="codeBrg" placeholder="KODE BARANG" required autofocus>
                    </div>

                    <div class="input-container">
                        <span class="input-icon"><i class="glyphicon glyphicon-tasks"></i></span>
                        <input id="nameBrg" type="text" class="form-control form-modal-digitalent text-input" name="nameBrg" placeholder="NAMA BARANG" required>
                    </div>

                    <div class="input-container">
                        <span class="input-icon"><i class="glyphicon glyphicon-upload"></i></span>
                        <input id="file" type="file" class="form-control form-modal-digitalent" name="datafiledir" placeholder="file" webkitdirectory multiple>
                    </div>

                    <div class="input-container">
                        <span class="input-icon"><i class="glyphicon glyphicon-upload"></i></span>
                        <input id="file" type="file" class="form-control form-modal-digitalent" name="datafile1" placeholder="file" multiple>
                    </div>

                    <hr>

                    <div class="input-container">
                        <span class="input-icon"><i class="glyphicon glyphicon-tasks"></i></span>
                        <input id="" type="text" class="form-control form-modal-digitalent text-input" name="specBrg" placeholder="SPESIFIKASI" required>
                    </div>

                    <div class="input-container">
                        <span class="input-icon"><i class="glyphicon glyphicon-credit-card"></i></span>
                        <input id="" type="number" class="form-control form-modal-digitalent text-input" name="price" placeholder="Rp 5.000.000" required>
                    </div>

                    <div class="input-container">
                        <span class="input-icon"><i class="glyphicon glyphicon-upload"></i></span>
                        <input id="quantity" type="number" class="form-control form-modal-digitalent" name="quantity" placeholder="Quantity 1 PCS" multiple>
                    </div>


                    <input type="submit" value="+ ADD" class="btn btn-digitalent">


                </form>

            </div>

            <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
        </div>

    </div>
</div>
<?php
?>