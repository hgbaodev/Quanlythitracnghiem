Dashmix.onLoad((() => class {
    static initValidation() {
        Dashmix.helpers("jq-validation"), jQuery(".js-validation-signup").validate({
            rules: {
                "signup-username": {
                    required: !0,
                    minlength: 3
                },
                "signup-email": {
                    required: !0,
                    emailWithDot: !0
                },
                "signup-password": {
                    required: !0,
                    minlength: 5
                },
                "signup-password-confirm": {
                    required: !0,
                    equalTo: "#signup-password"
                },
                "signup-terms": {
                    required: !0
                }
            },
            messages: {
                "signup-username": {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 3 characters"
                },
                "signup-email": "Please enter a valid email address",
                "signup-password": {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                "signup-password-confirm": {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                "signup-terms": "You must agree to the service terms!"
            }
        })
    }
    static init() {
        this.initValidation()
    }
}.init()));


$(".js-validation-signup").submit(function (e) { 
    e.preventDefault();
    if($(".js-validation-signup").valid()) {
        $.ajax({
            type: "post",
            url: "./auth/addUser",
            data: {
                fullname: $('#signup-username').val(),
                email: $('#signup-email').val(),
                password: $('#signup-password').val(),
            },
            dataType: "json",
            success: function (response) {
                if(response) {
                    window.location = "http://localhost/Quanlythitracnghiem/"
                } else {
                    alert("T???o kh??ng th??nh c??ng")
                }
            }
        });
    }
});
