function validateLogin() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    axios.post('../controllers/connection.php', {
        uname: email,
        pword: password
    }).then( (response) => {
        console.log(response.data);
        if (response.data == "valid") {
            window.location.href = "view_c/admin/manage_user.php";
        } else {
            alert("Invalid user account!!");
        }
    }).catch( (error) => {
        alert("Error encountered while validating your account!");
    });}