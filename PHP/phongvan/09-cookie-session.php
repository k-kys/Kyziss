
Câu 9: Cookie và session có gì khác nhau? Người ta nói bản thân của session là cookie là đúng hay sai?

answer:

COOKIE là một tập tin nhỏ được server nhúng vào máy tính của người dùng.
    - Nếu lần đầu tiên trình duyệt truy cập vào website nó sẽ gửi một COOKIE đến trình duyệt của người dùng,
    - Mỗi khi người dùng tiếp tục yêu cầu một trang web từ website này thì COOKIE (với các thông tin thu nhập từ phía người dùng trên website này) sẽ được sẽ gửi trả về Server của website.

SESSION được hiểu là khoảng thời gian mà client giao tiếp với 1 ứng dụng.
    - Session được lưu trữ hoàn toàn trên server, do vậy tính bảo mật cao hơn cookie,
    - Các website hiện này thường dùng session để lưu thông tin của người dùng khi họ đăng nhập.
    - Chu kỳ sống của SESSION do Webserver qui định, ta có thể điều chỉnh chu kỳ này khi cấu hình webserver,
    - Tại server sẽ có 1 PHPSESSID tương ứng được tạo ra, các PHPSESSID sẽ được lưu trong một tập tin văn bản ở tại vị trí được qui định trong file php.ini ở dòng session.save_path.

Người ta nói bản thân của session là cookie, về cơ bản SESSION và COOKIE đều là các tập tin lưu trữ lại thông tin của người dùng website, tuy nhiên dựa trên khái miệm, cách sử dụng, ứng dụng của chúng là khác biệt vì thế tôi cho rằng chúng là khác biệt.
