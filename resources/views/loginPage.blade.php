<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gli Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

   <div class="container">
     <form class="left-side" action="">
        <h3>Welcome!</h3>
        <p> <span class="login-sub">Login</span> to your account</p>
        <div class="input-field">
            <label for="email">Email</label> <br>
            <input type="email" id="email" name="email" required>

         </div>
          <div class="input-field">
            <label for="password">Password</label><br>
            <input type="password" id="email" name="password" required>

         </div>

     </form>
     <div class="right-side">
         <img src="{{ asset('img/gli_logo.jpg') }}" alt="logo">
    
    
    
   </div>



</body>
</html>