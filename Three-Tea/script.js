var log = document.getElementById("login");
var sign = document.getElementById("signup");
var btn = document.getElementById("btn");

function login() {
    log.style.left = "25px";
    sign.style.left = "400px";
    btn.style.left = "0px";
}

function signup() {
    log.style.left = "-400px";
    sign.style.left = "25px";
    btn.style.left = "110px";
}

function showPW() {
    var show = document.getElementById("show");
    if(show.type == "password") {
        show.type = "text";
    }
    else {
        show.type = "password";
    }
}

function goto_login1() {
    document.location = "LS-Ad.php";
}

function goto_login2() {
    document.location = "LS-Stud.php";
}

function filter() {
    document.location = "filter.php";
}
