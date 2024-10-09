<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <style>
nav
{
	width: 100%;
	background-color: #fff;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 1vw 8vw;
	box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.15);
	z-index: 1;
}

nav .logo
{
	width: 150px;
	cursor: pointer;
}

nav .navigation
{
	display: flex;
}

#menu-btn
{
	width: 30px;
	height: 30px;
	display: none;
}

#menu-close
{
	display: none;
}

nav .navigation ul
{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

nav .navigation ul li
{
	list-style: none;
	margin-left: 30px;
}

nav .navigation ul li a
{
	text-decoration: none;
	color: rgb(21, 21, 100);
	font-size: 16px;
	font-weight: 500;
	transition: 0.3s ease;
}

nav .navigation ul li a.active,
nav .navigation ul li a:hover
{
	color: #FDC93B;

}        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 15% 0px 0px 35%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    
<?php include 'Localnavbar.php' ?>
    <div class="container">
        <h1>Registration Details</h1>
        <form action="config.php" method="post">
            <label for="fullname">Fullname:</label>
            <input type="text" name="fullname" id="fullname">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="Submit" name="submit">
            <br>
            <br>
            <a href="login1.php">Back to Login</a>

        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('form').submit(function(event) {
                var fullname = $('input[name="fullname"]').val();
                var email = $('input[name="email"]').val();
                var password = $('input[name="password"]').val();
                $(".error").remove();
                if (fullname.length < 3) {
                    $('input[name="fullname"]').after('<span class="error">This field is required</span>');
                    event.preventDefault();
                }
                if (email.length < 3) {
                    $('input[name="email"]').after('<span class="error">This field is required</span>');
                    event.preventDefault();
                }
                if (password.length < 3) {
                    $('input[name="password"]').after('<span class="error">This field is required</span>');
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>