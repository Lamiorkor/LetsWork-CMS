function signIn() {
    var email = document.getElementById("emailInput").value;
    var password = document.getElementById("passwordInput").value;

    authenticateUser(email, password);
}

function authenticateUser(email, password) {
    $.ajax({
        type: "POST",
        url: "../actions/authenticate_user.php",
        data: {email: email, password: password},
        success: function(response) {
            if (response === "success") {
                alert("Login successful!");
                navigateToHomePage();
            } else {
                alert("Invalid email or password. Please try again.");
            }
        },
        error: function() {
            alert("An error occurred while processing your request.");
        }
    });
}

function navigateToHomePage() {
    window.location.href = "../view/home_page.html";
}
