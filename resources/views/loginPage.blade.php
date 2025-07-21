<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gli Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

   <div class="container">
     <form class="left-side" action="">
        <h3>Welcome!</h3>
        <p> <span class="login-sub">Login</span> to your account</p>
        <div class="input-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

         </div>
          <div class="input-field">
            <label for="password">Password</label>
             <div class="password-wrapper">
    <input type="password" id="password" name="password" required>
    <i class="fa-solid fa-eye" id="togglePassword" style="cursor: pointer;"></i>
    
  </div>

         </div>
         <button>Login</button>

         <a class="forgot-password" href="">Forgot password?</a>
     </form>
     <div class="right-side">
         <img src="{{ asset('img/gli_logo.jpg') }}" alt="logo">
    
    
    
   </div>


<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('password');

  togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);

    // Toggle icon style (optional — changes to eye-slash)
    this.classList.toggle('fa-eye-slash');
  });
</script>
</body>
</html>