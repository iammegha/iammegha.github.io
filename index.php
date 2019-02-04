<?php
extract($_POST);
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["message"]=="")||$_POST["phone"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$name = $_POST['name'];
$subject = "Mail from Website";
$message = $_POST['message'];
$headers = 'From:'.$name.' Email Id:'.$email .' Phone Number:'.$phone "\r\n"; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
$to = 'dhoundiyalnitin@gmail.com';
mail($to, $subject, $message, $headers); 

    exit();
}
}
}
?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.10, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.10, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="Best Bootstrap HTML5 Personal Website Template - Free Download">
  <title>Megha Dhingra- Freelance Model</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>

<!-- Google Analytics -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PFK425"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFK425');</script>
<!-- /Google Analytics -->


 <section class="menu cid-qyucyb0YBc" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://iammegha.github.io/">
                         <img src="assets/images/logo.png" alt="MD_LOGO" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="#testimonials3-2" aria-expanded="false">HOME</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="#content4-d" aria-expanded="false">WORK</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="#content4-m" aria-expanded="false">GALLERY</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="#content4-b" aria-expanded="false">ABOUT</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-secondary display-4" href="#form1-4">
                    
                    CONTACT ME</a></div>
        </div>
    </nav>
</section>

<section class="engine"></section><section class="testimonials3 cid-qyucOJY58V mbr-parallax-background" id="testimonials3-2">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(178, 204, 210);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="media-content px-3 align-self-center mbr-white py-2">
                <h1 class="mbr-text testimonial-text mbr-fonts-style display-7"></h1>
                <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-1">Megha D.</p>
                <p class="mbr-author-desc mbr-fonts-style display-7"><b style="color: #f1f1f1;">FREELANCE MODEL</b></p>
            </div>

            <div class="mbr-figure pl-lg-5" style="width: 130%;">
              <img src="../iammegha.github.io/images/meg1.png" alt="megha_dhingra" title="">
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-qyuzy9HYXi" id="content4-d">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">My Works</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features2 cid-qyufBFEj84" id="features2-4">

    

    
    
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/edho-pratama-149011-4062x2708.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5">
                            Free Fonts</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Duis consectetur neque orci. Praesent vitae consequat ante, vitae aliquam justo. Curabitur fermentum vel mauris a placerat.</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/angelo-pantazis-180828-2000x1333.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box ">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5">
                            Lettering</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Aenean vestibulum aliquam mauris non ullamcorper. Maecenas in ex eget tellus iaculis tempus. Sed commodo posuere placerat.&nbsp;<br> </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/alisha-hieb-249784-2000x1333.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5">
                            Creative Photography</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Curabitur ligula ex, sagittis vel turpis sed, cursus aliquam risus. Nunc dictum enim a ante maximus, in sagittis elit tincidunt. </p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-rgAXupSghM" id="content4-m">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">My Gallery</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-rgB3YxYUyR" id="gallery2-n">

    

    <div class="container">
        <div><!-- Filter --><div class="mbr-gallery-filter container gallery-filter-active"><ul buttons="0"><li class="mbr-gallery-filter-all"><a class="btn btn-md btn-secondary-outline active display-7" href="">All</a></li></ul></div><!-- Gallery --><div class="mbr-gallery-row"><div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery2-n" data-slide-to="0" data-toggle="modal"><img src="../iammegha.github.io/images/meg.png" alt="megha_dhingra" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Creative"><div href="#lb-gallery2-n" data-slide-to="1" data-toggle="modal"><img src="../iammegha.github.io/images/meg5.png" alt="megha_dhingra" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Animated"><div href="#lb-gallery2-n" data-slide-to="2" data-toggle="modal"><img src="../iammegha.github.io/images/meg2.png" alt="megha_dhingra" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-n" data-slide-to="3" data-toggle="modal"><img src="../iammegha.github.io/images/meg3.png" alt="megha_dhingra" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-n" data-slide-to="4" data-toggle="modal"><img src="../iammegha.github.io/images/meg4.png" alt="megha_dhingra" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery2-n" data-slide-to="5" data-toggle="modal"><img src="../iammegha.github.io/images/meg6.png" alt="megha_dhingra" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Animated"><div href="#lb-gallery2-n" data-slide-to="6" data-toggle="modal"><img src="../iammegha.github.io/images/meg7.png" alt="megha_dhingra" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery2-n" data-slide-to="7" data-toggle="modal"><img src="../iammegha.github.io/images/meg8.png" alt="megha_dhingra" title=""><span class="icon-focus"></span></div></div></div></div><div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-n"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner"><div class="carousel-item"><img src="../iammegha.github.io/images/meg.png" alt="megha_dhingra" title=""></div><div class="carousel-item active"><img src="../iammegha.github.io/images/meg5.png" alt="megha_dhingra" title=""></div><div class="carousel-item"><img src="../iammegha.github.io/images/meg2.png" alt="megha_dhingra" title=""></div><div class="carousel-item"><img src="../iammegha.github.io/images/meg3.png" alt="megha_dhingra" title=""></div><div class="carousel-item"><img src="../iammegha.github.io/images/meg4.png" alt="megha_dhingra" title=""></div><div class="carousel-item"><img src="../iammegha.github.io/images/meg6.png" alt="megha_dhingra" title=""></div><div class="carousel-item"><img src="../iammegha.github.io/images/meg7.png" alt="megha_dhingra" title=""></div><div class="carousel-item"><img src="../iammegha.github.io/images/meg8.png" alt="megha_dhingra" title=""></div></div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-n"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-n"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>

</section>

<section class="mbr-section info2 cid-qyv0BRlbE8" id="info2-g">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-secondary-outline display-4" href="#">
                    
                    SEND ME A NOTE</a></div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">
                    CONTACT ME</span></h2>
                
            </div>
        </div>
    </div>
</section>

<section class="counters2 counters cid-rgB4Jl2tAK" id="counters2-o">

    

    

    <div class="container pt-4 mt-2">
        <div class="media-container-row">
            <div class="media-block" style="width: 50%;">
                <h2 class="mbr-section-title pb-3 align-left mbr-fonts-style display-2">
                    Counters and media
                </h2>
                <h3 class="mbr-section-subtitle pb-5 align-left mbr-fonts-style display-5">
                    Responsive block with counters and media. 
                </h3>
                <div class="mbr-figure">
                    <img src="../iammegha.github.io/images/background4.png" alt="megha_dhingra">
                </div>
            </div>
            <div class="cards-block">
                <div class="cards-container">
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbri-mobirise mbr-iconfont pr-2"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">
                                    100
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Shoots
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbri-extension mbr-iconfont pr-2"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">
                                    200
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Trendy 
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who. Entreaties mr conviction dissimilar me astonished estimating cultivated. On no applauded exquisite my additions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbri-responsive mbr-iconfont pr-2"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">
                                    300
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Shoots
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                        Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbri-globe-2 mbr-iconfont pr-2"></span>
                                <h3 class="count py-3 mbr-fonts-style display-2">
                                    400
                                </h3>
                            </div>
                            <div class="card-texts">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Web fonts
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                        Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info3 cid-rgD5G0dUae mbr-parallax-background" id="info3-q">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-md-10">
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    FASHION LOOK
                </h2>
                <h3 class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Creating your beauty image.
                </h3>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-qyuiu1KBmN" id="content4-b">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    My Background</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content12 cid-qyuishpvB4" id="content12-a">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <li><strong>Smith College Theatre Courses 2012</strong>- Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who.</li>
                    <li><strong>Modern Poetry Course 2014&nbsp;</strong>- Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who.&nbsp;</li>
                    <li><strong>Interface Lab 2015</strong>&nbsp;- Breakfast procuring nay end happiness allowance assurance frankness. Met simplicity nor difficulty unreserved who.&nbsp;</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="clients cid-rgAV9V9qCV" id="clients-i">
      

    
        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
                        Worked With</h2>
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                        This is a temporary paragraph.</h3>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="carousel slide" data-ride="carousel" role="listbox">
            <div class="carousel-inner" data-visible="5">
                
                
                
                
                
            <div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/1.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/2.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/3.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/4.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div><div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/5.png" class="img-responsive clients-img">
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="carousel-controls">
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="mbr-section form1 cid-qyvf9K0GGo" id="form1-4" data-rv-view="791">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    CONTACT ME</h2>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
            
                    <form class="mbr-form" method="post" data-form-title="Mobirise Form"><input type="hidden" data-form-email="true" value="R46ImfT8lRYLhZq6vpVE63L0V35bOdmwHjgn18Tp/HdDujD3JfWe/8bm7YjE2vjZZ7JFQMRNRIinYQUh3aNa2qi1GshxArFhHAffNuiFsZiNLfMCF8KElmS7V7lbqBIL">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Name</label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-4">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4">Email</label>
                                    <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-4">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4">Phone</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" data-for="message">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4">Message</label>
                            <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-4"></textarea>
                        </div>
            
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black-outline display-4" style="margin-left: auto;margin-right: auto;">SEND</button></span>
                    </form>
                    <br/><br/>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/o">portfolio site templates</a></section><section class="cid-rh79idH31d" id="footer5-r">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="https://iammegha.github.io/">
                       <img src="assets/images/logo.png" alt="Megha Dhingra">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7">
                    <a href="#" class="text-black">ABOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">TERMS</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">CAREERS</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">CONTACT</a>
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 iammegha - All Rights Reserved
                    </p>
                </div>
                
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/meghaadhingra" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/iammeghadhingra/?hl=en" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/mbr-clients-slider/mbr-clients-slider.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>