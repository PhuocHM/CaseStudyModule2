<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Chat Option</h4>
                        <div class="chat-box scrollable" style="height:475px;">
                            <!--chat Row -->
                            <ul class="chat-list" id="messages">
                            </ul>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field mt-0 mb-0">
                                    <input id="input_field" placeholder="Type and enter" class="form-control border-0">
                                </div>
                            </div>
                            <div class="col-3">
                                <button id="send_btn" type="button" class="btn-circle btn-lg btn-cyan float-end text-white" href="javascript:void(0)"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const inputField = document.getElementById("input_field");
        inputField.addEventListener("keydown", function(e) {
            if (e.code === "Enter") {
                let input = inputField.value;
                inputField.value = "";
                output(input);
            }
        });
    });
    // AJAX
    function ajax_assistant(input, action) {
        var xhttp = new XMLHttpRequest();
        if (action == 'detele_user') {
            xhttp.open("GET", "index.php?controller=Admin&action=delete_user&id=" + input, true);
            xhttp.send();
        } else if (action == "find_user") {
            xhttp.open("GET", "index.php?controller=Admin&action=seach_user&seach_content=" + input, true);
            xhttp.send();
        }
    }
    // 
    function output(input) {
        let text = input.trim().toLowerCase();
        let action = '';
        if (text.match(/(find product info|thông tin sản phẩm)/gi)) {
            action = 'find product';
            text = text.replace(/find product info /g, "").replace(/thông tin sản phẩm /g, "")
        } else if (text.match(/(find user info|thông tin khách hàng)/gi)) {
            action = 'find user';
            text = text.replace(/find user info /g, "").replace(/thông tin khách hàng /g, "")
        } else if (text.match(/(set admin for id|cấp quyền admin cho id)/gi)) {
            action = 'set admin';
            text = text.replace(/set admin for id /g, "").replace(/cấp quyền admin cho id /g, "")
        } else if (text.match(/(take admin from id|cấp quyền user cho id)/gi)) {
            action = 'set user';
            text = text.replace(/take admin from id /g, "").replace(/cấp quyền user cho id /g, "")
        }
        if (action) {
            $.ajax({
                url: 'index.php?controller=Assistant&action=ajax_find_product',
                method: 'POST',
                data: {
                    content: text,
                    action: action
                },
                success: function(result) {
                    if (action == "find product") {
                        $value = input;
                        $msg = '<li class="odd chat-item"><div class="chat-content"><div class="box bg-light-info">' + $value + '</div></div></li>';
                        $(".chat-list").append($msg);
                        results = JSON.parse(result);
                        console.log(results);
                        //addChat(input, result);
                        for (let i = 0; i < results.length; i++) {
                            $replay = '<li class="chat-item"><div class="chat-content"><div class="box bg-light-info"><img src="../' + results[i]['item_image'] + '" width="200px" style="padding-bottom:20px"><h4>Product name: ' + results[i]['item_name'] + '</h4><p>ID: ' + results[i]['id'] + '</p><p>Brand: ' + results[i]['item_brand'] + '</p><p>Info: ' + results[i]['item_info'] + '</p><p>Price: ' + results[i]['item_price'] + '$</p><p>Update on: ' + results[i]['update_date'] + '</p></div></div></li>';
                            $(".chat-list").append($replay);
                            $(".chat-list").scrollTop($(".chat-list")[0].scrollHeight);
                        }
                    } else if (action == "find user") {
                        $value = input;
                        $msg = '<li class="odd chat-item"><div class="chat-content"><div class="box bg-light-info">' + $value + '</div></div></li>';
                        $(".chat-list").append($msg);
                        results = JSON.parse(result);
                        console.log(results);
                        for (let i = 0; i < results.length; i++) {
                            let role = '';
                            if (results[i]['role'] == 1) {
                                role = "User";
                            } else {
                                role = "Admin";
                            }
                            $replay = '<li class="chat-item"><div class="chat-content"><div class="box bg-light-info"><img src="' + results[i]['user_images'] + '" width="200px" style="padding-bottom:20px"><h4>User name: ' + results[i]['username'] + '</h4><p>Email: ' + results[i]['email'] + '</p><p>ID: ' + results[i]['id'] + '</p><p>Role: ' + role + '</p></div></div></li>';
                            $(".chat-list").append($replay);
                            $(".chat-list").scrollTop($(".chat-list")[0].scrollHeight);
                        }
                    } else if (action == "set admin" || action == "set user") {
                        $value = input;
                        $msg = '<li class="odd chat-item"><div class="chat-content"><div class="box bg-light-info">' + $value + '</div></div></li>';
                        $(".chat-list").append($msg);
                        $replay = '<li class="chat-item"><div class="chat-content"><div class="box bg-light-info">As you wish !!</div></div></li>';
                        $(".chat-list").append($replay);
                        $(".chat-list").scrollTop($(".chat-list")[0].scrollHeight);
                    }

                }
            });
        }
        // 
        else {
            $value = input;
            $msg = '<li class="odd chat-item"><div class="chat-content"><div class="box bg-light-info">' + $value + '</div></div></li>';
            $(".chat-list").append($msg);
            $.ajax({
                url: 'index.php?controller=Assistant&action=ajax_find_replies',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    console.log(result);
                    $replay = '<li class="chat-item"><div class="chat-content"><div class="box bg-light-info">' + result + '</div></div></li>';
                    $(".chat-list").append($replay);
                    $(".chat-list").scrollTop($(".chat-list")[0].scrollHeight);
                }
            });
        }

    }

    function addChat(input, product) {
        $value = input;
        $msg = '<li class="odd chat-item"><div class="chat-content"><div class="box bg-light-info">' + $value + '</div></div></li>';
        $(".chat-list").append($msg);
        $replay = '<li class="chat-item"><div class="chat-content"><div class="box bg-light-info">' + product + '</div></div></li>';
        $(".chat-list").append($replay);
        $(".chat-list").scrollTop($(".chat-list")[0].scrollHeight);
    }

    function weatherCheck(input) {
        let product = "";
        let api_url =
            "https://api.openweathermap.org/data/2.5/weather?q=saigon&appid=ff532977349290d86ac2bc3243a8ca5a";
        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", api_url, true);
        xhttp.send();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let ketqua = JSON.parse(xhttp.responseText);
                console.log(ketqua.main);
                let temp = parseInt(ketqua.main.temp - 273);
                let feelslike = parseInt(ketqua.main.feels_like - 273);
                product =
                    "Nhiệt độ hôm nay : " +
                    temp +
                    "°" +
                    " và có cảm giác như : " +
                    feelslike +
                    "°";
                addChat(input, product);
            }
        };
    }
</script>