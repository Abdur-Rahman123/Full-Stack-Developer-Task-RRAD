<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link href="{{asset('css/index.css')}}" rel="stylesheet" />
    <title>Document</title>
    <style>
        body{
           background-color: #4055b2
        }
        #first{
            background-color: #18266a;
           
        }
        #second{
            background-color:#ffffff;
        }
        #signUp{
            padding: 10px 20px;
             font-size: 20px;
              border-radius: 10px;
        }
        input[type="checkbox"] {
            display: inline-block;
      }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5 ml-5 mr-5">
    <div class="row">
    <div class="col-5 pt-5" id="first">
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 50vh">
        
        <h1 class=" text-white">Don't have an account</h1><br><br>
        
    </div>
    <div class="text-center" style="top: 50%; position: absolute; left:40%">
        <button class="rounded-pill" id="signUp"><a id="signUp" href="{{url('register')}}"> Sign Up</button></a>
    </div>
       
    </div>
    <div class="col-7 pt-5" id="second">
        <h1 class=" ml-5 text-black">Login to Dashbord</h1>
        
        <div class="login mt-5">
           <form action="{{url('/checklogin')}}" method="POST">
            @csrf
                <div class="group ml-5" id="samecolor">
                    <label id="login">Login</label><br>
                  <input type="text" id="ekid" name="email" placeholder="example@gmail.com"><span class="highlight"></span><span class="bar"></span>
                  
                </div>
                <div class="group ml-5"  id="samecolor">
                    <label>Password</label><br>
                  <input type="password" name="password" id="ekid"><span class="highlight"> <span class="input-group-btn">
                    <button class="btn btn-default reveal" type="button"><i class="fa fa-fw fa-eye field-icon toggle-password"></i></button>
                  </span>  
               
                </div>
            
                <div class=" ml-5">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">Remember me</label><br>
                </div>
                
                <div class="row">
              <div class="col mt-5 mb-5 mr-5 ml-5">
                  <button class="rounded text-white" id="first" style="width: 20vh; height: 10vh;">Sign In</button>
              </div>
            </form>
              <div class="col mt-5 mb-5">
                <a href="#">Forget Password?</a> 
                
            </div>
            </div>
        
        </div>
    </div>
    </div>
    </div>
   






  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>