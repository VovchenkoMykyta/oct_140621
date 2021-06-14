<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
        }

        form {
            display: flex;
            flex-direction: column;
            text-align: center;
            max-width: 500px;
            line-height: 1.5;
            margin: 0 auto;
        }

        form label {
            text-align: left;
        }

        form label input.text {
            margin-left: 80px
        }

        form label input.pass {
            margin-left: 57px;
        }
    </style>
</head>
<body>
<div>
    <?php include_once 'views' . DIRECTORY_SEPARATOR . $this->page ?>
</div>
<form method="post">
    <label>Login:
        <input type="text" name="login" placeholder="Enter login" class="text">
    </label>
    <label>Email:
        <input type="text" name="email" placeholder="Enter email" class="text">
    </label>
    <label>Password:
        <input type="password" name="password" placeholder="Enter password" class="pass">
    </label>
    <label>Confirm password:
        <input type="password" name="password_confirm" placeholder="Enter password again">
    </label>
    <input type="submit" value="Add user">
</form>
</body>
</html>