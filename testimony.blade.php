<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Testimonials</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-size: 16px;
  font-weight: 300;
  line-height: 23px;
  font-family: "Poppins", sans-serif;
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

ul {
  list-style-type: none;
}

a, a:hover {
  text-decoration: none;
}

body {
  font-family: "Montserrat", sans-serif;
}
body .testimonial {
  padding: 100px 0;
}
body .testimonial .row .tabs {
  all: unset;
  margin-right: 50px;
  display: flex;
  flex-direction: column;
}
body .testimonial .row .tabs li {
  all: unset;
  display: block;
  position: relative;
}

body .testimonial .row .tabs li:nth-child(1) {
  align-self: flex-end;
}
body .testimonial .row .tabs li:nth-child(1)::before {
  left: 64%;
  bottom: -50px;
}
body .testimonial .row .tabs li:nth-child(1)::after {
  left: 97%;
  bottom: -81px;
}
body .testimonial .row .tabs li:nth-child(1) figure img {
  margin-left: auto;
}
body .testimonial .row .tabs li:nth-child(2) {
  align-self: flex-start;
}
body .testimonial .row .tabs li:nth-child(2)::before {
  right: -65px;
  top: 50%;
}
body .testimonial .row .tabs li:nth-child(2)::after {
  bottom: 101px;
  border-radius: 50%;
  right: -120px;
}
body .testimonial .row .tabs li:nth-child(2) figure img {
  margin-right: auto;
  max-width: 300px;
  width: 100%;
  margin-top: -50px;
}
body .testimonial .row .tabs li:nth-child(3) {
  align-self: flex-end;
}
body .testimonial .row .tabs li:nth-child(3)::before {
  right: -10px;
  top: -66%;
}
body .testimonial .row .tabs li:nth-child(3)::after {
  top: -130px;
  border-radius: 50%;
  right: -46px;
}
body .testimonial .row .tabs li:nth-child(3) figure img {
  margin-left: auto;
  margin-top: -50px;
}
body .testimonial .row .tabs li:nth-child(3):focus {
  border: 10px solid red;
}
body .testimonial .row .tabs li figure {
  position: relative;
}
body .testimonial .row .tabs li figure img {
  display: block;
}
body .testimonial .row .tabs li figure::after {
  content: "";
  position: absolute;
  top: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  border: 4px solid #8dc7f7;
  border-radius: 50%;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
body .testimonial .row .tabs li figure:hover::after {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
body .testimonial .row .tabs.carousel-indicators li.active figure::after {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
body .testimonial .row .carousel > h3 {
  font-size: 20px;
  line-height: 1.45;
  color: rgba(0, 0, 0, 0.5);
  font-weight: 600;
  margin-bottom: 0;
}
body .testimonial .row .carousel h1 {
  font-size: 40px;
  line-height: 1.225;
  margin-top: 23px;
  font-weight: 700;
  margin-bottom: 0;
}
body .testimonial .row .carousel .carousel-indicators {
  all: unset;
  padding-top: 43px;
  display: flex;
  list-style: none;
}
body .testimonial .row .carousel .carousel-indicators li {
  background: #000;
  background-clip: padding-box;
  height: 2px;
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper {
  margin-top: 42px;
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper p {
  font-size: 18px;
  line-height: 1.72222;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.7);
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper h3 {
  color: #000;
  font-weight: 700;
  margin-top: 37px;
  font-size: 20px;
  line-height: 1.45;
  text-transform: uppercase;
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


span{
  margin-left: 95%;
  color: #037EF3;
  padding: 10px;

 }
}
form {

  font-family: 'Lato', sans-serif;
}

.container {
  padding: 20px;

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

</style>
</head>

<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  @csrf
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

    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <ol class="carousel-indicators tabs">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
                        <h3>WHAT OUR VOLUNTEERS SAY</h3>
                        <h1>TESTIMONIALS</h1>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="quote-wrapper">
                                    <p>"It's great to know that all the funds we help to raise are used locally. We are privileged to see the pleasure, help and support that this gives directly to so many."</p>
                                    <h3>Anne Sue</h3>
                                    <h5>AISEC</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p> "I can honestly say that I get so much out of volunteering for the group. I love helping people and feel I was born to care. It is very satisfying to know that you are helping people to cope with their condition.
                                    I have made many friends and I am not just sat at home. We are up and out all over and I love organising things for the group.</p>
                                    <h3>Julie Lee</h3>
                                    <h5>Student</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>"My experience of working alongside everyone at the office has been absolutely amazing. Everyone has been consistently welcoming, and always tried to include me in almost all activities. I can honestly say that I had not expected such prolonged friendliness and hospitality."</p>
                                    <h3>ali b abu</h3>
                                    <h5>Student</h5>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form method="post" action="{{url('testimonial')}}">
      @csrf
      <p style="font-size:35px"> <b>Share Your experience</p></b>
      <div class="container" style="background-color:white">
        <input type="text" placeholder="Name" name="name" required>
        <input type="text" placeholder="Share here" name="Testimony" required>
      </div>

      <div class="container">
        <input type="submit" value="Sent">
      </div>
    </form>
</body>
</html>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script  src="./script.js"></script>
</body>
</html>
