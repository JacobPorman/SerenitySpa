<?php
require_once "./mvc/core/basehref.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">


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

        .form .desc {
            text-align: center;
            color: #636d77;
            font-size: 1.2rem;
            font-weight: lighter;
            line-height: 2.4rem;
            margin-top: 16px;
            font-weight: 300;
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
        <form method="POST" class="form" id="form-1" action="<?php echo getUrl() . "/login/register" ?>">

            <h3 class="heading">Register</h3>
            <p class="desc">Connect to the shop</p>
            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullname" class="form-label">Full Name</label>
                <input id="fullname" name="name" type="text" placeholder="Enter your fullname" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="phonenumber" class="form-label">Phone</label>
                <input id="phonenumber" name="phone" type="number" placeholder="+ 84" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="email" placeholder="Enter your email" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control">
                <span class="form-message"></span>
            </div>
            <button class="form-submit" type="submit">Submit</button>
        </form>
    </div>



</body>

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="/js/script_menu_mon_an.js"></script>

</html>