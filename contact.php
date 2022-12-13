<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Contact</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
  <!--header section start -->
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="index.html"><img src="images/profits.png"style="width:60px;height:60px;"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Үндсэн цэс</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Сэдэв</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="team.html">Манай баг</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Бидэнд холбогдох</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <!--header section end -->
    <!-- contact section start -->
    <div class="contact_section "style="margin-top: 1vw;">
      <div class="container-fluid">
        <h1 class="what_taital">Бидэнд холбогдох</h1>
        <p class="amet_text">Энэхүү формыг бөглөж өгснөөр бид танд холбогдох болно</p>
        <div class="contact_section2">
          <div class="row">
          <div class="col-md-6 padding_left_0">
              <div class="mail_section">
                <form id="contactForm">
                  <input type="text" class="mail_text_1" placeholder="Овог нэр " name="name">
                  <input type="number" class="mail_text_1" placeholder="Утасны дугаар" name="phone">
                  <input type="text" class="mail_text_1" placeholder="И-мэйл" name="email">
                  <textarea class="massage_text" type="text" placeholder="Танд хүсэлт" rows="5" id="comment" name="message"></textarea>
                  <div class="send_bt"><a href="#" id="submit">илгээх</div>
              </form>
              </div>

            </div>
            <div class="col-md-6 padding_0">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(".send_bt #submit").click(function () {
        var data = $('#contactForm').serializeArray();
        $.post("connect.php", data, function(result){
          // $("span").html(result);
          alert(result);
        });
      });
    </script>
    <!-- contact section end -->
    <!--footer section start -->
    <div class="footer_section  "style="margin-top:0.3vw;">
    
       
          <div class="copyright_text">Copyright 2022  <a href="https://html.design"></a></div>
      
        <!-- copyright section end -->

    </div>
    <!--footer section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
</body>
</html>