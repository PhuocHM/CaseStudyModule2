<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Site Analysis</h4>
                                <h5 class="card-subtitle">Overview of Latest Month</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="flot-chart">
                                    <div style="display: block;height:342px;width:747px" id="chart-realtime">
                                        <canvas id="myChart" width="690px" height="300px"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-user mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">2</h5>
                                            <small class="font-light">Total Users</small>
                                        </div>
                                    </div>

                                    <div class="col-6 mt-3">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-tag mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1"><?php echo $count; ?></h5>
                                            <small class="font-light">Total Orders</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- column -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Order Information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Customer's name</label>
                                    <input id="order_email" type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Address</label>
                                    <textarea id="order_address" class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Item's bought</label>
                                </div>
                                <div id="order_amount" class="input-group"></div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Total</label>
                                </div>
                                <div class="input-group" style="width:100px;">
                                    <input id="total" type="text" class="form-control">
                                    <span class="input-group-text">$</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order</h4>
                    </div>
                    <div class="comment-widgets scrollable">
                        <?php
                        foreach ($rows_order as $key => $value) {
                            if ($value->status == 0) {
                                echo '<div class="d-flex flex-row comment-row mt-0">
                                <div class="p-2"><img src="' . $value->user_images . '" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                <h6 class="font-medium">' . $value->username . '</h6>
                                <span class="mb-3 d-block">' . $value->user_address . '</span>
                                <div class="comment-footer">
                                <span class="text-muted float-end">' . $value->order_date . '</span>
                                <a href="index.php?controller=Home&action=accept_order&order_id=' . $value->id . '"class="btn btn-success btn-sm text-white">Success</a>
                                <a href="index.php?controller=Home&action=delete_order&order_id=' . $value->id . '" class="btn btn-danger btn-sm text-white">Delete</a>
                                <button onclick="call_ajax_order(' . $value->id . ')" type="button"  class="btn btn-warning btn-sm text-white view_button">View</button>
                                </div>
                                </div>
                                </div>';
                            }
                        }
                        ?>
                        <!-- Comment Row -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Work Plan</h4>
                        <form method="post">
                            <div class="todo-widget scrollable" style="height:450px;">
                                <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                    <!--  -->
                                    <?php foreach ($work_plans as $key => $value) : ?>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck<?= $value['id']; ?>">
                                                <label class="form-check-label w-100 mb-0 todo-label" for="customCheck<?= $value['id']; ?>">
                                                    <span class="todo-desc fw-normal"><?= $value['plan'] ?></span><span class="badge rounded-pill bg-primary float-end"><?= $value['time_update']; ?>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                    <!--  -->
                                </ul>
                            </div>
                            <div class="input-group mb-3">
                                <input name="new_plan" type="text" class="form-control" placeholder="Add new plan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($_GET["controller"] == 'Home' && $_GET["action"] == 'view') : ?>
        <script src="public/libs/flot/excanvas.js"></script>
        <script src="https://crm.triskins.com/assets/vendor/chart.js/Chart.min.js"></script>

        <script>
            console.log(<?php echo $month; ?>);
            console.log('123');
            let myChart = document.getElementById('myChart').getContext('2d');
            // Global Options
            Chart.defaults.global.defaultFontFamily = 'Lato';
            Chart.defaults.global.defaultFontSize = 17;
            Chart.defaults.global.defaultFontColor = '#777';

            let massPopChart = new Chart(myChart, {
                type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                data: {
                    //January,February,March,April,May,June,July,August,September,October,November,December//['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford']
                    labels: <?php echo $month; ?>,
                    datasets: [{
                        label: 'USD',
                        data: <?php echo $cost; ?>,
                        //backgroundColor:'green',
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                        ],
                        borderWidth: 1,
                        borderColor: '#777',
                        hoverBorderWidth: 3,
                        hoverBorderColor: '#000'
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Revenue Statistics ',
                        fontSize: 25
                    },
                    legend: {
                        display: true,
                        position: 'right',
                        labels: {
                            fontColor: '#000'
                        }
                    },
                    layout: {
                        padding: {
                            left: 50,
                            right: 0,
                            bottom: 0,
                            top: 0
                        }
                    },
                    tooltips: {
                        enabled: true
                    }
                }
            });
        </script>
    <?php endif ?>
    <script>
        function call_ajax_order(order_id) {
            //
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //xử lý khi gọi ajax xong
                    let return_data = JSON.parse(xhttp.responseText);
                    console.log(return_data);
                    document.getElementById('order_email').value = return_data[0]['email'];
                    document.getElementById('order_address').value = return_data[0]['user_address'];
                    let tmp = '';
                    for (var i = 0; i < return_data.length; i++) {
                        tmp += `<div class="input-group" style="margin-bottom:10px">
                        <input type="text" class="form-control" value=` + return_data[i]['item_name'] + `">
                        <span class="input-group-text">x</span>
                        <span class="input-group-text">` + return_data[i]['item_amount'] + `</span></div>`;
                    }
                    document.getElementById('order_amount').innerHTML = tmp;
                    document.getElementById('total').value = return_data[0]['item_total'];
                }
                $('#exampleModal').modal('show');
            };
            xhttp.open("GET", "index.php?controller=Home&action=ajax_order&order_id=" + order_id, true);
            xhttp.send();
            //

        }
    </script>