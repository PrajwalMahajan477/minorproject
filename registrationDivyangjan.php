<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RSP - Rastriya Seva Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <style>
        marquee{
            color: #DC472E;
        }
        .blink {
                    animation: blinker 1.5s linear infinite;
                    color: red;
                    font-family: sans-serif;
                }
                @keyframes blinker {
                    50% {
                        opacity: 0;
                    }
                }


                /* registration form  */
                
      div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      margin-left: 20%;
      margin-right: 20%;
      
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #FFCC00 !important; 
      }
      .banner {
      position: relative;
      height: 150px;
      /* background-image: url("\img\amit-shah-ji.jpeg");   */
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      /* background-color: rgba(234, 15, 15, 0.862);  */
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #FFCC00 !important;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #FFCC00 !important;
      color: #FFCC00 !important;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #FFCC00 !important;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
                /* registration form end  */
        </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Success Stories</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Admin</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Photo Gallery</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Video Gallery</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Media Gallery</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Press Release</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Contact Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="#">Schemes for Persons with Disabilities</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-google-plus-g"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-4">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-6 text-uppercase text-primary">Rastriya<span class="text-secondary font-weight-normal"> Seva Portal</span></h1>
                </a>
            </div>
             <div class="col-lg-8 text-center text-lg-right"> 
                <marquee>
           <p><b>
            Kiran Mental Health Rehabilitation Helpline - 24x7 Toll-free Number 1800 599 0019
           </b>
        </p> 
          </marquee>
             </div> 
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Rastriya<span class="text-white font-weight-normal">Seva Portal</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="#" class="nav-item nav-link">About Us </a>
                    <a href="#" class="nav-item nav-link">Login</a>
                    <a href="camping.html" class="nav-item nav-link">Camping</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Registration </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Registration as a Divyangjan</a>
                            <a href="#" class="dropdown-item">Registration as a TRUST/Hospital</a>
                            <a href="#" class="dropdown-item">How to do Registration </a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    
                    <a href="#" class="nav-item nav-link">Circulars</a>
                    <a href="#" class="nav-item nav-link">Donation</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
<!-- ------------------- registration form star ----------- -->
    
<div class="testbox">
  <form action="server/register_user.php" method="post">
    <div class="banner">
        <img src="/img/amit-shah-ji.jpg" height="100%" width="50%">
      <!-- <h1>Registration Form for Divyang</h1> -->
    </div>
    <div class="colums">
      <div class="item">
        <label for="fname"> First Name<span>*</span></label>
        <input id="fname" type="text" name="fname" required/>
      </div>
      <div class="item">
        <label for="lname"> Last Name<span>*</span></label>
        <input id="lname" type="text" name="lname" required/>
      </div>
      <div class="item">
        <label for="fname"> Father/Husband<span>*</span></label>
        <input id="fatherhusband" type="text" name="father_name" required/>
      </div>
      <div class="item">
        <label for="fname"> Mother/Wife<span>*</span></label>
        <input id="motherwife" type="text" name="mother_name" required/>
      </div>
      <!-- <div class="item">
        <label for="phone">Phone Number 1<span>*</span></label>
        <input id="phone" type="tel"   name="phone1" required/>
      </div>
      <div class="item">
        <label for="phone">Relative Phone Number 2<span>*</span></label>
        <input id="phone2" type="tel"   name="phone2" required/>
      </div>
      <div class="item">
        <label for="phone">Aadhar Number<span>*</span></label>
        <input id="aadhar" type="tel"   name="aadhar" required/>
      </div>
      <div class="item">
        <label for="eaddress">Email Address<span>*</span></label>
        <input id="eaddress" type="text"   name="eaddress" required/>
      </div>
      <div class="item">
        <label for="address1">Address 1<span>*</span></label>
        <input id="address1" type="text"   name="address1" required/>
      </div>
      <div class="item">
        <label for="address2">Address 2<span>*</span></label>
        <input id="address2" type="text"   name="address2" required/>
      </div>
      <div class="item">
        <label for="state">State<span>*</span></label>
        <input id="state" type="text"   name="state" required/>
      </div>
      <div class="item">
        <label for="zip">Zip/Postal Code<span>*</span></label>
        <input id="zip" type="text" name="zip" required/>
      </div>
      <div class="item">
        <label for="city">City<span>*</span></label>
        <input id="city" type="text"   name="city" required/>
      </div>
      
      <div class="item">
        <label for="phone">Current Education States<span>*</span></label>
        <input id="education" type="text" name="education" required/>
      </div>

      <div>
      <label for="choose"> Choose which Types of Disability You have:- </label>
      <select name="choose" id="choose">
        <option value="volvo">Mobility/Physical</option>
        <option value="saab">Spinal Cord (SCI)</option>
        <option value="opel">Head Injuries (TBI)</option>
        <option value="audi">Vision</option>
        <option value="audi">Hearing</option>
        <option value="audi">Cognitive/Learning</option>
        <option value="audi">Psychological</option>
        <option value="audi">Invisible</option>
        
    </select>
    </div>
   

    </div>
    <div class="question">
      <label>Cast</label>
      <div class="question-answer">
        <div>
          <input type="radio" value="none" id="radio_1" name="type"/>
          <label for="radio_1" class="radio"><span>General</span></label>

          <input  type="radio" value="none" id="radio_2" name="type"/>
          <label for="radio_2" class="radio"><span>OBC</span></label>

          <input  type="radio" value="none" id="radio_3" name="type"/>
          <label for="radio_3" class="radio"><span>ST/SC</span></label>
          
          <input  type="radio" value="none" id="radio_4" name="type"/>
          <label for="radio_4" class="radio"><span>other</span></label>

        </div>
        <!-- <div>
          <input  type="radio" value="none" id="radio_2" name="type"/>
          <label for="radio_2" class="radio"><span>OBC</span></label>
        </div>
        <div>
          <input  type="radio" value="none" id="radio_3" name="type"/>
          <label for="radio_3" class="radio"><span>ST/SC</span></label>
        </div>
        <div>
            <input  type="radio" value="none" id="radio_4" name="type"/>
            <label for="radio_4" class="radio"><span>other</span></label>
          </div> -->
      </div>
    </div>

    <div class="question">
      <label>        <h2>Terms and Conditions</h2>
      </label>
      <div class="question-answer">
        <div>
          <input type="radio" value="none" id="radio_5" name="Condition1"/>
          <label for="radio_5" class="radio"><span><label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, sint?</label></span></label>
        </div>
      </div>
    </div>
    <div class="question">
        <div class="question-answer">
          <div>
            <input type="radio" value="none" id="radio_6" name="Condition2"/>
            <label for="radio_6" class="radio"><span>
                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, sint?</label></span></label>
          </div>
        </div>
      </div> -->

     <div class="btn-block">
      <button type="submit" href="/">Submit</button>
    </div>
  </form>
</div>

                    <!--  registration form end -------------- -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Acropolis, INDORE, INDIA</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
                <!-- <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                </div> -->
                <!-- <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                </div> -->
                <div class="">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <!-- <a href="" class="btn btn-sm btn-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Foods</a> -->
                    <a href="" class="btn btn-sm btn-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Travel</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Lifestyle</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Foods</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Flickr Photos</h5>
                <div class="row">
                    <!-- <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-3.jpg" alt=""></a>
                    </div> -->
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">Rastriya Seva Portal</a>. All Rights Reserved. 
		
		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		<!-- Design by <a href="https://htmlcodex.com">HTML Codex</a></p> -->
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>