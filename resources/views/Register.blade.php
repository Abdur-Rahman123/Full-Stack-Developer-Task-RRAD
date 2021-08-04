<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/register.css')}}" rel="stylesheet" />
    <title>Register</title>
</head>
<body>
    
    <form  action="{{url('/storeuser')}}" action="POST"> 
        @csrf
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          
          
          <label for="psw-repeat"><b>Name</b></label>
          <input type="text" placeholder="Enter Name" name="name" id="name" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
          
          <hr>
          <button type="submit" class="registerbtn">Register</button>
        </div>
      </form> 
</body>
</html>