
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
    <h1>Dashboard</h1>
    <a href="{{route('/')}}">back to main page</a>
    <br> <br>
    <form action="welcome" enctype="post">
        Name: <input type="text" name="name" placeholder="username"><br><br>
        Email: <input type="text" name="email" placeholder="email@gmail.com"><br><br>
        Password: <input type="text" name="password" placeholder="password"><br><br>
        <input type="submit">
    </form>
    </div>
    
</body>
</html>