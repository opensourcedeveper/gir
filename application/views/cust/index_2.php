<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- <link rel="stylesheet" href="./css/font-awesome.min.css"> -->
<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">-->
    
    <title>GI Research</title>
</head>
<body>
<!-- Main Navbar -->
<!--<section id="topNav">
  <nav class="navbar navbar-expand-lg navbar-light gi-nav">
    <div class="container">
      <a class="navbar-brand" href="index.html">
          <img src="assets/images/cust/img/logo.jpeg" alt="" class="navlogo" id="topNavLogo">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topMenus" aria-controls="topMenus" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="fa fa-bars"></i>
        </span>
      </button>
    
  <div class="collapse navbar-collapse" id="topMenus">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active "> <a class="nav-link mainmenua" href="<?php echo base_url('/cust') ?>">Home </a> </li>
          <li class="nav-item "><a class="nav-link mainmenua" href="<?php echo base_url('Cust/Controller_Report') ?>"> Reports </a></li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mainmenua" href="categories.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu catdrop" aria-labelledby="navbarDropdown">
            <div class="container topnavDropdown">
              <div class="row">
                <div class="col-md-4">
                
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link pt-1 pb-1 active" href="#">
                        <i class="fa fa-plane f23 pr-2"></i> Airospace and defence
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link pt-1 pb-1 active" href="#">
                          <i class="fa fa-automobile f23 pr-2"></i> Automotive & Transportation
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pt-1 pb-1 active" href="#">
                          <i class="fa fa-wrench f23 pr-2"></i> Construction & Manufacturing
                      </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pt-1 pb-1 active" href="#">
                        <i class="fa fa-male f23 pr-2"></i> Consumer Goods
                    </a>
                  </li>

                </ul>
                </div>
                
                <div class="col-md-4">
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link pt-1 pb-1 active" href="#">
                        <i class="fa fa-bolt f23 pr-2"></i>  Energy & Power
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link pt-1 pb-1 active" href="#">
                          <i class="fa fa-user f23 pr-2"></i>  Food & Beverages
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pt-1 pb-1 active" href="#">
                          <i class="fa fa-camera f23 pr-2"></i> ICT Media
                      </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pt-1 pb-1 active" href="#">
                        <i class="fa fa-wrench f23 pr-2"></i> Machinery & Equipment
                    </a>
                  </li>
                  
                </ul>
                </div>
                
                <div class="col-md-4">
                  <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link pt-1 pb-1 active" href="#">
                            <i class="fa fa-flask f23 pr-2"></i> Materials & Chemicals
                        </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link pt-1 pb-1 active" href="#">
                              <i class="fa fa-ambulance f23 pr-2"></i> Pharmaceuticals & Healthcare
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pt-1 pb-1 active" href="#">
                              <i class="fa fa-fax f23 pr-2"></i> Semiconductor & Electronics
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pt-1 pb-1 active" href="#">
                              <i class="fa fa-briefcase f23 pr-2"></i> Business Opportunities
                          </a>
                        </li>
                      
                    </ul>
                </div>
          
              </div>
            </div>
  
  
  
          </div>
        </li> 
      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mainmenua" href="#" id="mediaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Media
        </a>
        <div class="dropdown-menu mediadrop" aria-labelledby="mediaDropdown">
       
         
                <ul class="list-unstyled">
                  <li>
                    <a href="<?php echo base_url('Cust/Controller_Blog') ?>"><i class="fa fa-newspaper-o pr-2 pl-2 f24"></i> Blogs</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Cust/Controller_PressRelease') ?>"><i class="fa fa-newspaper-o pr-2 pl-2 f24"></i>Press Release</a>
                  </li>
                </ul>
                
            


        </div>
      </li> 
      <li class="nav-item"><a class="nav-link mainmenua" href="about.html"> About </a></li>
      <li class="nav-item"><a class="nav-link mainmenua" href="contact.html"> Contact </a></li>
    </ul>
    <form class="hidemax991 form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
        <i class="fa fa-search crlfff"></i>
      </button>
    </form>
   
  </div>
 
  </div>

  </nav>

</section>-->

<!-- End -->


<!-- Banners -->
  <header class="" id="giBanners">
    <div id="gicarouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#gicarouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#gicarouselExampleIndicators" data-slide-to="1"></li>
       
      </ol>
      <div class="carousel-inner" role="listbox">
        
        <div class="carousel-item active" style="background-image: url('assets/images/cust/img/banner2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">First Slide</h2>
            <p class="lead">This is a description for the first slide.</p>
          </div>
        </div>
        
        <div class="carousel-item" style="background-image: url('assets/images/cust/img/static-bg.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Second Slide</h2>
            <p class="lead">This is a description for the second slide.</p>
          </div>
        </div>
       
      
      </div>
      <a class="carousel-control-prev" href="#gicarouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#gicarouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
  </header>
<!-- End -->

<!-- Success Story  -->
<section class="success sectionWs">
    <div class="container">
        <div class="row pt-1 pb-3">
            <div class="col-md-6 pt-5 pb-5">
                <div>
                  <img src="assets/images/cust/img/success.png" alt="" class="w-100">
                </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="sc-info">
                <h2 class=" sec-head text-uppercase ls-1 prime-color">Journy from Dust To Mountain </h2>
                <p class="pt-2 pb-2 mt-3">Lorem ipsum dolor sit amet consectetur, Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis quis, doloremque atque blanditiis ad provident nesciunt voluptatem ea pariatur consequuntur odit neque sequi aperiam ullam fugit temporibus iure alias. Ipsum. adipisicing elit. Ipsa illum repudiandae laboriosam sapiente optio nam quis eveniet, deserunt dolor corrupti perspiciatis sed dignissimos nisi delectus doloremque consectetur molestiae, vitae sit culpa excepturi. Beatae sint consectetur velit eum culpa fugiat cum vero at, porro consequatur? Quasi commodi facilis vel officia vitae. Distinctio, iste? Magni exercitationem, nihil, cupiditate adipisci veniam quaerat mollitia molestias aspernatur vero fugit enim? Perferendis aliquid illo atque libero!</p>
              </div>
            </div>
          </div>
    </div>
</section>
<!-- End -->


<!-- Client -->
  <section id="client" class="pt-3 pb-3">
    <div class="container">
      <!-- <h2 class="sec-head font-weight-bold text-uppercase ls-1 prime-color pb-5 pt-3">Clients</h2> -->
      <div class="row">
        <div class="col-md-6 col-sm-12 bg-prime" >
          <div class="client-testimonials">
            <div class="row container-fluid">
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body p-0">
                          <div class="clientInfo">
                            <h3 class="text-center pt-4 pb-4 clrfff">What Our Clients Say !</h3>

                          </div>
                          <div class="testimonials pt-4 pb-4">
                              <div class="item">
                                <img src="assets/images/cust/img/man.png" alt="">
                                <p class="text-center clrfff f20 font-italic mt-3"><i class="fa fa-quote-left pr-2"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo adipisci ducimus soluta nisi nesciunt maxime autem? Illum, repudiandae saepe.<i class="fa fa-quote-right pl-2"></i> </p>
                              </div>
                              <div class="item">
                                <img src="assets/images/cust/img/avatar2.png" alt="">
                                <p class="text-center clrfff f20 font-italic mt-3"><i class="fa fa-quote-left pr-2"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo adipisci ducimus soluta nisi nesciunt maxime autem? Illum, repudiandae saepe.<i class="fa fa-quote-right pl-2"></i> </p>
                              </div>
                              <div class="item">
                                <img src="assets/images/cust/img/avatar3.png" alt="">
                                <p class="text-center clrfff f20 font-italic mt-3"><i class="fa fa-quote-left pr-2"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo adipisci ducimus soluta nisi nesciunt maxime autem? Illum, repudiandae saepe.<i class="fa fa-quote-right pl-2"></i> </p>
                              </div>
                              <div class="item">
                                <img src="assets/images/cust/img/avatar04.png" alt="">
                                <p class="text-center clrfff f20 font-italic mt-3"><i class="fa fa-quote-left pr-2"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo adipisci ducimus soluta nisi nesciunt maxime autem? Illum, repudiandae saepe.<i class="fa fa-quote-right pl-2"></i> </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 ">
          <div class="client-logos">
               <!-- <div class="card">
                      <div class="card-body">
                          <div class="clientInfo">
                            <h3 class="text-center pt-4 pb-4 prime-color">Our Clients</h3>

                          </div>
                          <div class="clients pt-4 pb-4">
                              <div class="item"> <img src="assets/images/cust/img/mastercard.png" alt="image" /> </div>
                              <div class="item"> <img src="assets/images/cust/img/paypal2.png" alt="image" /> </div>
                              <div class="item"> <img src="assets/images/cust/img/visa.png" alt="image" /> </div>
                              <div class="item"> <img src="assets/images/cust/img/american-express.png" alt="image" /> </div>
                              <div class="item"> <img src="assets/images/cust/img/mastercard.png" alt="image" /> </div>
                              <div class="item"> <img src="assets/images/cust/img/paypal2.png" alt="image" /> </div>
                              <div class="item"> <img src="assets/images/cust/img/visa.png" alt="image" /> </div>
                              <div class="item"> <img src="assets/images/cust/img/american-express.png" alt="image" /> </div>
                          </div>
                      </div>
                  </div> -->
                  <div class="clientInfo">
                    <h3 class="text-center pt-4 pb-4">Our Clients</h3>

                  </div>
            <div class="row container-fluid">
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client1.png" alt="">
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client2.png" alt="">
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client3.png" alt="">
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client4.png" alt="">
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client3.png" alt="">
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client1.png" alt="">
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client2.png" alt="">
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client4.png" alt="">
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6 text-center">
                <img src="assets/images/cust/img/client3.png" alt="">
              </div>
          </div>
          </div>
        </div>
     
      </div>
    </div>
  </section>
<!--  -->





<!-- What we do -->
<section class="mt-5 sectionWs">
     <div class="container">

        <div class="row pt-3 pb-3">
            <div class="col-md-4 col-sm-12 align-self-center p-0">
              <h2 class="font-weight-bold text-uppercase ls-1 prime-color pb-5 pt-3 f80">What we do</h2>
                    <div>
                      <ul class="list-unstyled whatwedolinks">
                        <li>
                          <a href="about.html"> INDUSTRY REPORTS</i></a>
                        </li>
                        <li>
                          <a href="about.html"> CUSTOM RESEARCH</i></a>
                        </li>
                        <li>
                          <a href="about.html"> CONSULTING</i></a>
                        </li>
                      </ul>
                    </div>
            </div>
            <div class="col-md-8 col-sm-12 pl-3 pt-3 pb-3 bg-prime text-center">
              <img src="assets/images/cust/img/what-we.png" alt="" class="">
                <h3 class="p-3 clrfff text-justify f22">Loremui iendis iusto sunt, ex est atque non sit voluptates possimus officia. Aspernatur, eveniet molestias! consectetur adipisicing elit. Magnam laboriosam repellat est at quibusdam? Iusto facilis aperiam recusandae est accusantium dicta, saepe sint sunt libero officiis autem ab voluptas dolorum repellat praesentium molestiae deleniti, dolore veniam. Ea modi libero enim.</h3>
              </div>
        </div>
    </div> 


  </section>
<!-- End -->

<?php if(count($reports_data) > 0){?>
<!-- Trending  -->
<section class="trenReport mt-5 bg-prime">
    <div id="wrapperTrend">
      <h2 class="sec-head  text-center ls-1 clrfff pt-5 ls-1 pb-5">Trending Reports</h2>

      <div class="trenReportPar ">
        <ul class="nav nav-tabs nav-justified mxwidth3">
        <li class=" active">
          <a class="" href="#h-and-m" ><i class="fa fa-stethoscope"></i> Healthcare <br> and Medical</a>
        </li>
        <li class="">
          <a class="" href="#c-and-m" ><i class="fa fa-flask"></i>Chemical <br> and Materials</a>
        </li>
        <li class="">
          <a class="" href="#ict-semi" ><i class="fa fa-camera"></i>ICT  and <br> Semiconductor</a>
        </li>
        <li class="">
          <a class="" href="#food-bev" ><i class="fa fa-glass"></i>Food and <br> beverages</a>
        </li>
      </ul>
        <div class="tab-content">
          <div id="h-and-m" class="content-pane is-active">
            <div class="row">
              <div class="col-md-5 col-sm-12"></div>
              <div class="col-md-7 col-sm-12 bg-fff">
                <div class="trenrpSinglePr">
                    
                    <?php
                    $i = 0;
                    foreach ($reports_data as $report) {
                        if($report['category'] != 10)
                            continue;
                       if($i >= 3) 
                           break;
                           $i++;
                    ?>
                                           
                  <div class="hmr-single mb-1 d-flex">
                    <div class="">
                      <h3 class="f20 pt-2 pb-1"><a href="<?php echo base_url('Cust/Controller_Report/details/'.$report['id']) ?>" class="second-color"><?php echo $report['title'];?></a></h3>
                        <span class="pr-3 f14 op05" style="border-right:1px solid #000;">Published Date : <strong><?php echo $report['dateOfPublished'];?></strong> </span>
                        <span class="pr-3 pl-3 f14 op05" style="border-right:1px solid #000;">Pages : <strong><?php echo $report['pages'];?></strong> </span>
                      </div>
                  </div>
                    
                   <?php  } ?>
                    
                </div>
              </div>
            </div>
     
          </div>
          
    
          <div id="c-and-m" class="content-pane">
            <div class="row">
              <div class="col-md-5 col-sm-12"></div>
              <div class="col-md-7 col-sm-12 bg-fff">
                <div class="trenrpSinglePr">
                    
                    <?php
                    $i = 0;
                    foreach ($reports_data as $report) {
                       if($report['category'] != 9)
                            continue;
                       if($i >= 3) 
                           break;
                           $i++;
                    ?>
                                           
                  <div class="hmr-single mb-1 d-flex">
                    <div class="">
                      <h3 class="f20 pt-2 pb-1"><a href="<?php echo base_url('Cust/Controller_Report/details/'.$report['id']) ?>" class="second-color"><?php echo $report['title'];?></a></h3>
                        <span class="pr-3 f14 op05" style="border-right:1px solid #000;">Published Date : <strong><?php echo $report['dateOfPublished'];?></strong> </span>
                        <span class="pr-3 pl-3 f14 op05" style="border-right:1px solid #000;">Pages : <strong><?php echo $report['pages'];?></strong> </span>
                      </div>
                  </div>
                    
                   <?php  } ?>
                    
                </div>
              </div>
            </div>
    
          </div>
   
    
          <div id="ict-semi" class="content-pane">
            <div class="row">
              <div class="col-md-5 col-sm-12"></div>
              <div class="col-md-7 col-sm-12 bg-fff">
                <div class="trenrpSinglePr">
                    
                    <?php
                    $i = 0;
                    foreach ($reports_data as $report) {
                        if($report['category'] != 7)
                            continue;
                       if($i >= 3) 
                           break;
                           $i++;
                    ?>
                                           
                  <div class="hmr-single mb-1 d-flex">
                    <div class="">
                      <h3 class="f20 pt-2 pb-1"><a href="<?php echo base_url('Cust/Controller_Report/details/'.$report['id']) ?>" class="second-color"><?php echo $report['title'];?></a></h3>
                        <span class="pr-3 f14 op05" style="border-right:1px solid #000;">Published Date : <strong><?php echo $report['dateOfPublished'];?></strong> </span>
                        <span class="pr-3 pl-3 f14 op05" style="border-right:1px solid #000;">Pages : <strong><?php echo $report['pages'];?></strong> </span>
                      </div>
                  </div>
                    
                   <?php  } ?>
                    
                </div>
              </div>
            </div>
          
          </div>
          <div id="food-bev" class="content-pane">
            <div class="row">
              <div class="col-md-5 col-sm-12"></div>
              <div class="col-md-7 col-sm-12 bg-fff">
                <div class="trenrpSinglePr">
                    
                    <?php
                    $i = 0;
                    foreach ($reports_data as $report) {
                        if($report['category'] != 6)
                            continue;
                       if($i >= 3) 
                           break;
                           $i++;
                    ?>
                                           
                  <div class="hmr-single mb-1 d-flex">
                    <div class="">
                      <h3 class="f20 pt-2 pb-1"><a href="<?php echo base_url('Cust/Controller_Report/details/'.$report['id']) ?>" class="second-color"><?php echo $report['title'];?></a></h3>
                        <span class="pr-3 f14 op05" style="border-right:1px solid #000;">Published Date : <strong><?php echo $report['dateOfPublished'];?></strong> </span>
                        <span class="pr-3 pl-3 f14 op05" style="border-right:1px solid #000;">Pages : <strong><?php echo $report['pages'];?></strong> </span>
                      </div>
                  </div>
                    
                   <?php  } ?>
                    
                </div>
              </div>
            </div>
         
          </div>
        
        </div>
     
      </div>
      
    
   
    </div>


  
    <h3><a href="<?php echo base_url('Cust/Controller_Report') ?>" class="pt-3 pr-5 f18" style="float: right;"> <i class="fa fa-book pr-1"></i> All reports</a></h3>
  
       


</section>
<!--  -->
<?php }?>

<!-- Blogs & PRs -->
<section class="sectionWs bggradient">
  
  <div class="container">
    <!-- <h2 class="sec-head font-weight-bold text-uppercase ls-1 prime-color">Insights</h2> -->
  <div class="row pt-2 pb-4 ">
    <div class="col-md-6 col-sm-12" style="border-right:rgba(0,0,0,.1);">
      <h4 class=" pb-5 f20 ls-1 text text-center  clrfff">PRESS RELEASE</h4>
      
      <?php
        $i = 0;
        foreach ($pressrelease_data as $pr) {
        if($i >= 3) 
            break;
             $i++;
        ?>
      
      <div class="row">
        <div class="col-sm-3">
          <img src="assets/images/cust/img/avatar2.png" alt="" class="w-100">
        </div>
        <div class="col-sm-9 hmprSingle">
          <h6><a href="<?php echo base_url('Cust/Controller_PressRelease/details/'.$pr['id']) ?>" class="clrfff"><?php echo $pr['title'];?></a></h6>
          <p><span class="clrfff date" >Published : <?php echo $pr['created_at'];?></span></p>
          <p class="text-right"><a href="<?php echo base_url('Cust/Controller_PressRelease/details/'.$pr['id']) ?>" class="clrfff" >Read More</a></p>
        </div>
      </div>
      <hr>
       <?php  } ?>
      
<!--      <p class="text-right p-4" style="bottom: 0; position: absolute;">
        <a href="blog-listing.html" class="clrfff f21">All PRs</a>
      </p>-->
   
    </div>
    <div class="col-md-6 col-sm-12 p-0 hm-blogs">
      <h4 class=" pb-5 f20 ls-1 text text-center  clrfff">BLOGS</h4>
      <div class="row">
          
          <?php
        $i = 0;
        foreach ($blogs_data as $blog) {
        if($i >= 2) 
            break;
             $i++;
        ?>
        <div class="col-sm-12    align-self-center">
          <div class="content">
            <img class="left-side" src="assets/images/cust/img/industry-report.png" alt="Any Image">
            <h6> <a href="<?php echo base_url('Cust/Controller_Blog/details/'.$blog['id']) ?>" class="clrfff"><?php echo $blog['title'];?></a></h6>
            <p class="clrfff"><?php echo $blog['description'];?> <a href="<?php echo base_url('Cust/Controller_Blog/details/'.$blog['id']) ?>" class="clrfff f19 pl-3">Read more...</a> </p>

          </div>
        </div>          
          <?php  } ?>
          
      </div>
      <!-- <hr> -->
      <!-- <p class="text-right p-4" >
      <a href="blog-listing.html" class="clrfff f21">All blogs</a>
    </p> -->
    </div>
  </div>
</div>
</section>
<!--  -->
<!-- Why Choose us -->
<section class="sectionWs">
 

  <div class="container pb-4">
    <!-- <h2 class="sec-head font-weight-bold text-uppercase ls-1 prime-color ">Why choose us</h2> -->
  <div class="row">

    <div class="col-md-6 col-sm-12 align-self-center">
      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="whychooseus">
          <h4 class="text-success font-weight-bold f18 ls-1"><i class="fa fa-check-circle pr-1 f22"></i> QUALITY ASSURANCE</h4>
          <p class="pt-2 pb-2 op05">Lorem ipsum dolor sit acaecati repellendus quod repellat nobis voluptas perspiciatis eveniet molestias cupiditate est quaerat eaque autem veniam iusto saepe amet laudantium magni, reprehenderit voluptatibus rerum. Similique eius voluptate deleniti quidem consectetur.</p>
       
          <h4 class="text-success font-weight-bold f18 ls-1">  <i class="fa fa-users pr-1 f22"></i>  EXPERT TEAM</h4>
          <p class="pt-2 pb-2 op05">Lorem ipsum dolor sit acaecati repellendus quod repellat nobis voluptas perspiciatis eveniet molestias cupiditate est quaerat eaque autem veniam iusto saepe amet laudantium magni, reprehenderit voluptatibus rerum. Similique eius voluptate deleniti quidem consectetur.</p>
       
          <h4 class="text-success font-weight-bold f18 ls-1"> <i class="fa fa-phone pr-1 f22"></i> 24/7 SUPPORT</h4>
          <p class="pt-2 pb-2 op05">Lorem ipsum dolor sit acaecati repellendus quod repellat nobis voluptas perspiciatis eveniet molestias cupiditate est quaerat eaque autem veniam iusto saepe amet laudantium magni, reprehenderit voluptatibus rerum. Similique eius voluptate deleniti quidem consectetur.</p>
       
          <h4 class="text-success font-weight-bold f18 ls-1"> <i class="fa fa-money pr-1 f22"></i> SECURED PAYMENT</h4>
          <p class="pt-2 pb-2 op05">Lorem ipsum dolor sit acaecati repellendus quod repellat nobis voluptas perspiciatis eveniet molestias cupiditate est quaerat eaque autem veniam iusto saepe amet laudantium magni, reprehenderit voluptatibus rerum. Similique eius voluptate deleniti quidem consectetur.</p>
       
        </div>
        <!-- <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" class="ls-1 wcu-title" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               QUALITY ASSURANCE
              </a>
              <span class="float-right"><i class="fa fa-caret-down"></i></span>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block p-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laborum aperiam rem harum eaque! Voluptates iure ipsam dolorem quia vel.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed ls-1 wcu-title" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                EXPERT TEAM
              </a>
              <span class="float-right"><i class="fa fa-caret-down"></i></span>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-block p-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laborum aperiam rem harum eaque! Voluptates iure ipsam dolorem quia vel.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingFour">
            <h5 class="mb-0">
              <a class="collapsed ls-1 wcu-title" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                24/7 SUPPORT
              </a>
              <span class="float-right"><i class="fa fa-caret-down"></i></span>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-block p-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laborum aperiam rem harum eaque! Voluptates iure ipsam dolorem quia vel.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingFour">
            <h5 class="mb-0">
              <a class="collapsed ls-1 wcu-title" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                SECURED PAYMENT
              </a>
              <span class="float-right"><i class="fa fa-caret-down"></i></span>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-block p-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laborum aperiam rem harum eaque! Voluptates iure ipsam dolorem quia vel.
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <div class="col-md-6 col-sm-12 align-self-center"> 
      <img src="assets/images/cust/img/whyUs.jpg" alt="" class="w-100">
    </div>
  </div>
</div>
</section>
<!--  -->
<!-- <hr style="background-color: rgba(0,0,0,.1);"> -->
<!-- footer -->
<!--<section class="footer pb-3 pb-5 pt-3  bg-prime">
  <div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12 text-center">
      <div class="ftr-data">
        <img src="assets/images/cust/img/logo.jpeg" alt="" class="">
        <div class="d-flex pt-4">
        <p class="phone pr-4 m-auto"><i class="fa fa-phone pr-3"></i>+200 4586 5978<i class="fa fa-envelope pl-3 pr-3"></i>info@globalinfiresearch.com</p>
         <p class="phone"></p> 
      </div>
        <div class="list-unstyled ftrlinks">
           <a href="index.html">Home</a>
          <a href="reports.html">Reports</a>
          <a href="categories.html">categories</a>
          <a href="blog-listing.html">Media</a>
          <a href="about.html">About us</a>
          <a href="contact.html">Contact us</a> 
          <a href="privacy-policy.html">Privacy policy</a>
          <a href="terms.html">Terms and condition</a>
          
          <a href="return-policy.html">Return policy</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="faqs.html">FAQS</a>

        </div>
        <h5 class="p-3 clrfff op05">“The main goal for us is to turn data into information and information into insights followed by business growth.”</h5>
       
        <div class="s-icons">
          <a href="#" class="clrfff"><i class="fa fa-facebook"></i></a>
          <a href="#" class="clrfff"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
</section>-->


<!--    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap-slider.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/slim.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script src="./js/script.js"></script>-->
    
</body>
</html>