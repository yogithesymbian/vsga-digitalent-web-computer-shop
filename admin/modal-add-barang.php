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

                    <div class=" input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                        <input id="codeBrg" type="text" class="form-control form-modal-digitalent" name="x" placeholder="IMAGE">
                        <input type="file" name="files[]" multiple />
                        <input type="submit" value="Create Gallery" id="selectedButton" class="pull-right" />
                    </div>

                    <hr>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                        <input id="codeBrg" type="text" class="form-control form-modal-digitalent" name="codeBrg" placeholder="KODE BARANG" required autofocus>
                    </div>

                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
                        <input id="nameBrg" type="text" class="form-control form-modal-digitalent" name="nameBrg" placeholder="NAMA BARANG" required>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                        <input id="file" type="file" class="form-control form-modal-digitalent" name="datafiledir" placeholder="file" webkitdirectory multiple>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                        <input id="file" type="file" class="form-control form-modal-digitalent" name="datafile1" placeholder="file" multiple>
                    </div>
                    <br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                        <input id="quantity" type="number" class="form-control form-modal-digitalent" name="quantity" placeholder="Quantity 1 PCS" multiple>
                    </div>
                    <br>


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