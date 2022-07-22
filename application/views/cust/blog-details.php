<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <title>GI Research</title>
    <style>
        
        .pthTitle{
            display: none;
        }
        .secHead h1{
          margin-top: 151px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
  <div class="secHead pb-2">

  <h1><?php echo $blogs_data['urlKeyword']?></h1>
  </div>
</div>
  <section class="">

   <div class="container p-3">
        <div class="row justify-content-center pt-4">
            <div class="col-sm-12 col-md-12">
                <div class="singleBlog"> 
                    
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                              <li class="breadcrumb-item active" aria-current="page"><?php echo mb_strimwidth($blogs_data['title'], 0, 100, "...");?></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Cryptocurrencies typically operate</li> -->
                            </ol>
                          </nav>
                      
                      <h4 class="prime-color"><?php echo $blogs_data['title']?></h4>
                      <div class="d-flex pt-2">

                      <p class="f11"><i class="fa fa-user pr-2"></i><span><?php echo $users_data['firstname']?></span></p>
                      <p class="pl-3 op05  f11"><i class="fa fa-calendar pr-2"></i><?php echo $blogs_data['created_at']?></p>
                      </div>
          
                  
                      <div class="pt-3">
                          <!--<p><?php // echo $blogs_data['description']?></p>-->
                           <div class="singleBlogImg text-center">
                            <img src="<?php echo base_url($blogs_data['image']) ?>" alt="" class="" >
                          </div>
                          <p class="pt-4"><?php echo $blogs_data['description']?></p>
                    </div>
                </div>
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
        <img src="./img/logo.jpeg" alt="" class="">
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


<!-- Modals  -->

<!-- Modal -->
<div class="modal fade" id="giGlobalSearch" tabindex="-1" role="dialog" aria-labelledby="giGlobalSearchLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header pb-0" style="border-bottom: none;">
        <h5 class="modal-title op05 f13" id="giGlobalSearchLabel">Please enter keywords</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pt-0">
        <form action="#">
          <label for="gisearch"></label>
          <input type="search" id="gisearch" name="gisearch">
          <br>
          <input type="submit" value="Search" class="gi-submit">
        </form>
      </div>
    
    </div>
  </div>
</div>


<!--  -->


<script>
  $('.carousel').carousel({
  interval: 1000
})

</script>

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap-slider.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/slim.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>