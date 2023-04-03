
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppply Chain Management-Register</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    @include('layouts/navbar');
    <div class="registerdiv">
        <h1>Register Form</h1>
       <br>
       @if(Session::has('error'))
            <span style="color:red" class="invalid-feedback" role="alert">
                    <strong >{{session('error') }}</strong>
                     </span>
          @endif

        <form method="POST" action="{{ route('register') }}" class="registerform">
                        @csrf

            <div class="registerelement">
            <label for="name">Enter Name :</label><br>
            <input class="inputregister" name="name" type="text">
           
            <br>
           

            
            <div class="registerelement">
            <label for="email">Enter Email :</label><br>
            <input class="inputregister" name="email" type="email">
            
            <br>
            

           
            <div class="registerelement">
            <label for="password">Enter Password :</label><br>
            <input class="inputregister" name="password" type="text">
           
            <br>
            

           
            <div class="registerelement">
            <label for="password-confirm">Confirm Password :</label><br>
            <input class="inputregister" type="password" name="password_confirmation" required autocomplete="new-password">
           
            <br>
           
            <div>

            <input type="submit" class="submitregister" value="Submit">
        </form>
    </div>
</body>
</html>