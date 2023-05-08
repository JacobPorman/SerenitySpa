<?php
require_once "./mvc/core/basehref.php";
// if (!$_SESSION['username']) {
//     header("Location: " . geturl() . "/login/loginView");
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
    .main {
        background: #ebd6d6;
        min-height: 100vh;
        display: flex;
        justify-content: center;
    }

    .form {
        width: 380px;
        min-height: 100px;
        padding: 32px 24px;
        text-align: center;
        background: #fff;
        border-radius: 2px;
        margin: 24px;
        align-self: center;
        box-shadow: 0 5px 10px 0 rgba(51, 62, 73, .5);
    }

    .form .heading {
        font-size: 2rem;
    }

    .form a {
        text-decoration: none;
    }

    .form .desc {
        text-align: center;
        color: #636d77;
        font-size: 1.2rem;
        font-weight: lighter;
        line-height: 2.4rem;
        margin-top: 16px;
        font-weight: 300;
        transition: all 0.2s;
    }

    .form .desc:hover {
        color: #c95a5a;
    }


    .form-group {
        display: flex;
        margin-bottom: 16px;
        flex-direction: column;
    }

    .form-label,
    .form-message {
        text-align: left;
    }

    .form-label {
        font-weight: 700;
        padding-bottom: 6px;
        line-height: 1.8rem;
        font-size: 1.2rem;
    }

    .form-control {
        height: 40px;
        padding: 8px 12px;
        border: 1px solid #b3b3b3;
        border-radius: 3px;
        outline: none;
        font-size: 1.1rem;
    }

    .form-control:hover {
        border-color: #1dbfaf;
    }

    .form-group.invalid .form-control {
        border-color: #f33a58;
    }

    .form-group.invalid .form-message {
        color: #f33a58;
    }

    .form-message {
        font-size: 1.2rem;
        line-height: 1.6rem;
        padding: 4px 0 0;
    }

    .form-submit {
        outline: none;
        background-color: gray;
        margin-top: 12px;
        padding: 12px 16px;
        font-weight: 600;
        color: #fff;
        border: none;
        width: 100%;
        font-size: 14px;
        border-radius: 8px;
        cursor: pointer;
    }

    .form-submit:hover {
        background-color: #c95a5a;
    }

    .spacer {
        margin-top: 36px;
    }

    input[readonly] {
        border: 2px solid rgba(0, 0, 0, 0);
    }

    .bd-t {
        border-top: 1px solid #d8d8d8;
    }

    .modal-body {
        font-size: 25px;
    }
    </style>
</head>

<body>
    <div class="main">
        <form method="post" class="form" id="form-2" action="login/auth">
            <h3 class="heading">Log In</h3>
            <p class="desc">To the shop</p>
            <!-- {{#if message}}
            <div class="alert alert-danger" role="alert">{{message}}</div>
        {{/if}} -->
            <div class="spacer"></div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input id="email" name="email" type="email" aria-describedby="emailHelp"
                    placeholder="Enter your email..." class="form-control" required>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input id="password" name="password" type="password" placeholder="Enter password..."
                    class="form-control" required>
                <span class="form-message"></span>
            </div>
            <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
            <a href="login/registerView" class='desc'>Register now!</a>
            <button class="form-submit" type="submit">Log In</button>
        </form>

    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {

        Validator({
            mainform: '.form',
            form: '#form-2',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isEmail('#email'),
                Validator.minLength('#password', 6),
            ],
            onSubmit: function(data) {
                // Call API
                //console.log(data);
                mainform.submit();
            }
        });
    });
    </script>

    <script>
    var readonly = true;
    $('.user__info input[type="button"]').on('click', function() {
        $('.user__info input[type="text"]').attr('readonly', !readonly);
        $('.user__info input[type="email"]').attr('readonly', !readonly);
        $('.user__info input[type="number"]').attr('readonly', !readonly);
        $('.user__info input[type="month"]').attr('readonly', !readonly);
        $('.user__info input[type="button"]').prop('disabled', function(i, v) {
            return readonly ? !v : v;
        })
        $('.user__info input[type="submit"]:not([name])').prop('disabled', function(i, v) {
            return readonly ? !v : v;
        })
        readonly = !readonly;
        return false;
    });



    $("#profileImage").click(function(e) {
        $("#imageUpload").click();
    });

    function fasterPreview(uploader) {
        if (uploader.files && uploader.files[0]) {
            $('#profileImage').attr('src',
                window.URL.createObjectURL(uploader.files[0]));
        }
    }

    $("#imageUpload").change(function() {
        fasterPreview(this);
    });
    </script>
</body>

</html>