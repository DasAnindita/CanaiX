<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <style>
    body {
      font-family: 'Lato', sans-serif;
    }
    span{
      margin-left: 95%;
       color: #037EF3;

     }
p{
  text-align: center;
  margin-top: 70px;
  margin-bottom: 90px;
  font-size: 60px;
  color: #037EF3;
  font-style: italic;
  font-style: bold;
}

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#037EF3;
  background-color: #037EF3;
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 5px;
  text-decoration: none;
  font-size: 36px;
  color: white;
  display: block;
  transition: 0.2s;
  text-align: center;
  margin-top: 100px;
  font-family: 'Lato', sans-serif;
}

.overlay a:hover, .overlay a:focus {
  color: black;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

    .clients {
      padding: 0px 0px;
      text-align: center;
  }

  .clients .col {
      display: flex;
      align-items: center;
      justify-content: center;

  }


  .clients img {
      width: 100%;
      in-height: 50px;
      transition: all 0.4s ease-in-out;
      display: inline-block;
      padding: 5px 0;
      border-radius: 10px;


  }

  .clients img:hover {
      -webkit-filter: none;
      filter: none;
      transform: scale(1.1);
  }



  h5{
    font-size: 40px;
    color: #037EF3;
    font-style: bold;
    text-align: center;
    padding-top: 30px;
  }
h3{
  text-align: center;
  font-family: 'Lato', sans-serif;
  padding-top: 30px;
  padding-left: 40px;
  padding-right:40px;
}
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}

.img1 {
  display: block;
  width: 20%;
  height: 10%;
  margin-left: 2%;
  padding-top: 20px;



}
.img2 {
  display: block;
  width: 20%;
  height: 10%;
  margin-left: 2%;
  padding-top: 20px;



}
.img3 {
  display: block;
  width: 20%;
  height: 10%;
  margin-left: 2%;
  padding-top: 20px;



}
.img4 {
  display: block;
  width: 20%;
  height: 10%;
  margin-left: 2%;
  padding-top: 20px;



}

.link1{
  display: block;
  height: auto;
  margin-left: 10%;
  background-color:#4C9F38;
  width:80%;
  padding-top: 20px;
}
.link2{
  display: block;
  height: auto;
  margin-left: 10%;
  padding-top: 20px;
  background-color:#A21942;
  width:80%;

}
.link3{
  display: block;
  height: auto;
  margin-left: 10%;
  padding-top: 20px;
  background-color:#BF8B2E;
  width:80%;
}

.link4{
  display: block;
  height: auto;
  margin-left: 10%;
  padding-top: 20px;
  background-color:#3F7E44;
  width:80%;
}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.container {
  padding: 5px;

}

input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;

}

input[type=checkbox] {
  margin-top: 16px;

}

input[type=submit] {
  background-color: #037EF3;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
h6{
  font-size: 30px;
  color: #037EF3;
  font-style: bold;
  text-align: center;
  padding-top: 30px;
}


</style>
</head>
<body>
  <h4>  <h4>

      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home2">Home</a>
        <a href="about">About</a>
        <a href="whatwedo">What we do</a>
        <a href="impact">Our Impact</a>
        <a href="testimony">What People Say</a>
        <a href="registrationto">Join</a>
      </div>
      </div>


      <span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776;</span>

      <script>
      function openNav() {
        document.getElementById("myNav").style.height = "100%";
      }

      function closeNav() {
        document.getElementById("myNav").style.height = "0%";
      }
      </script>
      <h5> <b>Our Impact </h5></b>
      <a href="https://docs.google.com/presentation/d/1L2Jv63GQmoj_wYyQeWdFeAKUKTDlsEZKx87JnZkPbXg/edit?usp=sharing"  class="link1"> <img src="E-Goal-03-1024x1024.png" class="img1" alt=""></a>
        <a href="https://docs.google.com/presentation/d/1w7s7inj15V-pzPaAA1_uWnH9BJ215qJ9-gAAfcGY6nw/edit?usp=share_link" class="link2"> <img src="E-Goal-08-1024x1024.png" class="img2" alt=""></a>
          <a href="https://docs.google.com/presentation/d/1Vhtn0X7MmV5YewN3Pqzt2oSTjIkUpi2gjD3S9AXd2fM/edit?usp=share_link" class="link3"> <img src="E-Goal-12-1024x1024.png" class="img3" alt=""></a>
            <a href="https://docs.google.com/presentation/d/1ouk1_x6JmnBhjJswutS4hsZUNEvGZBZnNUagTWh8l30/edit?usp=share_link" class="link4"> <img src="E-Goal-13-1024x1024.png" class="img4" alt=""></a>
              <form method="post" action="{{url('store')}}">

                <p style="font-size:35px"> <b>Subscribe for Newsletter </p></b>
              @csrf
              <div class="container">
                <input type="text" placeholder="Name" name="name" required>
                <input type="text" placeholder="Email address" name="email" required>

              </div>

              <div class="container">
                <input type="submit" value="Subscribe">
              </div>
            </form>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</html>
