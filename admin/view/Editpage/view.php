<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Products</h3>

                        <div class="card-tools" style="margin-left: 88%;">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product's name</th>
                                    <th>Update on</th>
                                    <th>Status</th>
                                    <th>Item info</th>
                                    <th>Item brand</th>
                                    <th>Item color</th>
                                    <th>Item price</th>
                                    <th>Item image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($rows_item)) : ?>
                                    <?php foreach ($rows_item as $key => $value) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $value['item_name']; ?></td>
                                            <td>12-8-2021</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input <?php if ($value['status'] == 0) {
                                                                echo 'checked';
                                                            }  ?> value="1" class="form-check-input <?= $value['id']; ?>" style="border-radius: 100px;" type="checkbox" onclick="call_ajax_active(<?= $value['id']; ?>)">
                                                </div>

                                            </td>
                                            <td style="max-witdh:300px"><?= $value['item_info']; ?> </td>
                                            <td><?= $value['item_brand']; ?></td>
                                            <td><?= $value['item_color']; ?></td>
                                            <td><?= $value['item_price']; ?>$</td>
                                            <td><img style="width:100px" src="../<?= $value['item_image']; ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function call_ajax_active(item_id) {
        $('input[type=checkbox]').change(function() {
            var xhttp = new XMLHttpRequest();
            if ($(this).prop("checked")) {
                var value = $(this).val();
                console.log('1');
                xhttp.open("GET", "index.php?controller=Manager&action=ajax_item_active&id=" + item_id, true);
                xhttp.send();
            } else {
                console.log('2');
                xhttp.open("GET", "index.php?controller=Manager&action=ajax_item_inactive&id=" + item_id, true);
                xhttp.send();
            }
        });
    }
</script>