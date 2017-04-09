function redirect(site) {
    window.location.assign(String(site));
}
var loggedIn = false;
function sendLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if ((username == "jake") && (password == "admin")) {
        document.getElementById("loginHolder").innerHTML = "";
        document.getElementById("messageHold").innerHTML = "Welcome back " + String(username) + "!";
        loggedIn = true;
    } else {
        document.getElementById("messageHold").innerHTML = "Incorrect, try again " + String(username);
    }
}

function checkVar(variable) {
    console.log(variable)
}
