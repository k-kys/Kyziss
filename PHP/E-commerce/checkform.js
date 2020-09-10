
function validate(userForm) {

	// Email validate
	divEmail = document.getElementById("emailmsg"); // gán thẻ tại id=emailmsg vào biến divEmail
	divEmail.style.color = "red"; // thiết lập nội dung sẽ được hiển thị tại vị trí được chỉ định bởi ID emailmsg có màu đỏ
	if (divEmail.hasChildNodes()) { // kiểm tra xem một thông báo đã được hiển thị ở vị trí ID emailmsg chưa. 
		divEmail.removeChild(divEmail.firstChild); // Nếu một thông báo lỗi đã được hiển thị,nó bị loại bỏ bằng phương thức removeChild()
	}
	regex = /(^\w+\@\w+\.\w+)/; // kiểm tra địa chỉ e-mail hợp lệ
	match = regex.exec(userForm.email_address.value);
	if (!match) {
		divEmail.appendChild(document.createTextNode("Invalid Email")); // Nếu người dùng nhập một e-mail không hợp lệ, phương thức appendChild() được sử dụng để hiển thị thông báo lỗi, "Email không hợp lệ" tại vị trí id=emailmsg
		userForm.email_address.focus(); // đặt con trỏ tại ô email
		return false; 
	}

	// Password validate
	divPass = document.getElementById("passwdmsg");
	divPass.style.color = "red";
	if (divPass.hasChildNodes()) {
		divPass.removeChild(divPass.firstChild);
	}
	if (userForm.password.value.length <= 5) {
		divPass.appendChild(document.createTextNode("The password should be of at least size 6"));
		userForm.password.focus();
		return false;
	}

	// RePassword validate
	divRePass = document.getElementById("repasswdmsg");
	divRePass.style.color = "red";
	if (divRePass.hasChildNodes()) {
		divRePass.removeChild(divRePass.firstChild);
	}
	if (userForm.re_password.value != userForm.password.value) {
		divRePass.appendChild(document.createTextNode("The two password don\'t match"));
		userForm.re_password.focus();
		return false;
	}

	// Name validate
	divUsr = document.getElementById("usrmsg");
	divUsr.style.color = "red";
	if (divUsr.hasChildNodes()) {
		divUsr.removeChild(divUsr.firstChild);
	}
	if (userForm.complete_name.value.length == 0) {
		divUsr.appendChild(document.createTextNode("Name cannot be blank"));
		userForm.complete_name.focus();
		return false;
	}

	return true;
}