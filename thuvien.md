
  user -> đặt mượn (số lượng) -> lưu vào orders
  if (admin duyệt) -> lưu thông tin vào bảng books_out_on_loan, xóa trong bảng orders
  else(admin từ chối) -> xoá trong bảng orders

  card-body => height: 70vh,
  button 'Thêm' => btn-xs btn-succes, fas fa-plus-circle,
  button 'Sửa' => btn-sm btn-secondary, fas fa-edit,
  button 'Xóa' => btn-sm btn-warning, fas fa-trash-alt,

  button 'Cập nhật' => btn-sm btn-primary, fas fa-save,
  button 'Quay lại' => btn-sm btn-default, fas fa-angle-double-left,


  lưu lượt mượn sách: có 1 phiếu mượn được xác nhận sẽ tăng times = times + number;
  times_borrowed (
  id
  book_id
  times
  created_at
  updated_at
  )



  thống kê:
  - Tổng số sách
  - Số lượng còn lại (stock_amount)
  - Tổng số phiếu mượn
  - Số lượng sách đang mượn/phiếu mượn chưa trả (status == 0)

  - Tổng số sinh viên đăng ký (isDelete == 0)
  - Số sinh viên đang bị khoá acc (status == 0)


  - mượn gần đây: select from books->join(books_out_on_loan)->where(staus == 0)->orderByDesc(created_at)->take(10);
  - trả gần đây: select from books->join(books_out_on_loan)->where(status == 1)->orderByDesc(updated_at)->take(10);
  - sách mượn nhiều nhất trong tháng qua: select(Tên sách) from times_borrowed ->join(books)->where(tháng trc)->orderByDesc(times)->take(10);
  - sách mượn nhiều nhất cả kho: select(Tên sách) from times_borrowed ->join(books)->orderByDesc(times)->take(10);
  - sách mới nhập: select from books->orderByDesc(created_at)->take(10);
  - sách đã xoá: select from books->where(softDelete == 1)->orderByDesc(updated_at);
  - sinh viên bị phạt: select from books_loan->join(students)->where(fine > 0)->orderByDesc(updated_at);
