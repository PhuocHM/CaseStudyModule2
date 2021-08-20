<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Items Management</h4>
                <div class="ms-auto text-end">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div style="width:70%;margin-left:350px;margin-top:20px;margin-bottom: 30px;">
        <?php
        include_once 'view/layouts/menubar.php';
        ?>
    </div>
    <div class="container-fluid">
        <div id="message">
            <?php if (isset($_SESSION['notice'])) : ?>
                <p><?php echo $_SESSION['notice'];
                    unset($_SESSION['notice']); ?></p>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <!-- FORM START -->
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Edit Item Info</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Item Name</label>
                                <div class="col-md-9">
                                    <select name="item_edit_name" class="select2 item_type form-select shadow-none" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <!--<optgroup label="Other"></optgroup> -->
                                        <?php
                                        foreach ($rows_item as $key => $value) {
                                            echo '<option value="' . $value['id'] . '">' . $value['item_name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Item Type</label>
                                <div class="col-md-9">
                                    <select name="item_edit_type" class="select2 type form-select shadow-none" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <!-- <optgroup label="Other"></optgroup> -->
                                        <?php
                                        foreach ($rows_list as $key => $value) {
                                            echo '<option value="' . $value['id'] . '">' . $value['item_name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!-------------------------- EDIT ------------------------->
                            <div class="form-group row">
                                <label for="item-brand" class="col-sm-3 text-end control-label col-form-label">Item Name</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="edit_name" id="edit_name" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item-brand" class="col-sm-3 text-end control-label col-form-label">Item Brand</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="item_edit_brand" id="edit_brand" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item-color" class="col-sm-3 text-end control-label col-form-label">Item Color</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="item_edit_color" id="edit_color" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item-size" class="col-sm-3 text-end control-label col-form-label">Item Size</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="item_edit_size" id="edit_size" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item_price" class="col-sm-3 text-end control-label col-form-label">Prices</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="input-group">
                                            <input name="item_edit_prices" id="item_price" type="text" class="form-control" placeholder="0.00" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Item Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input name="item_image" type="file" class="custom-file-input">
                                        <div class="invalid-feedback" id="current_image">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Desciptions</label>
                                <div class="col-sm-9">
                                    <textarea name="item_edit_des" id="edit_info" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a id="delete-button" class="btn btn-danger text-white">Delete</a>
                            </div>
                        </div>
                    </form>
                    <!-- TEST AREA -->
                    <!-- TEST AREA -->
                </div>
            </div>

            <!-- ADD NEW ITEM -->
            <div class="col-md-6">
                <div class="card">
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Add New Item</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Item Name</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="item_add_name" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Item Type</label>
                                <div class="col-md-9">
                                    <select name="item_add_type" class="select2 form-select shadow-none" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <!-- <optgroup label="Other"></optgroup> -->
                                        <?php
                                        foreach ($rows_list as $key => $value) {
                                            echo '<option value="' . $value['id'] . '">' . $value['item_name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item-brand" class="col-sm-3 text-end control-label col-form-label">Item Brand</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="item_add_brand" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item-color" class="col-sm-3 text-end control-label col-form-label">Item Color</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="item_add_color" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item-size" class="col-sm-3 text-end control-label col-form-label">Item Size</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="item_add_size" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Prices</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="input-group">
                                            <input name="item_add_prices" type="text" class="form-control" placeholder="0.00" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Item Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input name="item_add_image" type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Desciptions</label>
                                <div class="col-sm-9">
                                    <textarea name="item_add_des" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>