<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-image: url(http://s01.riotpixels.net/data/f1/ab/f1ab9aa5-e288-4b3f-ad3c-7b287fc5d602.jpg.480p.jpg/wallpaper.valorant.853x480.2020-10-09.78.jpg); 
            background-color: #000000; 
            background-size: cover;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.5); 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; 
            padding: 0; 
        }

        form {
            width: 360px;
            padding: 20px;
            border: 2px solid #BD3944; 
            border-radius: 10px;
            background-color: #FFFBF5;
            margin: 20px; 
        }

        input[type="text"], input[type="password"], input[type="submit"] {
            width: 97%;
            padding: 7px;
            margin: 5px 0;
            border: 1px solid #53212B; 
            background-color: #FFFBF5;
            color: #53212B; 
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #BD3944; 
            color: #FFFBF5; 
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #FD4556; 
        }

        a {
            color: #FD4556;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        .register-heading {
            
            color: darkred;
        }
    </style>
</head>
<body>
    <form action="handleForm.php" method="POST">
        <h1 class="register-heading">Please Register Here</h1>
        <div class="fields">
            <p><input type="text" placeholder="Username" name="username"></p>
            <p><input type="password" placeholder="Password" name="password"></p>
            <p><input type="submit" value="Register" name="regBtn"></p>
        </div>
    </form>
</body>
</html>
