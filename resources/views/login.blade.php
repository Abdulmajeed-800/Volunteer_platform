<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="{{ asset('resources\css\style_login.css') }}" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

  <style>
    @keyframes fadeIn {
    0%{
    opacity: 0;
    transform: translateY(-10px);
    }
    100%{
    opacity: 1;
transform: translateY(0);
    }
}
body {
    background-color: #F7F7F7;
    font-family: Arial, sans-serif;
}
.login-container {
    width: 300px;
    margin: 150px auto;
    padding: 20px;
    background-color: #FFFFFF;
    border: 1px solid #DDDDDD;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.5s ease-out;
}
h2 {
    text-align: center;
    margin-bottom: 20px;
color:   #CCAF50;
}
form {
    display: flex;
    flex-direction: column;
}
input[type="text"],
input[type="password"] {
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #CCCCCC;
    border-radius: 4px;
    width: 240px;
}
button {
    padding: 10px;
    background-color: #CCAF50;
    color: #FFFFFF;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3 ease;
align-self: center;
width: 262px;
}
a{
color: #CCAF50;
}
.text-center{
padding: 10px;
margin-bottom: 12px;
color: #CCAF50;
text-align: center;
}
  </style>

</head>
<body>
  
  <div class="login-container" id="app">
    <h2>Login</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first('message') }}
        </div>
    @endif

    <form method="post" action="login" enctype="multipart/form-data" >
        @csrf      
        <!--!-input username-->  <section>
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
        </svg>
            <input type="text" name="email" placeholder="email" required>
          </section>
  <!--!-input password-->     <section> 
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>              <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                          <input type="password" name="password" placeholder="Password" required>
                        </section>
                                                <button type="submit" name="submit">Login</button>
          <!--!-checkbox and updet password--> 
    </form>
    <section class="text-center"><h4>Remember me <input type="checkbox" name="Remember" style="cursor: pointer"></h4>
        <h4><a href="updat_password.php" name="Forgot">Forgot your password</a></h4>
        </section>
  </div>
</body>
</html>