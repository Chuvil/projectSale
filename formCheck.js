$(document).ready(function () {
    $("#login").keyup(function () {
        checkLogin();
    });
    $("#email").keyup(function () {
        checkEmail();
    });
    $("#photo").change(function () {
        var input=$(this)[0];
        if(input.files&&input.files[0]){
            if(input.files[0].type.match('image.*')){
                var reader=new FileReader();
                reader.onload=function (e) {
                    $("#image_preview").attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }else console.log("is not image mime type");
        }else console.log("not isset files data or files API not supported");
    });

});
function checkLogin() {
    var login=$("#login").val();
    if (rLogin(login)==true) {
        alert("test");
        $.ajax({
            method: "post",
            url: "checkLogin.php",
            data: {login: login},
            success: function (res) {
                if (res == 2) {
                    alert("ok");
                    $("#sLogin").text("");
                    $("#login").addClass("ok");
                    $("#sLogin").removeClass("error");
                } else {
                    alert("error");
                    $("#sLogin").text("Такой логин уже существует");
                    $("#login").addClass("error");
                    $("#sLogin").addClass("error");
                    $("#login").removeClass("ok");
                }
            }
        })
    }else{
        alert("fail");
    }
}
function rLogin(login) {
    var regLogin=/^[a-zA-Z0-9_-]{3,16}$/;
    if(login.match(regLogin)) {
        return true;
    }
}
function checkEmail() {
    var email=$("#email").val();
    if(rEmail(email)==true) {
        $.ajax({
            method: "post",
            url: "checkEmail.php",
            data: {email: email},
            success: function (res) {
                if (res == 2) {
                    $("#sEmail").text("");
                    $("#email").addClass("ok");
                    $("#sEmail").removeClass("error");
                } else {
                    $("#sEmail").text("Такой e-mail уже существует");
                    $("#email").addClass("error");
                    $("#sEmail").addClass("error");
                    $("#email").removeClass("ok");
                }
            }
        });
    }
}
function rEmail(email) {
    var regEmail=/^([a-zA-Z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/;
    if(email.match(regEmail)){
        return true;
    }
}
function checkPassword() {
    var password=$("#password").val();

}
function rPassword(password) {
    var regPassword=/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$/;
    if(password.match(regPassword)){
        return true;
    }
}

