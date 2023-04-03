
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppply Chain Management-Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    @include('layouts/navbar');
    <div class="logindiv">
        <h1>Login Form</h1>
       <br>
        @if(Session::has('error'))
            <span style="color:red" class="invalid-feedback" role="alert">
                    <strong >{{session('error') }}</strong>
                     </span>
          @endif
        <form action="{{ route('login') }} " method="POST" class="loginform">
            @csrf
            <div class="loginelement">
            <Label for="email">Enter Email :</Label><br>
            <input class="inputlogin" name="email" type="email">
           
            <br>
            </div>
            <div class="loginelement">
            <label for="password">Enter Password :</label><br>
            <input class="inputlogin" name="password" type="text">
            
            <br>
            <div>

            <input type="submit" class="submitlogin" value="Submit">
        </form>
    </div>
</body>
</html>