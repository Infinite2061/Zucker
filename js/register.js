function register() {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    if (password == confirm_password) {
        $.post("register_management.php", { firstname: firstname, lastname: lastname, username: username, email: email, password: password }, function (data) {
            if (data) {
                alert("success", data)
            }
        })
    } else {
        alert("password and confirm password don't match ")
    }
}