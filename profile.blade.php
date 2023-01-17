<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    form{
        display: inline-block;
        font-size: 12px;
        border-color: blue;
        background-color: white;
        border-radius: 10px;
        margin-left: 200px;
    }

    body{
      text-align: center;
      margin-top: 15%;
      margin-left: 30%;
      margin-right: 30%;
      background-color: #037EF3;

    }
    h4{
      font-family: "Lato",sans-serif;
      margin-top: 5%;

    }
    a{
      font-family: sans-serif;
      font-size: 14px;
      margin-left: 30px;
      margin-top: 10px;
    }

    div{
      width:800px;
      height:100px;
    }
    input[type=text]{
      width: 500px;
      margin-left: 120px;
      margin-top: 70px;

    }

    input[type=email]{
      width: 500px;
      margin-left: 120px;


    }
    input[type=submit]{
      background-color:green;

    }
    span{
      font-size: 14px;
      font-style: italic;
    }


    </style>
</head>

<body>

<form action="{{route('profileUpdate')}}" method="POST">
@csrf
<h4> <i> <b style="color:#037EF3;font-size:30px">Update Profile</i></b> <h4>
 <div class="form-group">
 <input type="text" class="form-control" placeholder="Your name" name="name" Value="{{old('name')}}">
  <span class='text-danger'>@error('name') {{$message}} @enderror</span>
  </div>
  <div class="form-group">
  <input type="email" class="form-control" placeholder="Email" name="email" Value="{{old('email')}}">
  <span class='text-danger'>@error("password") {{$message}} @enderror</span>
  </div>

  <button class="btn btn-primary" type="submit">Update Profile</button>
                   </form>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
