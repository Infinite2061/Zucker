function allclear() {
    $.get("admin_management.php", function (data) {
        if (data) {
            alert("success")

        } else {
            alert("faild")
        }
    })
}