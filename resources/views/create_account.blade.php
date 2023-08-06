<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup Page</title>
  <link href="style_signup.css" rel="stylesheet">
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
    width: 600px;
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
input[type="email"]{
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #CCCCCC;
    border-radius: 4px;
    width: 165px;
}
input[type="password"] {
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #CCCCCC;
    border-radius: 4px;
    width: 262px;
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
    <h2>signup</h2>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif
    
    <form method="post" action="insert_data" enctype="multipart/form-data" >
        @csrf

        <!--!-input username-->  <section>
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
        </svg>
            <input type="text" name="first_name" placeholder="First Name" required> 
            <input type="text" name="last_name" placeholder="Last Name" required>


          </section>
  <!--!-input password-->     <section> 
             <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M24 32c13.3 0 24 10.7 24 24V408c0 13.3 10.7 24 24 24H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H72c-39.8 0-72-32.2-72-72V56C0 42.7 10.7 32 24 32zM128 136c0-13.3 10.7-24 24-24l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24zm24 72H296c13.3 0 24 10.7 24 24s-10.7 24-24 24H152c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 96H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H152c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/>
            </svg>
              <input type="email" name="email" placeholder="Email"  required> 
              <input type="text" name="phone_number" placeholder="phone number" required>

              <input type="text" name="National_Identity" placeholder="National Identity" required>
              </section>
<section>
<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>              <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          
              <input type="password" name="password" placeholder="Password" required>
                          </section>

                          
              <button type="submit"></button>
          <!--!-checkbox and updet password--> <section class="text-center">
                                                <h4><a href="updat_password.php" name="Login">Login</a></h4>
                                                </section>
    </form>
  </div>
</body>
</html>