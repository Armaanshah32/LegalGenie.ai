<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SIMPLILEGAL</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ url_for('static', filename='css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ url_for('static', filename='images/fevicon.png') }}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ url_for('static', filename='css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

  </head>
   <body>
      <div class="header_section">
         <div class="container-fluid">
             <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                 <a class="navbar-brand" href="{{ url_for('index') }}" style="color: white;">SIMPLILEGAL</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                       <a class="nav-link" href="{{ url_for('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ url_for('document') }}">Create</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ url_for('new') }}">Templates</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ url_for('help') }}">Expert</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact Us</a>
                     </li>
                 </ul>
                 </div>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">

                     </ul>
                     <form class="form-inline my-2 my-lg-0">
                         <div class="login_bt">
                             <ul>
                                 <li><a href="#"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Logged In</a></li>
                             </ul>
                         </div>
                     </form>

                 </div>
             </nav>
         </div>
     </div>
     
     
         <!-- banner section start --> 
         <div class="banner_section layout_padding b">
            <div class="container-fluid">
                <div id="banner_slider" class="carousel slide" data-ride="carousel">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_taital_main">
                                <h1 class="banner_taital">AN AI-POWERED LEGAL DOCUMENTATION ASSISTANT</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner_img"><img src="{{ url_for('static', filename='images/home.png') }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- banner section end -->

      <!-- header section end -->
      <!-- box section start -->
      <div class="container">
         <div class="box_section">
             <div class="online_box">
                 <div class="online_box_left">
                     <div class="online_box_main">
                         <div class="box_left">
                             <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>
                         </div>
                         <div class="box_right" >
                            <a href="{{ url_for('document') }}" >
                             <p class="book_text">Create Legal Document</p>
                             <h4 class="appoinment_text">With Our Powerful AI</h4>
                            </a>
                         </div>
                     </div>
                 </div>
                 <div class="online_box_left">
                     <div class="online_box_main">
                         <div class="box_left">
                             <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>
                         </div>
                         <div class="box_right">
                            <a href="{{ url_for('new') }}">
                             <p class="book_text">Use A Template</p>
                             <h4 class="appoinment_text">Our Preloaded Templates</h4>
                            </a>
                         </div>
                     </div>
                 </div>
                 <div class="online_box_left">
                     <div class="online_box_main">
                         <div class="box_left">
                             <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>
                         </div>
                         <div class="box_right">
                            <a href="{{ url_for('help') }}">
                             <p class="book_text">Connect</p>
                             <h4 class="appoinment_text">With A Legal Professional</h4>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     
      <!-- box section end -->
      <!-- services section start -->
      <div class="services_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="studies_taital">SERVICE OFFERINGS</h1>
                </div>
            </div>
        </div>
        <div class="services_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="service_box">
                                        <div class="house_icon">
                                            <img src="{{ url_for('static', filename='images/icon-1.png') }}" class="image_1">
                                            <img src="{{ url_for('static', filename='images/icon-4.png') }}" class="image_2">
                                        </div>
                                        <h3 class="corporate_text">Corporate Law</h3>
                                        <p class="chunks_text">Corporate law regulates the structure and operation of businesses in accordance with legal principles</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service_box">
                                        <div class="house_icon">
                                            <img src="{{ url_for('static', filename='images/icon-5.png') }}" class="image_1">
                                            <img src="{{ url_for('static', filename='images/icon-5.png') }}" class="image_2">
                                        </div>
                                        <h3 class="corporate_text">Employments Law</h3>
                                        <p class="chunks_text">will add later</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service_box">
                                        <div class="house_icon">
                                            <img src="{{ url_for('static', filename='images/icon-3.png') }}" class="image_1">
                                            <img src="{{ url_for('static', filename='images/icon-6.png') }}" class="image_2">
                                        </div>
                                        <h3 class="corporate_text">Residential Law</h3>
                                        <p class="chunks_text">will add later</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      
      <!-- services section end -->
      
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="about_img"><img src="{{ url_for('static', filename='images/about-img.png') }}"></div>
                 </div>
                 <div class="col-md-6">
                     <div class="about_text_main">
                         <h1 class="about_taital">About Us</h1>
                         <p class="about_text">TEXT WILL COME HERE</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     
      <!-- about section end -->
      <!-- testimonial section start -->
      <!-- <div class="customer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="customer_taital">SATISFIED CLIENT Says</h1>
               </div>
            </div>
         </div>
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="customer_section_2">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box_main">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <div class="customer_img"><img src="images/customer-img.png"></div>
                                    </div>
                                    <div class="customer_right">
                                       <h3 class="customer_name">Giolio Mark <span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                       <p class="enim_text">anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internetanything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="customer_section_2">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box_main">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <div class="customer_img"><img src="images/customer-img.png"></div>
                                    </div>
                                    <div class="customer_right">
                                       <h3 class="customer_name">DenoMark <span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                       <p class="enim_text">anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internetanything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="customer_section_2">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box_main">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <div class="customer_img"><img src="images/customer-img.png"></div>
                                    </div>
                                    <div class="customer_right">
                                       <h3 class="customer_name">DenoMark <span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                       <p class="enim_text">anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internetanything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
            </a>
         </div>
      </div> -->
      <!-- testimonial section end -->
      
      
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="location_text">
                         <ul>
                             <li>
                                 <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div>
                         <a href="{{ url_for('index') }}">
                             <h1 style="color: white;">SIMPLILEGAL</h1>
                         </a>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="social_icon">
                         <ul>
                             <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     
      <!-- footer section end -->
     <!-- Javascript files-->
     <script src="{{ url_for('static', filename='js/jquery.min.js') }}"></script>
     <script src="{{ url_for('static', filename='js/popper.min.js') }}"></script>
     <script src="{{ url_for('static', filename='js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ url_for('static', filename='js/jquery-3.0.0.min.js') }}"></script>
     <script src="{{ url_for('static', filename='js/plugin.js') }}"></script>
     <!-- sidebar -->
     <script src="{{ url_for('static', filename='js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
     <script src="{{ url_for('static', filename='js/custom.js') }}"></script>
     
      <!-- javascript --> 
   </body>
</html>