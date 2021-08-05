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
  <form method="post" enctype="multipart/form-data" action="{{route('store')}}">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <fieldset>
    <table class="center">
        <tr>
            <td>Name</td>
            <td><input type="text" name="iname"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="iemail"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="ipassword"></td>
    </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Register"></td>
        </tr>
    </table>
    </fieldset>
</form>
</body>
</html>