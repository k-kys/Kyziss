// Làm bài tập tại đây
function run(a, b, c) {
    var result = a || b || (a && b) || c; // Mình thêm ngoặc cho các bạn dễ hình dung
    return result;
}

/*
  * Mình xin giải thích lại dòng 3 cho bạn nào chưa hiểu:
  * Toán rời rạc lý thuyết:
      - Giả sử tôi gọi vế bên trái là vế 1, vế bên phải là vế 2 (vd: a || b)
      - Phép và (AND - &&): chỉ đúng khi cả 2 vế đều đúng, => nếu vế 1 đúng thì kết quả nằm ở vế 2, ngược lại kế quả chính là vế 1
      - Phép hoặc (OR - ||): chỉ sai khi cả 2 vế đều sai, => nếu vế 1 đúng thì kết quả chính là vế 1, ngược lại kết quả nằm ở vế 2

  * Đề bài:
      – Nếu biến a có giá trị truthy thì gán a cho result
      – Nếu biến a là falsy b là truthy thì gán b cho result
      – Nếu biến a và b là falsy thì gán c cho result

  * Giải bài toán:
      - a đúng lấy a, ngược lại lấy b. Nên ta có a || b
      - b đúng lấy b, ngược lại lấy ((a && b) || c). Nên ta có b || ((a && b) || c)
      - a && b đúng lấy c. Ta có (a && b) || c
      => a || b || ((a && b) || c);
*/