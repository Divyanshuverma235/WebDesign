<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    /* Inline CSS */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    }

    nav {
        display: flex;
        justify-content:space-between;
        align-items: center;
        padding: 1vw 8vw;
        background-color:white;
        z-index: 1;
    }
    nav .navigation ul li a
{
	text-decoration: none;
	color: rgb(21, 21, 100);
	font-size: 18px;
	font-weight: 500;
	transition: 0.3s ease;
}

nav .navigation ul li a.active,
nav .navigation ul li a:hover
{
	color: #FDC93B;

}

    .logo {
        height: 50px; /* Adjust height as needed */
    }

    .navigation ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .navigation ul li {
        margin-right: 20px;
    }

    .navigation ul li:last-child {
        margin-right: 0;
    }

    .navigation ul li a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s ease;
    }

    .navigation ul li a:hover {
        color: red;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.861);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 400px;
        margin: 50px auto; /* Center the form */
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333333;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #4CAF50;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 10px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }
    .login #log div a:hover {
    color: red;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<!-- navigation start -->
<nav>
    <img src="img/logo.svg" class="logo" alt="">
    <div class="navigation">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="course-inner.html">Courses</a></li>
            <li><a href="login.html" class="active">Login</a></li>

        </ul>
    </div>
</nav>
<!-- navigation end-->

<div class="form-container">
    <h2>Signup</h2>
    <form id="loginForm" class="form">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <span id="usernameError" class="error"></span>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="passwordError" class="error"></span>
        </div>

        <div>
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword"  name="confirmPassword">
            <span id="confirmPasswordError" class="error"></span>
            </div>


        <div>
            <input type="submit" class="active" value="Sign up">
            <div class="container-fluid login">
                <div class="row d-flex">
                    <div class="col-md-8 mt-2">
                        <a href="login.html" id="log" style="margin-bottom: 50px;" class="text-decoration-none"> Login</a>
                    </div>
                    <div class="col-md-4 mt-2">
                        <a href="forgetpass.html" id="log" style="margin-bottom: 50px;" class="text-decoration-none text-end"> Forget</a>
                    </div> 
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#loginForm').submit(function(event) {
            event.preventDefault();
            validateForm();
        });

        function validateForm() {
            const username = $('#username');
            const password = $('#password');
            const confirmPassword=$('#confirmPassword');


            const usernameError = $('#usernameError');
            const passwordError = $('#passwordError');
            const confirmPasswordError=$('#confirmPasswordError');

            usernameError.text('');
            passwordError.text('');
            confirmPasswordError.text('')
            let isValid = true;
            if (username.val().trim() === "") {
                usernameError.text('Username is required');
                isValid = false;
            }
            if (password.val().trim() === "") {
                passwordError.text('Password is required');
                isValid = false;
            }
            if(confirmPassword.val().trim()===""){
                confirmPasswordError.text('ConfirmPassword is required');
                isValid = false;
            }
        }
    });
</script>

</body>
</html>
