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
  width:600px;
}
input[type=text]{
  width: 500px;
  margin-left: 50px;


}
input[type=password]{
  width: 500px;
  margin-left: 50px;


}
input[type=email]{
  width: 500px;
  margin-left: 50px;


}
input[type=submit]:hover{
  background-color:green;


}
span{
  font-size: 14px;
  font-style: italic;
}


</style>
    </head>
  </head>
  <body>
    <div class='container'>
      <div class='row'>
          <form action="{{route('registeruser')}}" method='POST'>
           <br> <br>
            <h4> <i>Hi there,Lets <b style="color:#037EF3;">Join in</i></b> <h4>
              @if(Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              @if(Session::has('fail'))
              <div class="alert alert-danger">{{Session::get('failed')}}</div>
              @endif
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your name" name="name" Value="{{old('name')}}">
                <span class='text-danger'>@error('name') {{$message}} @enderror</span>

              </div>
<br>
              <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="password" Value="{{old('password')}}">

                  <span class='text-danger'>@error("password") {{$message}} @enderror</span>
              </div>
<br>
      <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" Value="{{old('email')}}">

          <span class='text-danger'>@error("email") {{$message}} @enderror</span>
      </div>
<br>

      <div class="form-group">
          <button style="cursor:pointer" type="submit" class="btn btn-block btn-primary">Register</button>
      </div>
       <a href="login"> Already registered? Login. </a>
  </form>



    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</html>
