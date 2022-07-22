<style>
    .navbar-brand {
    width: 100px !important;
  }
  .navbar-brand img, .ftr-data img {
    width: 100px !important;    
}
* { word-break: break-word;}


@media screen and (max-width: 991.98px) {
    .h2 {
    font-size: 1.5rem;
}
}
</style>
 
  <header class="main-header">
      
      <!-- Main Navbar -->
<section id="topNav">
  <nav class="navbar navbar-expand-lg navbar-light gi-nav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('/') ?>">
          <img src="<?php echo base_url('assets/images/cust/img/logo.png') ?>" alt="" class="navlogo" id="topNavLogo">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topMenus" aria-controls="topMenus" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <!-- <i class="fa fa-bars"></i> -->
        </span>
      </button>
    
  <div class="collapse navbar-collapse" id="topMenus">
      <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item active "> <a class="nav-link mainmenua" href="<?php echo base_url('/cust') ?>">Home </a> </li> -->
          <li class="nav-item "><a class="nav-link mainmenua" href="<?php echo base_url('reports') ?>"> Reports </a></li>
      <li class="nav-item dropdown">
          <a class="nav-link    mainmenua" href="<?php echo base_url('categories') ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu catdrop" aria-labelledby="navbarDropdown">
            <div class="container topnavDropdown">
              <div class="row">
                <div class="col-md-4">
                
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/1')?>">
                        <i class="fa fa-plane f23 pr-2"></i> Aerospace and defence
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/2')?>">
                          <i class="fa fa-automobile f23 pr-2"></i> Automotive and Transportation
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/3')?>">
                          <i class="fa fa-wrench f23 pr-2"></i> Construction and Manufacturing
                      </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/4')?>">
                        <i class="fa fa-cart-arrow-down f23 pr-2"></i> Consumer Goods
                    </a>
                  </li>

                </ul>
                </div>
                
                <div class="col-md-4">
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/5')?>">
                        <i class="fa fa-bolt f23 pr-2"></i>  Energy and Power
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/6')?>">
                          <i class="fa fa-glass f23 pr-2"></i>  Food and Beverages
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/7')?>">
                          <i class="fa fa-camera f23 pr-2"></i> ICT Media
                      </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/8')?>">
                        <i class="fa fa-cog f23 pr-2"></i> Machinery and Equipment
                    </a>
                  </li>
                  
                </ul>
                </div>
                
                <div class="col-md-4">
                  <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/9')?>">
                            <i class="fa fa-flask f23 pr-2"></i> Materials and Chemicals
                        </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/10')?>">
                              <i class="fa fa-ambulance f23 pr-2"></i> Pharmaceuticals and Healthcare
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/11')?>">
                              <i class="fa fa-fax f23 pr-2"></i> Semiconductor and Electronics
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pt-1 pb-1 active" href="<?php echo base_url('reports/12')?>">
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
        <a class="nav-link    mainmenua" href="#" id="mediaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Media
        </a>
        <div class="dropdown-menu mediadrop" aria-labelledby="mediaDropdown">
       
         
                <ul class="list-unstyled">
                  <li>
                    <a href="<?php echo base_url('blogs') ?>"><i class="fa fa-newspaper-o pr-2 pl-2 f24"></i> Blogs</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('press-release') ?>"><i class="fa fa-newspaper-o pr-2 pl-2 f24"></i>Press Release</a>
                  </li>
                </ul>
                
            


        </div>
      </li> 
      <!-- <li class="nav-item"><a class="nav-link mainmenua" href="<?php echo base_url('our-solutions') ?>"> Our Solutions </a></li> -->
      <li class="nav-item"><a class="nav-link mainmenua" href="<?php echo base_url('about-us') ?>"> About </a></li>
      <li class="nav-item"><a class="nav-link mainmenua" href="<?php echo base_url('contact-us') ?>"> Contact </a></li>
    </ul>
      
    <form action="<?php echo base_url('search') ?>" method="post" class="form-inline my-2 my-lg-0 inner-addon" style="position:relative;">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="right: 8px;position: absolute; border:none;">
        <i class="fa fa-search"></i>
      </button>
        <input class="form-control mr-sm-2" type="search" id="search" name="search" placeholder="Search" aria-label="Search" >

    </form>

  </div>
 
  </div>

  </nav>

</section>

<!-- End -->      
  

       <!-- Page Head -->
  <section class="pageTopHead">
    <div class="child"></div>
  </section>
  <h1 class="pthTitle"><?php echo $page_title?></h1>
  <!--  -->
      
      
<!--      <section id="topNav">
          <nav class="navbar navbar-expand-lg navbar-light gi-nav">
              <div class="container">
                  <a class="navbar-brand" href="index.html">
                      <img src="assets/dist/img/logo.png" alt="" class="navlogo" id="topNavLogo">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topMenus" aria-controls="topMenus" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon">
                          <i class="fa fa-bars"></i>
                      </span>
                  </button>

                  <div class="collapse navbar-collapse" id="topMenus">
                      <ul class="navbar-nav mr-auto">
                          <li class="nav-item active "> <a class="nav-link mainmenua" href="index.html">Home </a> </li>
                          <li class="nav-item "><a class="nav-link mainmenua" href="report-listing.html"> Reports </a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link    mainmenua" href="categories.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                                                          <i class="fa fa-automobile f23 pr-2"></i> Automotive and Transportation
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
                                      <div class="row">
                                          <div class="col allcatbtn">
                                              <a href="categories.html"></a>
                                          </div>
                                      </div>
                                  </div>



                              </div>
                          </li> 


                          <li class="nav-item dropdown">
                              <a class="nav-link    mainmenua" href="#" id="mediaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Media
                              </a>
                              <div class="dropdown-menu mediadrop" aria-labelledby="mediaDropdown">


                                  <ul class="list-unstyled">
                                      <li>
                                          <a href="blog-listing.html"><i class="fa fa-newspaper-o pr-2 pl-2 f24"></i> Blogs</a>
                                      </li>
                                      <li>
                                          <a href="pr-listing.html"><i class="fa fa-newspaper-o pr-2 pl-2 f24"></i>Press Release</a>
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
      <!--  -->
  </header>