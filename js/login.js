function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    $.post("login_management.php", { email: email, password: password }, function (data) {
        if (data == "input exactly") {
            alert("Input information exactly");
        } else {
            alert("success")
            window.location.href = "dashboard.php";
        }
    })
}