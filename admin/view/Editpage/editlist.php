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
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Edit List Info</h4>
                            <div class="form-group row">
                                <label for="edit_list_id" class="col-sm-3 text-end control-label col-form-label">List Name</label>
                                <div class="col-md-9">
                                    <select name="edit_list_id" class="select2 edit_list_id form-select shadow-none" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <!--<optgroup label="Other"></optgroup> -->
                                        <?php
                                        foreach ($rows_list as $key => $value) {
                                            echo '<option value="' . $value['id'] . '">' . $value['item_name'] . '</option>';
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Item Type</label>
                                <div class="col-md-9">
                                    <select name="edit_list_type" class="select2 list_type form-select shadow-none" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <?php
                                        foreach ($rows_type as $key => $value) {
                                            echo '<option value="' . $value['id'] . '">' . $value['item_type'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="list_name" class="col-sm-3 text-end control-label col-form-label">Current Name</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="list_name" id="list_name" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="list_info" class="col-sm-3 text-end control-label col-form-label">List Info</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="list_info" id="list_info" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="list_image" class="col-sm-3 text-end control-label col-form-label">List Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input name="list_image" id="list_image" type="file" class="custom-file-input" id="validatedCustomFile">
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a id="delete-list" class="btn btn-danger text-white">Delete</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ADD NEW ITEM -->
            <div class="col-md-6">
                <div class="card">
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Add New List</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Item Type</label>
                                <div class="col-md-9">
                                    <select name="add_list_type" class="select2 list_type_t form-select shadow-none" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <?php
                                        foreach ($rows_type as $key => $value) {
                                            echo '<option value="' . $value['id'] . '">' . $value['item_type'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item-brand" class="col-sm-3 text-end control-label col-form-label">List Name</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="add_list_name" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="item-color" class="col-sm-3 text-end control-label col-form-label">List Info</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="add_list_info" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">List Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input name="add_list_image" type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>