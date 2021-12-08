<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edit.php">


                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Order No::</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" readonly>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">First Name:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="FN" value="<?php echo $row->First_Name; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Last Name:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="LN" value="<?php echo $row->Last_Name; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">E-mail:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="EM" value="<?php echo $row->Email; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Contact No.:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="PH" value="<?php echo $row->Contact; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Address:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="AD" value="<?php echo $row->Address; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Item:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="IT" value="<?php echo $row->products; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Quantity:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="Q" value="<?php echo $row->Quantity; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Bill:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="BL" value="<?php echo $row->totalprice; ?>">
                            </div>
                        </div>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center"><?php echo $row->productName; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>