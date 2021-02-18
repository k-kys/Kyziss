<?php
include "../GITHUB/Kyziss/phpGrid/conf.php";

$dg = new C_DataGrid("SELECT * FROM orders", "orderNumber", "orders");

// change column title
$dg->set_col_title("id", "Mã khách hàng");
$dg->set_col_title("customer_name", "Tên khách hàng");
$dg->set_col_title("customer_email", "Email khách hàng");
$dg->set_col_title("created_at", "Ngày tạo");
$dg->set_col_title("updated_at", "Ngày cập nhật");

// enable edit
$dg->enable_edit("INLINE", "CRUD");

// multiple select
$dg->set_multiselect(true);

// second grid as detail grid. Notice it is just another regular phpGrid with properites.
$sdg = new C_DataGrid("SELECT * FROM order_product", "order_id", "order_product");
$sdg->set_col_title("order_id", "Mã order");
$sdg->set_col_title("product_id", "Mã sản phẩm");
$sdg->set_col_title("quantity", "Số lượng");

// xác định mối quan hệ master detail bằng cách chuyển đối tượng detail grid làm tham số đầu tiên, sau đó là tên khóa ngoại.
$dg->set_masterdetail($sdg, 'id');
$dg->display();
