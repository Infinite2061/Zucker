function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (email == "BUAD375" && password == "573DAUB") {
        window.location.href = "admininit.php"
    } else {
        alert("Input information exactly")
    }
}