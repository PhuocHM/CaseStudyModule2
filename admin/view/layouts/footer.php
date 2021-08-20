<footer class="footer text-center">
    All Rights Reserved by SparkCompany Designed and Developed by <a href="/index.php">Spark Company</a>.
</footer>
<!-- Bootstrap tether Core JavaScript -->
<script src="public/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="public/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="public/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="public/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="public/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="public/dist/js/custom.min.js"></script>
<!-- This Page JS -->
<script src="public/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="public/dist/js/pages/mask/mask.init.js"></script>
<script src="public/libs/select2/dist/js/select2.full.min.js"></script>
<script src="public/libs/select2/dist/js/select2.min.js"></script>
<script src="public/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="public/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="public/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="public/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="public/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="public/libs/quill/dist/quill.min.js"></script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>

<script>
    setTimeout(function() {
        document.getElementById('message').innerHTML = '';
    }, 2000);
</script>


<script>
    $('.item_type').on('select2:select', function(e) {
        var data = e.params.data;
        call_ajax(data.id);
    });

    function call_ajax(item_type_id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //xử lý khi gọi ajax xong
                let return_data = JSON.parse(xhttp.responseText);
                console.log(return_data);
                // var newOption = new Option(return_data.text, return_data.id, true, true);
                // $('.type').append(newOption).trigger('change');
                $('.type').val(return_data['item_id']); // Select the option with a value of '1'
                $('.type').trigger('change'); // Notify any JS components that the value changed
                document.getElementById('item_price').value = return_data['item_price'];
                document.getElementById('edit_name').value = return_data['item_name'];
                document.getElementById('edit_brand').value = return_data['item_brand'];
                document.getElementById('edit_color').value = return_data['item_color'];
                document.getElementById('edit_size').value = return_data['item_size'];
                document.getElementById('edit_info').value = return_data['item_info'];
                document.getElementById('delete-button').href = 'index.php?controller=Manager&action=delete_item&item_id=' + return_data['id'];

            }
        };
        xhttp.open("GET", "index.php?controller=Manager&action=ajax_item&id=" + item_type_id, true);
        xhttp.send();
    }
    // edit_list_id
    $('.edit_list_id').on('select2:select', function(e) {
        var data = e.params.data;
        call_ajax_list(data.id);
    });

    function call_ajax_list(item_type_id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //xử lý khi gọi ajax xong
                let return_data = JSON.parse(xhttp.responseText);
                console.log(return_data);
                // var newOption = new Option(return_data.text, return_data.id, true, true);
                // $('.type').append(newOption).trigger('change');
                $('.list_type').val(return_data['item_type']); // Select the option with a value of '1'
                $('.list_type').trigger('change'); // Notify any JS components that the value changed
                document.getElementById('list_name').value = return_data['item_name'];
                document.getElementById('list_info').value = return_data['item_info'];
                document.getElementById('delete-list').href = 'index.php?controller=Manager&action=delete_list&item_id=' + return_data['id'];

            }
        };
        xhttp.open("GET", "index.php?controller=Manager&action=ajax_list&id=" + item_type_id, true);
        xhttp.send();
    }
    // edit_type
    $('.add_type_tt').on('select2:select', function(e) {
        var data = e.params.data;
        call_ajax_type(data.id);
    });

    function call_ajax_type(item_type_id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //xử lý khi gọi ajax xong
                let return_data = JSON.parse(xhttp.responseText);
                console.log(return_data);
                document.getElementById('type_current').value = return_data['item_type'];
                document.getElementById('delete_type_b').href = 'index.php?controller=Manager&action=delete_type&item_id=' + return_data['id'];

            }
        };
        xhttp.open("GET", "index.php?controller=Manager&action=ajax_type&id=" + item_type_id, true);
        xhttp.send();
    }
</script>
</body>

</html>