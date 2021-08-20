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
                    <form method="post">
                        <div class="card-body">
                            <h4 class="card-title">Item Type</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Current Type</label>
                                <div class="col-md-9">
                                    <select name="add_type_t" class="select2 add_type_tt form-select shadow-none" style="width: 100%; height:36px;">
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
                                <label for="type_name" class="col-sm-3 text-end control-label col-form-label">Type Name</label>
                                <div class="col-md-9">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="type_current" id="type_current" type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <button type="submit" class="btn btn-warning">Update</button>
                                <a id="delete_type_b" class="btn btn-danger text-white">Delete</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ADD NEW ITEM -->
        </div>
    </div>
</div>
</div>